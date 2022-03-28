
 @extends('admin.admin_master')


 @section('admin')

    <div class="py-12">

        <div class="container">
            <h4>Services</h4>
            <a href="{{route('add.service')}}"><button class="btn btn-info">Add Services</button></a><br><br>
            <div class="row">


                <div class="col-lg-12">
                   <div class="card">
                       @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{Session('success')}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      @endif
                        <div class="card-header">All Services Data</div>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" width="5%">SL</th>
                        <th scope="col" width="15%"> Title</th>
                        <th scope="col" width="30%"> Description</th>
                        <th scope="col" width="15%">Action</th>
                      </tr>
                    </thead>

                   <tbody>

                      @php($i = 1)

                       @foreach ($services as $service)

                    <tr>
                      <th scope="row">{{$i++}}</th>
                      <td>{{$service->title}}</td>
                      <td>{{$service->description}}</td>
                      <td>
                        <a href="{{url('edit/service')}}/{{$service->id}}" class="btn btn-info">Edit</a>
                        <a href="{{url('delete/service')}}/{{$service->id}}" onclick="return confirm('Are you sure to Delete this')" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    <tr>
                        @endforeach
                  </tbody>

                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection

