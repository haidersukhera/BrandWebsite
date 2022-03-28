@extends('admin.admin_master')


@section('admin')


<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit About</h2>
        </div>
        <div class="card-body">
            <form action="{{url('update/contact')}}/{{$contacts->id}}" method="POST" >
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Contact Address</label>
                    <input type="text" name="address" value="{{$contacts->address}}" class="form-control" id="exampleFormControlInput1" placeholder="Contact">

                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="text" name="email" value="{{$contacts->email}}" class="form-control" id="exampleFormControlInput1" placeholder="Address">

                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Phone</label>
                    <input type="text" name="phone" value="{{$contacts->phone}}" class="form-control" id="exampleFormControlInput1" placeholder="Phone">

                </div>


                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Update</button>

                </div>
            </form>
        </div>
    </div>



@endsection

