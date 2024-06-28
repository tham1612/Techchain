<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catelogue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models;

class CatelogueController extends Controller
{
    const PATH_VIEW = 'admin.catelogues.';
    const PATH_UPLOAD = 'catelogues.';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Catelogue::query()->latest('id')->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('cover');
        $data['is_active'] = $data['is_active'] ?? 0;

        if ($request->hasFile('cover')) {
            $data['cover'] = Storage::put(self::PATH_UPLOAD, $request->file('cover'));
        }

        Catelogue::query()->create($data);
        return redirect()->route('admin.catelogues.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = Catelogue::query()->findOrFail($id);

        return view(self::PATH_VIEW . __FUNCTION__, compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,string $id)
    {
        $model = Catelogue::query()->findOrFail($id);

        return view(self::PATH_VIEW . __FUNCTION__, compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Catelogue::query()->findOrFail($id);

        $data = $request->except('cover');
        $data['is_active'] = $data['is_active'] ?? 0;

        if ($request->hasFile('cover')) {
            $data['cover'] = Storage::put(self::PATH_UPLOAD, $request->file('cover'));
        }
        $currentCover=$model->cover;

        $model->update($data);
        if ($request->hasFile('cover')&& $currentCover && Storage::exists($currentCover)){
            Storage::delete($currentCover);
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
