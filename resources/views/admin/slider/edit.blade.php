@extends('admin.admin_master')


@section('admin')


<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Slider</h2>
        </div>
        <div class="card-body">
            <form action="{{url('update/slider')}}/{{$sliders->id}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Slider Title</label>
                    <input type="text" name="title" value="{{$sliders->title}}" class="form-control" id="exampleFormControlInput1" placeholder="Title">

                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" name="description"  id="exampleFormControlTextarea1" rows="3">{{$sliders->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Slider Image</label>
                    <input type="file" class="form-control-file"  name="image" id="exampleFormControlFile1">
                    <img src="{{asset($sliders->image)}}" alt="">
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Update</button>

                </div>
            </form>
        </div>
    </div>



@endsection
