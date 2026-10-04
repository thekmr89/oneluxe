<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use DB;
class TestimonialController extends Controller
{
    public function Addtestimonial()
    {
     return view('admin.pages.testimonial');
        
    }
    public function createtesti(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'company' => 'required',
            'description' => 'required',
        ]); 
         
            $testimonial = new Testimonial;  
            $testimonial->name = $request->name;
            $testimonial->title = $request->title;
            $testimonial->company = $request->company;
            $testimonial->description = $request->description;
            $testimonial->save();
            return back()->with('success', "Testimonial Adding Successfully");
    }
    
    public function alltesti(){
         $testi_data = DB::table('testimonial')->get();
      return view('admin.pages.testimoniallist', compact('testi_data'));

    }
    
     public function testidelete($recid)
     {
       $data = Testimonial::find($recid);
       $data->delete();
        return redirect()->back()->with('success','Data Delete Successfully'); 
        }
    
}
