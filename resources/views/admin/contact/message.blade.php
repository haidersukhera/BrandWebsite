
 @extends('admin.admin_master')


 @section('admin')

    <div class="py-12">

        <div class="container">
        <h4>Admin Messages</h4>
        <div class="row">
            <div class="col-lg-12">
        <div class="card">
            <div class="card-header">All Message Data</div>
        <table class="table">
        <thead>
        <tr>
        <th scope="col" width="5%">SL</th>
        <th scope="col" width="30%"> Name</th>
        <th scope="col" width="20%"> Email</th>
        <th scope="col" width="20%"> Subject</th>
        <th scope="col" width="20%"> Message</th>
        <th scope="col" width="15%">Action</th>
            </tr>
        </thead>

        <tbody>

            @php($i = 1)

            @foreach ($messages as $message)

        <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$message->name}}</td>
            <td>{{$message->email}}</td>
            <td>{{$message->subject}}</td>
            <td>{{$message->message}}</td>
            <td>

            <a href="{{url('delete/message')}}/{{$message->id}}" onclick="return confirm('Are you sure to Delete this')" class="btn btn-danger">Delete</a>
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

