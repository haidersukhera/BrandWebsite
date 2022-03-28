<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function HomeService(){
        $services = Service::latest()->get();
        return view('admin.service.index',compact('services'));
    }

    public function AddService(){

        return view('admin.service.create');

    }

    public function StoreService(Request $request){
        Service::insert([
            'title' => $request->title,
            'description' => $request->description,
            'created_at' => Carbon::now()
        ]);
        $notification = array(

            'message' => 'Service insert  successfully',
              'alert-type' => 'success'
        );

        return redirect()->route('home.service')->with($notification);
    }

    public function Edit($id){
        $services=Service::find($id);
        return view('admin.service.edit',compact('services'));
    }

    public function update(Request $request, $id){

        Service::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'created_at' => Carbon::now()
        ]);
        $notification = array(

            'message' => 'Service updated  successfully',
              'alert-type' => 'info'
        );

        return redirect()->route('home.service')->with( $notification);

    }


    public function Delete($id){


        Service::find($id)->delete();
        $notification = array(

            'message' => 'Service Delete  successfully',
              'alert-type' => 'error'
        );
        return redirect()->back()->with( $notification);
    }


    public function ServicePage(){
       $services=Service::all();
        return view('pages.service',compact('services'));
    }
}
