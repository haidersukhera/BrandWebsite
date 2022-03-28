
 @extends('admin.admin_master')


 @section('admin')

    <div class="py-12">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                   <div class="card">



                        <div class="card-header">All Brand</div>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">User_id</th>
                        <th scope="col">Brand Name</th>
                        <th scope="col">Brand Image</th>
                        <th scope="col">Create at</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>

                   <tbody>


                       @foreach ($brands as $brand)

                    <tr>
                      <th scope="row">{{$brand->id}}</th>
                      <td>{{$brand->brand_name}}</td>
                      <td><img src="{{asset($brand->brand_image)}}" style="height: 40px; width:70px;" alt=""></td>
                      <td>{{$brand->created_at->diffForHumans()}}</td>
                      <td>
                        <a href="{{url('edit/brand')}}/{{$brand->id}}" class="btn btn-info">Edit</a>
                        <a href="{{url('delete/brand')}}/{{$brand->id}}" onclick="return confirm('Are you sure to Delete this')" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>

                        @endforeach
                  </tbody>

                  </table>


                </div>
                {!! $brands->links() !!}

            </div>

            <div class="col-md-4">
                <div class="card">
                     <div class="card-header">Add Brand</div>

                     <div class="card-body">
                        <form action="{{route('store.brand')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Brande Name</label>
                              <input type="text" name="brand_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                        @error('brand_name')

                                        <span class="text-danger">{{$message}}</span>

                                        @enderror

                            </div>


                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Brande Image</label>
                                <input type="file" name="brand_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                          @error('brand_image')

                                          <span class="text-danger">{{$message}}</span>

                                          @enderror

                              </div>

                            <button type="submit" class="btn btn-primary">Add Brand</button>
                          </form>

                     </div>




                    </div>
                </div>

            </div>
        </div>


    </div>

    @endsection

