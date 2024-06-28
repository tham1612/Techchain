@extends('admin.layouts.master')
@section('title')
  edit  san pham :{{$model->name}}
@endsection
@section('content')
    <div class="container">
        <form action="{{route('admin.catelogues.update',$model->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="{{  $model->name}}" name="name">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="cover" class="form-label">file:</label>
                        <input type="file" class="form-control" id="cover" name="cover">
                        <img src="{{Storage::url($model->cover)}}" alt="" width="300px" class="mt-3">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="1"
                                   @if($model->is_active)checked @endif
                                   name="is_active">
                            Is_active
                        </label>
                    </div>
                </div>

            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
