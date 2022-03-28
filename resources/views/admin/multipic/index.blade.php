@extends('admin.admin_master')


@section('admin')

    <div class="py-12">
        <div class="container">
            <div class="row">

                <div class="col-md-8">

                   <div class="card-group">

                     @foreach ($images as $multi)

                    <div class="col-md-4 mt-5">
                        <div class="card">
                            <img src="{{asset($multi->image)}}"  style="height: 200px; width:200px;" alt="">
                            <a href="{{url('delete/image')}}/{{$multi->id}}" onclick="return confirm('Are you sure to Delete this')" class="btn btn-danger">Delete</a>
                        </div>
                    </div>

                     @endforeach
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                     <div class="card-header"> Multi Image</div>

                     <div class="card-body">
                        <form action="{{route('store.image')}}" method="POST" enctype="multipart/form-data">
                            @csrf



                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Multi Image</label>
                                <input type="file" name="image[]" class="form-control" multiple="" id="exampleInputEmail1" aria-describedby="emailHelp">

                                          @error('image')

                                          <span class="text-danger">{{$message}}</span>

                                          @enderror

                              </div>

                            <button type="submit" class="btn btn-primary">Add Image</button>
                          </form>

                     </div>




                    </div>
                </div>

            </div>
        </div>


    </div>
@endsection


