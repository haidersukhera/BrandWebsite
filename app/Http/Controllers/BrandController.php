<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\MultiPic;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;




class BrandController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
            public function Allbrand(){
                $brands=Brand::latest()->paginate(5);
                return view('admin.brand.index', compact('brands'));
            }

                public function AddBrand(Request $request){
                    $validatedData = $request->validate([
                        'brand_name' => 'required', 'unique:brands', 'min:4',
                        'brand_image' => 'required|mimes:png,jpg,jpeg',

                ],

                    [
                        'brand_name.required' => 'please input the Brand name',
                        'brand_image.min' => 'Brand longer than 4 characters',

                    ] );


                        $brand_image = $request->file('brand_image');
                        $name_gen = hexdec(uniqid());
                        $img_ex = strtolower($brand_image->getClientOriginalExtension());
                        $image_name = $name_gen.'.'.$img_ex;
                        $up_location = 'image/brand/';
                        $last_image = $up_location.$image_name;
                        $brand_image->move($up_location,$image_name);

                        Brand::insert([
                            'brand_name' => $request->brand_name,
                            'brand_image' => $last_image,
                            'created_at' => Carbon::now()
                        ]);



                $notification = array(

                    'message' => 'Brand Insert successfully',
                      'alert-type' => 'success'
                );



             return redirect()->back()->with( $notification);

    }

            public function Edit($id){


                $brands=Brand::find($id);
                return view('admin.brand.edit',compact('brands'));
            }

            public function update(Request $request,$id){

                $validatedData = $request->validate([
                    'brand_name' =>'required',


                ],

                [
                    'brand_name.required' => 'please input the Brand name',


                ] );

                $old_image=$request->old_image;
                $brand_image = $request->file('brand_image');

             if($brand_image){
                $name_gen = hexdec(uniqid());
                $img_ex = strtolower($brand_image->getClientOriginalExtension());
                $image_name = $name_gen.'.'.$img_ex;
                $up_location = 'image/brand/';
                $last_image = $up_location.$image_name;
                $brand_image->move($up_location,$image_name);

                unlink($old_image);
                Brand::find($id)->update([
                   'brand_name' => $request->brand_name,
                   'brand_image' => $last_image,
                   'created_at' => Carbon::now()
                ]);

                $notification = array(

                    'message' => 'Brand Updated successfully',
                      'alert-type' => 'info'
                );



                return redirect()->route('all.brand')->with($notification);

                }else{

                    Brand::find($id)->update([
                        'brand_name' => $request->brand_name,
                        'created_at' => Carbon::now()
                    ]);

                    $notification = array(

                        'message' => 'Brand Updated successfully',
                          'alert-type' => 'info'
                    );

             return redirect()->route('all.brand')->with($notification );

         }


             }


            public function Delete($id){


                $image= Brand::find($id);
                $old_image=$image->brand_image;
                unlink($old_image);

                Brand::find($id)->delete();

                $notification = array(

                    'message' => 'Brand Delete successfully',
                      'alert-type' => 'error'
                    );

                return redirect()->back()->with( $notification );


}


// Multi image All Methods

            public function MultiPic(){
                $images=MultiPic::all();
                return view('admin.multipic.index',compact('images'));


            }


            public function AddImg(Request $request){


                $image = $request->file('image');

            foreach($image as $multi_image){
                $name_gen = hexdec(uniqid());
                $img_ex = strtolower($multi_image->getClientOriginalExtension());
                $image_name = $name_gen.'.'.$img_ex;
                $up_location = 'image/multi/';
                $last_image = $up_location.$image_name;
                $multi_image->move($up_location,$image_name);

                MultiPic::insert([
                    'image' => $last_image,
                    'created_at' => Carbon::now()
                ]);


                $notification = array(

                    'message' => 'Portfolio insert successfully',
                      'alert-type' => 'success'
                    );

            }

            //  end foreach

                return redirect()->route('multi.img')->with( $notification );

            }


            public function Logout(){
                Auth::logout();
                return redirect()->route('login')->with('success','User Logout');
            }




}
