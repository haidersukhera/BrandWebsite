
 @extends('admin.admin_master')


 @section('admin')


 <div class="card card-default">
    @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{Session('error')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

      @endif
    <div class="card-header card-header-border-bottom">

        <h2>Channge Password</h2>
    </div>
    <div class="card-body">
        <form class="form-pill"  method="POST" action="{{route('update.password')}}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput3">Current Password</label>
                <input type="password" name="oldpassword" class="form-control" id="exampleFormControlInput3" placeholder="Current Password">
            </div>
            @error('oldpassword')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <div class="form-group">
                <label for="exampleFormControlPassword3">New Password</label>
                <input type="password" name="password" class="form-control" id="exampleFormControlPassword3" placeholder="New Password">
            </div>
            @error('password')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <div class="form-group">
                <label for="exampleFormControlPassword3">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="exampleFormControlPassword3" placeholder="Confirm Password">

            </div>
            @error('password_confirmation')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <button type="submit" class="btn btn-primary ">Save</button>
        </form>
    </div>
</div>

 @endsection
