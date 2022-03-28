
 @extends('admin.admin_master')


 @section('admin')

    <div class="py-12">

        <div class="container">
            <h4>Home About</h4>
            <a href="{{route('add.about')}}"><button class="btn btn-info">Add About</button></a><br><br>
            <div class="row">


                <div class="col-lg-12">
                   <div class="card">

                        <div class="card-header">All About Data</div>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" width="5%">SL</th>
                        <th scope="col" width="15%"> Title</th>
                        <th scope="col" width="30%">Short Description</th>
                        <th scope="col" width="20%">Long Description</th>
                        <th scope="col" width="15%">Action</th>
                      </tr>
                    </thead>

                   <tbody>

                      @php($i = 1)

                       @foreach ($abouts as $about)

                    <tr>
                      <th scope="row">{{$i++}}</th>
                      <td>{{$about->title}}</td>
                      <td>{{$about->short_des}}</td>
                      <td>{{$about->long_des}}</td>
                      <td>
                        <a href="{{url('edit/about')}}/{{$about->id}}" class="btn btn-info">Edit</a>
                        <a href="{{url('delete/about')}}/{{$about->id}}" onclick="return confirm('Are you sure to Delete this')" class="btn btn-danger">Delete</a>
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

