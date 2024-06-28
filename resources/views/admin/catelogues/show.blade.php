@extends('admin.layouts.master')
@section('title')
    Chi tiet  san pham :{{  $model->name}}
@endsection
@section('content')
    <div class="container">
        <form action="{{route('admin.catelogues.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" value="{{  $model->name}}" name="name">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="cover" class="form-label">file:</label>
                        <img src="{{Storage::url($model->cover)}}" alt="" width="300px">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="1" checked name="is_active">
                            Is_active
                        </label>
                    </div>
                </div>

            </div>


        </form>
    </div>
@endsection
