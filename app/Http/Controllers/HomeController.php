<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Image;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function HomeSlider(){

        $sliders=Slider::latest()->get();
        return view('admin.slider.index',compact('sliders'));
    }

    public function AddSlider(){

return view('admin.slider.create');
    }


    public function StoreSlider(Request $request){


        $validatedData = $request->validate([
            'title' =>'required',
            'description' =>'required',
            'image' =>'required',


        ],

     );

        $slider_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ex = strtolower($slider_image->getClientOriginalExtension());
        $image_name = $name_gen.'.'.$img_ex;
        $up_location = 'image/slider/';
        $last_image = $up_location.$image_name;
        $slider_image->move($up_location,$image_name);
        Slider::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_image,
            'created_at' => Carbon::now()
        ]);

        $notification = array(

            'message' => 'Slider insert  successfully',
              'alert-type' => 'success'
        );




return redirect()->route('home.slider')->with($notification );

    }


    public function Edit($id){
        $sliders=Slider::find($id);
        return view('admin.slider.edit',compact('sliders'));
    }

    public function update(Request $request,$id){

        $old_image=$request->old_image;
        $slider_image = $request->file('image');
       if($slider_image){
        $name_gen = hexdec(uniqid());
        $img_ex = strtolower($slider_image ->getClientOriginalExtension());
        $image_name = $name_gen.'.'.$img_ex;
        $up_location = 'image/slider/';
        $last_image = $up_location.$image_name;
        $slider_image ->move($up_location,$image_name);

        Slider::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_image,
            'created_at' => Carbon::now()
        ]);


        $notification = array(

            'message' => 'Slider Updated successfully',
              'alert-type' => 'info'
        );

        return redirect()->route('home.slider')->with( $notification);

       }

       else{
        Slider::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'created_at' => Carbon::now()
        ]);

        $notification = array(

            'message' => 'Slider Updated successfully',
              'alert-type' => 'info'
        );

        return redirect()->route('home.slider')->with( $notification);

       }

    }


    public function Delete($id){


        Slider::find($id)->delete();
        $notification = array(

            'message' => 'Slider Delete successfully',
              'alert-type' => 'error'
        );
        return redirect()->back()->with( $notification);
    }
}
