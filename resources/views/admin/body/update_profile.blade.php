
 @extends('admin.admin_master')


 @section('admin')

    <div class="card-header card-header-border-bottom">

        <h2>Update Profile</h2>
    </div>
    <div class="card card-default">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{Session('success')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

          @endif
    <div class="card-body">
        <form class="form-pill"  method="POST" action="{{route('update.profile')}}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput3">Username</label>
                <input type="text" value="{{$user->name}}" name="name" class="form-control" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlPassword3">User Email</label>
                <input type="email" value="{{$user->email}}" name="email" class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary ">Update</button>
        </form>
    </div>
</div>

 @endsection
