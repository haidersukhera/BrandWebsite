
 @extends('admin.admin_master')


 @section('admin')

    <div class="py-12">

        <div class="container">
            <h4>Contact</h4>
            <a href="{{route('add.contact')}}"><button class="btn btn-info">Add Contact</button></a><br><br>
            <div class="row">


                <div class="col-lg-12">
                   <div class="card">
                       @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{Session('success')}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      @endif
                        <div class="card-header">All Contact Data</div>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" width="5%">SL</th>
                        <th scope="col" width="30%">Contact Email</th>
                        <th scope="col" width="20%">Contact Phone</th>
                        <th scope="col" width="20%">Contact Address</th>
                        <th scope="col" width="15%">Action</th>
                      </tr>
                    </thead>

                   <tbody>

                      @php($i = 1)

                       @foreach ($contacts as $co)

                    <tr>
                      <th scope="row">{{$i++}}</th>
                      <td>{{$co->email}}</td>
                      <td>{{$co->phone}}</td>
                      <td>{{$co->address}}</td>
                      <td>
                        <a href="{{url('edit/contact')}}/{{$co->id}}" class="btn btn-info">Edit</a>
                        <a href="{{url('delete/contact')}}/{{$co->id}}" onclick="return confirm('Are you sure to Delete this')" class="btn btn-danger">Delete</a>
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

