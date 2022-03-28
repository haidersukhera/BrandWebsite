<x-app-layout>
    <x-slot name="header">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Category <b></b>
            <b style="float: right;">
            <span class="badge bg-danger"></span>
            </b>
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="container">
            <div class="row">


            <div class="col-md-8">
                <div class="card">
                    @if (session('success'))


                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{Session('success')}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      @endif


                     <div class="card-header">Edit Category</div>

                     <div class="card-body">
                        <form action="{{url('update/category')}}/{{$categories->id}}" method="POST">
                            @method('PUT')
                            @csrf

                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Update Category Name</label>
                              <input type="text" name="category_name" class="form-control" value="{{$categories->category_name}}" id="exampleInputEmail1" aria-describedby="emailHelp">

                                        @error('category_name')

                                        <span class="text-danger">{{$message}}</span>

                                        @enderror

                            </div>

                            <button type="submit" class="btn btn-outline-primary">Update Category</button>
                          </form>

                     </div>




                    </div>
                </div>

            </div>
        </div>


    </div>
</x-app-layout>
