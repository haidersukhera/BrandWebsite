
 @extends('admin.admin_master')


 @section('admin')

    <div class="py-12">

        <div class="container">
            <h4>Home Slider</h4>
            <a href="{{route('add.slider')}}"><button class="btn btn-info">Add Slider</button></a><br><br>
            <div class="row">


                <div class="col-lg-12">
                   <div class="card">

                        <div class="card-header">All Slider</div>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" width="5%">SL</th>
                        <th scope="col" width="15%"> Title</th>
                        <th scope="col" width="30%">Description</th>
                        <th scope="col" width="15%">Image</th>
                        <th scope="col" width="15%">Action</th>
                      </tr>
                    </thead>

                   <tbody>

                      @php($i = 1)

                       @foreach ( $sliders as $slider)

                    <tr>
                      <th scope="row">{{$i++}}</th>
                      <td>{{$slider->title}}</td>
                      <td>{{$slider->description}}</td>
                      <td><img src="{{asset($slider->image)}}" alt="" style="height: 40px; width:70px;"></td>
                      <td >
                        <a href="{{url('edit/slider')}}/{{$slider->id}}" class="btn btn-info">Edit</a>
                        <a href="{{url('delete/slider')}}/{{$slider->id}}" onclick="return confirm('Are you sure to Delete this')" class="btn btn-danger">Delete</a>
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

