@extends('admin.admin_master')


@section('admin')


<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Contact</h2>
        </div>
        <div class="card-body">
            <form action="{{route('store.contact')}}" method="POST" >
                @csrf


                <div class="form-group">
                    <label for="exampleFormControlInput1">Contact Email</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">

                </div>
                <div class="form-group">
                    <label class="form-label" for="typePhone">Contact Phone number</label>
                    <input type="tel" id="typePhone" name="phone" class="form-control"  placeholder="Phone number"/>

                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Contact Address</label>
                    <textarea type="text" name="address" class="form-control" id="exampleFormControlInput1" placeholder="Address"></textarea>

                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>

                </div>
            </form>
        </div>
    </div>



@endsection

