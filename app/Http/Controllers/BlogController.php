<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use App\Models\SectionValue;
use App\Models\Blogs;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Str;
class BlogController extends Controller
{
  public function index()
    {
        $blog_data = DB::table('blogs')->get();
        $PostCat = Blogs::select('category')->distinct()->get();
        //  $blog_count= DB::table('blogs')->get();
        //  return view('pages.blog', ['blog_data' => $blog_data]);
        return view ('pages.blog', compact('blog_data','PostCat'));
        
        
    }
    
    
    public function catblog($cat)
    {
        // echo $id;
        $PostCat = Blogs::select('category')->distinct()->get();
        $blog_data=DB::table('blogs')->where('category',$cat)->get();
        // dd($blog_data);
        return view('pages.blog', compact('blog_data','PostCat'));
    }
    
    public function  blogDetail($category,$url)
    {    
        // echo $url;
       $query = DB::table('blogs');
       $blog_count= DB::table('blogs')->orderBy('category','ASC')->get();
       $count_value = $blog_count->countBy('category');
       $blog_detail = $query->where('slug' , $url)->get();
    //   return view('pages.blog-detail', ['blog_detail' => $blog_detail]);
        return view('pages.blog-detail', compact('blog_detail','count_value'));
      //  dd($blog_detail);
    }
    public function bloglist()
    {
      $blog_data = DB::table('blogs')->get();
      return view('admin.pages.blog-lists', compact('blog_data'));
    }
    public function blogedit($id)
    {
     $PostCat = Blogs::select('category')->get();
        //dd($PostCat);
        // return view('admin.pages.blog-post', compact('PostCat'));
      $query = DB::table('blogs');
      $blog_edit = $query->where('id' , $id)->get();
      // dd($blog_detail);
      return view('admin.pages.blog-edit', compact('blog_edit','PostCat'));
    }
    public function  updateblog(Request $request, $id)
    {     
        $update_data = Blogs::find($id);
        $update_data->title = $request->title;
        $update_data->meta_keywords = $request->meta_keywords;
        $update_data->meta_description = $request->meta_description;
        $update_data->description = $request->description;
        // $update_data->images = $name;
        $update_data->author = 'admin';
        $update_data->slug = Str::slug($request->title);
        $update_data->tag = $request->tags;
        $update_data->category = $request->inputStatus;
        $update_data->update();
        return redirect()->back()->with('success','Updated Successfully');  
       
    }
    
    public function Blogdelete($id)
    {
      $data = Blogs::find($id);
       $data->delete();
        return redirect()->back()->with('success','Data Delete Successfully'); 
    }
    
    //  public function imagedelete($id)
    // {
    //   $data = SectionValue::where('section_type', $id)->delete();
    //   return redirect()->back()->with('success','Data Delete Successfully'); 
    // }
    //  public function imagedelete($id)
    // {
    //     $data = SectionValue::where('section_type', $id)
    //   ->where('page_name','landingPage')
    //   ->delete();
    //   return redirect()->back()->with('success','Data Delete Successfully'); 
    // }
   
    public function delete($image, Request $request)
{
    $section = $request->query('section');     // e.g., "video", "image"
    $oldImage = $request->query('oldImage');   // e.g., "uploads/landing/xxx.mp4"

    // Debug (optional)
    // dd(['section' => $section, 'image' => $image, 'oldImage' => $oldImage]);

    // Delete file from public folder
    if ($oldImage && file_exists(public_path($oldImage))) {
        unlink(public_path($oldImage));
    }

    // Delete the record from DB where value matches
    SectionValue::where('section_type', $image)
        ->where('page_section', $section)  // ✅ Don't quote variable
        ->where('value', $oldImage)
        ->delete();

    return redirect()->back()->with('success', 'Image deleted successfully.');
}

    

}
