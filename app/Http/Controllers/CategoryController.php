<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Allcat(){

        $categories=Category::latest()->paginate(5);
        $trash =Category::onlyTrashed()->latest()->paginate(3);
        return view('admin.category.index',compact('categories','trash'));
    }

    public function Addcat(Request $request){

        $validatedData = $request->validate([
            'category_name' => ['required', 'unique:categories', 'max:255'],

        ],

            [
                'category_name.required' => 'Please input the category Name'

            ] );

                //  Category::insert([

                //     'category_name' =>$request->category_name,
                //     'user_id' =>Auth::user()->id,
                //     'created_at' =>Carbon::now()
                //  ]);

                $category=new Category;
                $category->category_name=$request->category_name;
                $category->user_id=Auth::user()->id;
                $category->save();
                return redirect()->back()->with('success','Category Inserted Successfully');
          }


          Public function Edit($id){

             $categories=Category::find($id);
             return view('admin.category.edit',compact('categories'));
          }

          public function update(Request $request, $id){


            $update=Category::find($id)->update([

                'category_name' => $request->category_name,
                'user_id' =>Auth::user()->id

            ]);

            return redirect()->route('all.category')->with('success','Category Updated Successfully');

          }

          public function SoftDelete($id){

            $delete = Category::find($id)->delete();
            return redirect()->back()->with('success','Category SoftDelete Successfully');
          }

          public function Restore($id){

            $delete=Category::withTrashed()->find($id)->restore();
            return redirect()->back()->with('success','Category Restore Successfully');


          }

          public function Pdelete($id){

            $delete=Category::onlyTrashed()->find($id)->forceDelete();
            return redirect()->back()->with('success','Category Permanent Delete Successfully');


          }

}
