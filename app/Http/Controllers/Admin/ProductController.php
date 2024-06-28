<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catelogue;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductGalley;
use App\Models\ProductSize;
use App\Models\ProductVariant;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    const PATH_VIEW = 'admin.products.';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::query()->with(['catelogue', 'tags'])->latest('id')->get();

        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catelogues = Catelogue::query()->pluck(
            'name', 'id'
        )->all();
        $colors = ProductColor::query()->pluck(
            'name', 'id'
        )->all();
        $sizes = ProductSize::query()->pluck(
            'name', 'id'
        )->all();
        $tags = Tag::query()->pluck(
            'name', 'id'
        )->all();

        return view(self::PATH_VIEW . __FUNCTION__, compact('catelogues', 'colors', 'sizes', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataProduct = $request->except(['product_variants', 'tags', 'product_galleries']);
        $dataProduct['is_active'] = isset($dataProduct['is_active']) ? 1 : 0;
        $dataProduct['is_hot_deal'] = isset($dataProduct['is_hot_deal']) ? 1 : 0;
        $dataProduct['is_good_deal'] = isset($dataProduct['is_good_deal']) ? 1 : 0;
        $dataProduct['is_new'] = isset($dataProduct['is_new']) ? 1 : 0;
        $dataProduct['is_show_home'] = isset($dataProduct['is_show_home']) ? 1 : 0;
        $dataProduct['Slug'] = Str::slug($dataProduct['name']) . '-' . $dataProduct['sku'];

        $dataProductVariantsTmp = $request->product_variants ?? [];
        $dataProductVariants = [];

        foreach ($dataProductVariantsTmp as $key => $item) {
            $tmp = explode('-', $key);
            $dataProductVariants[] = [
                'product_size_id' => $tmp[0] ?? null,
                'product_color_id' => $tmp[1] ?? null,
                'quantity' => $item['quantity'] ?? null,
                'image' => $item['image'] ?? null,
            ];
        }

        if (isset($dataProduct['img_thumbnail'])) {
            $dataProduct['img_thumbnail'] = Storage::put('products', $dataProduct['img_thumbnail']);
        }

        $dataProducttags = $request->tags ?? [];
        $dataProductGalleries = $request->product_galleries ?? [];

        try {
            DB::beginTransaction();

            //** @var Product $product */
            $product = Product::query()->create($dataProduct);

            foreach ($dataProductVariants as $dataProductVariant) {
                $dataProductVariant['product_id'] = $product->id;
                if (isset($dataProductVariant['image'])) {
                    $dataProductVariant['image'] = Storage::put('products', $dataProductVariant['image']);
                }
                ProductVariant::query()->create($dataProductVariant);
            }

            $product->tags()->sync($dataProducttags);

            foreach ($dataProductGalleries as $image) {
                ProductGalley::query()->create([
                    'product_id' => $product->id,
                    'image' => Storage::put('products', $image),
                ]);
            }

            DB::commit();
            return redirect()->route('admin.products.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            dd($exception->getMessage());
            return back()->with('error', 'Error: ' . $exception->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {

        $model = $product->load(['variants.color', 'variants.size']);

        $catelogue = $model->catelogue->name;
        $variants = $model->variants->map(function ($variant) {
            return [
                'quantity' => $variant->quantity,
                'image' => $variant->image,
                'product_color_id' => $variant->color->name ?? 'N/A',
                'product_size_id' => $variant->size->name ?? 'N/A',
            ];
        });
        $galleries = $model->galleries;
        $tags = $model->tags;
//        dd( $variants->toArray());

//        dd($model->toArray(),  $galleries->toArray(),$tags->toArray(),$catelogue);



        return view(self::PATH_VIEW . __FUNCTION__, compact('model', 'galleries', 'variants', 'tags', 'catelogue'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $model = $product->load(['variants.color', 'variants.size']);

        $catelogue = $model->catelogue->name;
        $variants = $model->variants->map(function ($variant) {
            return [
                'quantity' => $variant->quantity,
                'image' => $variant->image,
                'product_color_id' => $variant->color->name ?? 'N/A',
                'product_size_id' => $variant->size->name ?? 'N/A',
            ];
        });
        $galleries = $model->galleries;
        $tags = $model->tags;
        $Catelogues = Catelogue::query()->pluck(
            'name', 'id'
        )->all();
        $Colors = ProductColor::query()->pluck(
            'name', 'id'
        )->all();
        $Sizes = ProductSize::query()->pluck(
            'name', 'id'
        )->all();
        $Tags = Tag::query()->pluck(
            'name', 'id'
        )->all();


        dd($galleries->toArray());

//        dd($model->toArray(),  $galleries->toArray(),$tags->toArray(),$catelogue);


        return view(self::PATH_VIEW . __FUNCTION__, compact('model', 'galleries', 'variants', 'tags', 'catelogue','Catelogues','Colors','Sizes','Tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {

        try {
            DB::transaction(function () use ($product) {
                $product->tags()->sync([]);
                $product->galleries()->delete();
                $product->variants()->delete();
                $product->delete();
            }, 3);
        } catch (\Exception $exception) {
            return back();
        }
    }
}
