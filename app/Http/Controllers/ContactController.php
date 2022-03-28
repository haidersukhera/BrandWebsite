<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactForm;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function AdminContact(){
        $contacts=Contact::all();
        return view('admin.contact.index',compact('contacts'));
    }

    public function Addcontact(){
        return view('admin.contact.create');
    }

    public function Storecontact(Request $request){


        Contact::insert([

            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'created_at' => Carbon::now()
        ]);
        $notification = array(

            'message' => 'Contact insert  successfully',
              'alert-type' => 'success'
        );

        return redirect()->route('admin.contact')->with( $notification);
    }

    public function Edit($id){
        $contacts=Contact::find($id);
        return view('admin.contact.edit',compact('contacts'));
    }

    public function update(Request $request, $id){

        Contact::find($id)->update([
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'created_at' => Carbon::now()
        ]);
        $notification = array(

            'message' => 'Contact update  successfully',
              'alert-type' => 'info'
        );

        return redirect()->route('admin.contact')->with( $notification);
   }

public function Delete($id){


    Contact::find($id)->delete();
    $notification = array(

        'message' => 'Contact delete  successfully',
          'alert-type' => 'error'
    );
    return redirect()->back()->with(  $notification);

     }


     public function HomeContact(){

        $contacts = Contact::all()->first();
        return view('pages.contact',compact('contacts'));
     }


     public function FormContact(Request $request){

        ContactForm::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now()
        ]);
        $notification = array(

            'message' => 'Message send  successfully',
              'alert-type' => 'success'
        );


        return redirect()->route('home.contact')->with( $notification);
     }

     public function AdminMessage(){

        $messages =ContactForm::all();
        return view('admin.contact.message',compact('messages'));
     }

     public function destroy($id){

        ContactForm::find($id)->delete();
        $notification = array(

            'message' => 'Message delete  successfully',
              'alert-type' => 'error'
        );
        return redirect()->back()->with( $notification);
     }

}
