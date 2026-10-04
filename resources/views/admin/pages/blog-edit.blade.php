@extends('admin.layouts.app')@section('page-content')
<div class="content-wrapper" style="min-height: 1604.44px;">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Blogs</h1>
                </div>
        </div>
    </section>

    <section class="content">
    @foreach($blog_edit as $oldata)
    <form form action="{{url('update/'.$oldata->id)}}" method="POST" enctype="multipart/form-data">
    <!--@if(session()->has('success'))-->
    <!--<div class="alert alert-success">-->
    <!--    {{session()->get('success')}}-->
    <!--</div>-->
    <!-- @endif-->
    @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">	Title</label>
                            <input type="text" name="title" value="{!!$oldata->title ?? ''!!}" class="form-control">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Meta Keywords</label>
                            <textarea name="meta_keywords" value=""  class="form-control" rows="4">{!!$oldata->meta_keywords ?? ''!!}</textarea>
                            @error('meta_keywords')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Meta Description</label>
                            <textarea name="meta_description" value="" class="form-control" rows="4">{!!$oldata->meta_description ?? ''!!}</textarea>
                            @error('meta_description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Description</label>
                            <textarea  id="content" value="" name="description" class="form-control" rows="4">{!!$oldata->description ?? ''!!}</textarea>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                    </div>

                </div>

            </div>
            <div class="col-md-4">
                <div class="card card-secondary">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEstimatedBudget">Images</label>
                            <input type="file" name="images" value="{!!$oldata->images ?? ''!!}" class="form-control" accept="image/*" onchange="loadFile(event)">
                            <div class="imag">
                            <img  src="{{asset('thumbnail/'.$oldata->images)}}" style="height: 100%; width: 100%;"id="output"/>
                            </div>
            

                            @error('images')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            
                        </div>
                        <div class="form-group">
                            <label for="inputSpentBudget">Tags</label>
                            <input type="text" name="tags" value="{{$oldata->tag}}" class="form-control">
                            @error('tags')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Category</label>
                            @error('inputStatus')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                             <select id="mySelect" class="form-control custom-select" onchange="myFunction()" name="category" id="category">
                             <option value="">--Select--</option>
                             @foreach($PostCat as $value )
                             @if($oldata->category ==  $value->category)
                                <option value="{{ $value->category }}" selected= "true" >{{ $value->category }}</option>
                                @else
                                <option value="{{ $value->category }}" >{{ $value->category }}</option>
                                @endif
                                @endforeach
                            </select>
                            <br><br>
                             <label for="inputStatus" style="font-size:11px; font-weight:normal; color:maroon;">If Category Not Found, Add Here</label>
                             <input type="text" name="inputStatus" id="txtcat"  id="contact" class="form-control mandatory" value="{{$oldata->category}}" >
                        </div>
                        <!-- <div class="form-group">
                            <label for="inputEstimatedDuration">Estimated project duration</label>
                            <input type="number" id="inputEstimatedDuration" class="form-control">
                        </div> -->
                    </div>

                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                 <button type="submit" class="btn btn-success float-right">Submit</button>
            </div>
        </div>
</form>
@endforeach
    </section>

</div>
<style>
    .imag{
        width: 300px;
        height:133px;
    }
    </style>
@endsection
@section('scripts')
<script>
        $('#content').summernote({
        placeholder: 'Text Here',
        tabsize: 2,
        height: 300
    });
</script>
<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
 <!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/xu5yr2hn7jivjrbkkd0psoiy7t8hnd1lvvaj230vk107r0f9/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: 'textarea.tinymce-editor',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
  });
</script>
 @if(session()->has('success'))
    <script>
    
     swal("Thank You","{{session()->get('success')}}", "success")
 </script>
     @endif
 <script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
   
  document.getElementById("txtcat").value = x;
}
</script>
@endsection