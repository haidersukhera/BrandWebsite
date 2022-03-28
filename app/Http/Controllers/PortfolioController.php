<?php

namespace App\Http\Controllers;

use App\Models\MultiPic;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Portfolio(){
        $images =MultiPic::all();
        return view('pages.portfolio',compact('images'));
    }

    public function Delete($id){


        $image= MultiPic::find($id);
        $old_image=$image->image;
        unlink($old_image);

        MultiPic::find($id)->delete();

        $notification = array(

            'message' => 'Portfolio Delete successfully',
              'alert-type' => 'error'
            );
        return redirect()->back()->with( $notification);


   }


}
