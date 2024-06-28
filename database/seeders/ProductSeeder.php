<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductGalley;
use App\Models\ProductSize;
use App\Models\ProductVariant;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Psy\Util\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        ProductVariant::query()->truncate();
        ProductGalley::query()->truncate();
        DB::table('product_tag')->truncate();

        Product::query()->truncate();
        ProductSize::query()->truncate();
        ProductColor::query()->truncate();

        Tag::query()->truncate();
        Tag::factory(15)->create();
        foreach (['s', 'M', 'L', 'XL', 'XXL'] as $item) {
            ProductSize::query()->create(['name' => $item]);
        }
        foreach (['#000000', '#FFFFFF', '#0000FF', '#FF00FF', '#808080'] as $item) {
            ProductColor::query()->create(['name' => $item]);
        }
        for ($i = 0; $i < 1000; $i++) {
            $name = fake()->text(100);
            Product::query()->create([
                'catelogue_id' => rand(1, 5),
                'name' => $name,
                'Slug' => \Illuminate\Support\Str::slug($name) . '-' . \Illuminate\Support\Str::random(8),
                'sku' => \Illuminate\Support\Str::random(8) . $i,
                'img_thumbnail' => 'https://canifa.com/img/1000/1500/resize/8/t/8ts23s016-sk010-1.webp',
                'price_regular' => 600000,
                'price_sale' => 499000,

            ]);
        }
        for ($i = 1; $i < 1001; $i++) {
            ProductGalley::query()->insert([
                ['product_id' => $i,
                    'image' => 'https://canifa.com/img/1000/1500/resize/8/t/8ts23s016-sk010-1.webp',
                ],
                [
                    'product_id' => $i,
                    'image' => 'https://canifa.com/img/1000/1500/resize/8/t/8ts23s016-sk010-xl-1.webp',
                ]
            ]);
        }
        for ($i = 1; $i < 15; $i++) {
            DB::table('product_tag')->insert([
                ['product_id' => $i,'tag_id'=> rand(1, 8)],
                ['product_id' => $i,'tag_id'=> rand(9, 15)]
            ]);
        }
        for ($productID = 1; $productID < 1001; $productID++) {
            $data = [];
            for ($sizeID = 1; $sizeID < 5; $sizeID++) {
                for ($colorID = 1; $colorID < 1001; $colorID++) {
                    $data[] = [
                        'quantity' => 100,
                        'image' => 'https://canifa.com/img/1000/1500/resize/8/t/8ts23s016-sk010-xl-1.webp',
                        'product_id' => $productID,
                        'product_size_id' => $sizeID,
                        'product_color_id' => $colorID,
                    ];
                }
            }
            DB::table('product_variants')->insert($data);

        }
    }
}
