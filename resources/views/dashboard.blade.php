<x-app-layout>
    <x-slot name="header">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hi.. <b>{{Auth::user()->name}}</b>
            <b style="float: right;">Total Users
            <span class="badge bg-danger">{{ count($user) }}</span>
            </b>
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">SL.no</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Create at</th>
                      </tr>
                    </thead>
                   @foreach ($user as $u )
                   <tbody>
                    <tr>
                      <th scope="row">{{$u->id}}</th>
                      <td>{{$u->name}}</td>
                      <td>{{$u->email}}</td>
                      <td>{{$u->created_at->diffForHumans()}}</td>
                    </tr>
                    <tr>

                  </tbody>
                   @endforeach
                  </table>
            </div>
        </div>


    </div>
</x-app-layout>
