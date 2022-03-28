<x-app-layout>
    <x-slot name="header">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Category <b></b>
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
                        <div class="card-header">All Category</div>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">User_id</th>
                        <th scope="col">Categories Name</th>
                        <th scope="col">UserName</th>
                        <th scope="col">Create at</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>

                   <tbody>
                       @foreach ($categories as $cat)


                    <tr>
                      <th scope="row">{{$cat->user_id}}</th>
                      <td>{{$cat->category_name}}</td>
                      <td>{{$cat->user->name}}</td>
                      <td>{{$cat->created_at->diffForHumans()}}</td>
                      <td>
                        <a href="{{url('edit/category')}}/{{$cat->id}}" class="btn btn-outline-info">Edit</a>
                        <a href="{{url('softdelete/category')}}/{{$cat->id}}" class="btn btn-outline-danger">Delete</a>
                      </td>
                    </tr>
                    <tr>
                        @endforeach
                  </tbody>

                  </table>
                  {{$categories->links()}}
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                     <div class="card-header">Add Category</div>

                     <div class="card-body">
                        <form action="{{route('store.category')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Category Name</label>
                              <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                        @error('category_name')

                                        <span class="text-danger">{{$message}}</span>

                                        @enderror

                            </div>

                            <button type="submit" class="btn btn-outline-info">Add Category</button>
                          </form>

                     </div>




                    </div>
                </div>

            </div>
        </div>


{{-- Trash list --}}




<div class="container">
    <div class="row">
        <div class="col-md-8">
           <div class="card">

                <div class="card-header">Trash List</div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">SL</th>
                <th scope="col">Categories Name</th>
                <th scope="col">UserName</th>
                <th scope="col">Create at</th>
                <th scope="col">Action</th>
              </tr>
            </thead>

           <tbody>
            @php($i = 1)
               @foreach ($trash as $cat)


            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$cat->category_name}}</td>
              <td>{{$cat->user->name}}</td>
              <td>{{$cat->created_at->diffForHumans()}}</td>
              <td>
                <a href="{{url('restore/category')}}/{{$cat->id}}" class="btn btn-primary">Restore</a>
                <a href="{{url('pdelete/category')}}/{{$cat->id}}" class="btn btn-danger">Permanant Delete</a>
              </td>
            </tr>
            <tr>
                @endforeach
          </tbody>

          </table>
          {{$trash->links()}}
        </div>
    </div>

    <div class="col-md-4">


    </div>


  </div>
</div>

{{-- End Trash --}}







    </div>
</x-app-layout>
