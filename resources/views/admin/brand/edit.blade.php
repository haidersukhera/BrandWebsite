
 @extends('admin.admin_master')


 @section('admin')

    <div class="py-12">

        <div class="container">
            <div class="row">


            <div class="col-md-8">
                <div class="card">



                     <div class="card-header">Edit Brand</div>

                     <div class="card-body">
                        <form action="{{url('update/brand')}}/{{$brands->id}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <input type="hidden" name="old_image" value="{{$brands->brand_image}}">

                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Update Brand Name</label>
                              <input type="text" name="brand_name" class="form-control" value="{{$brands->brand_name}}" id="exampleInputEmail1" aria-describedby="emailHelp">

                                        @error('brand_name')

                                        <span class="text-danger">{{$message}}</span>

                                        @enderror

                            </div>


                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Update Brande Image</label>
                                <input type="file" name="brand_image" class="form-control" value="{{$brands->brand_image}}" id="exampleInputEmail1" aria-describedby="emailHelp">

                                          @error('brand_image')

                                          <span class="text-danger">{{$message}}</span>

                                          @enderror

                              </div>

                              <div class="form-group">
                                      <img src="{{asset($brands->brand_image)}}" style="height: 200px; width:400px" alt="">
                              </div>
                              <br>

                            <button type="submit" class="btn btn-outline-primary">Update Brand</button>
                          </form>

                     </div>




                    </div>
                </div>

            </div>
        </div>


    </div>
@endsection
