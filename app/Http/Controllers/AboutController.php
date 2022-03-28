<?php

namespace App\Http\Controllers;

use App\Models\HomeAbout;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function HomeAbout(){
        $abouts = HomeAbout::latest()->get();
        return view('admin.home.index',compact('abouts'));
    }

    public function AddAbout(){

        return view('admin.home.create');

    }

    public function StoreAbout(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            'short_des' => 'required',
            'long_des' => 'required',

    ],  );


        HomeAbout::insert([
            'title' => $request->title,
            'short_des' => $request->short_des,
            'long_des' => $request->long_des,
            'created_at' => Carbon::now()
        ]);
        $notification = array(

            'message' => 'About insert  successfully',
              'alert-type' => 'success'
        );

        return redirect()->route('home.about')->with($notification);
    }

    public function Edit($id){
        $abouts=HomeAbout::find($id);
        return view('admin.home.edit',compact('abouts'));
    }

    public function update(Request $request, $id){

        HomeAbout::find($id)->update([
            'title' => $request->title,
            'short_des' => $request->short_des,
            'long_des' => $request->long_des,
            'created_at' => Carbon::now()
        ]);
        $notification = array(

            'message' => 'About update  successfully',
              'alert-type' => 'info'
        );

        return redirect()->route('home.about')->with( $notification);

    }


    public function Delete($id){


        HomeAbout::find($id)->delete();
        $notification = array(

            'message' => 'About Delete  successfully',
              'alert-type' => 'error'
        );
        return redirect()->back()->with(  $notification);
    }

    public function AboutUs(){
        $abouts = HomeAbout::latest()->get();
        return view('pages.about',compact('abouts'));
    }
}
