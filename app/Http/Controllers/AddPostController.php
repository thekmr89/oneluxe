<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use DB;
 use App\Http\Controllers\Controller;
 use App\Models\Blogs;
 use Illuminate\Support\Str;
class AddPostController extends Controller
{
    public function hello()
    {  
        $PostCat = Blogs::select('category')->distinct()->get();
        //dd($PostCat);
        return view('admin.pages.blog-post', compact('PostCat'));
    }
    public function blogadd(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',
            'description' => 'required',
            'images' => ' ',
            'inputStatus' => '',
            'tags' => 'required',
        ]); 
        // $file = $request->hasFile('images');
        if($request->hasFile('images'))
        {
        $image = $request->file('images');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/thumbnail');
        $image->move($destinationPath, $name);
             
            $blogs = new Blogs;  
            $blogs->title = $request->title;
            $blogs->meta_keywords = $request->meta_keywords;
            $blogs->meta_description = $request->meta_description;
            $blogs->description = $request->description;
            $blogs->images = $name;
            $blogs->author = 'admin';
            $blogs->slug = Str::slug($request->title);
            $blogs->tag = $request->tags;
            $blogs->category = $request->inputStatus;
            $blogs->save();
            return back()->with('success', "Blog Adding Successfully");
        }
       
    }
}
