@extends('admin.layouts.app')

@section('page-content')

    <div class="content-wrapper">
        @if (\Session::has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {!! \Session::get('error') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (\Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {!! \Session::get('success') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Heading Panel --}}
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Home Page Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/login">Home</a></li>
                            <li class="breadcrumb-item active">Home Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">

            {{-- section1 --}}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-left">
                        <h3>Banner Video Section </h3>
                    </div>
                    <div class="col-md-12">
                        <form action="{{ route('section1.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="pageName" name="pageName"
                                    value="landingPage">
                                <input type="hidden" class="form-control" id="section1" name="section1" value="1">

                                <label class="form-label" for="value1">Choose Video</label>
                                <input type="file" class="@error('value1') is-invalid @enderror form-control"
                                    id="value1" name="value1" accept="video/*" />
                                @error('value1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Text Over Video</label>
                                <textarea class="form-control" id="value2" name="value2" rows="3">{{ $pageData['section1heading'] ?? '' }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- section2 --}}
            <div class="container-fluid" style="margin-top: 30px">
                <div class="row">
                    <div class="col-md-12 text-left">
                        <h3> Summary Section </h3>
                    </div>
                    <div class="col-md-12">
                        <form action="{{ route('section2.update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" class=" form-control " id="pageName" name="pageName"
                                    value="landinPage">
                                <input type="hidden" class=" form-control " id="section2" name="section2" value="2">

                                <label for="exampleFormControlTextarea1"></label>
                                <textarea class="form-control" id="content1"  id="value1" name="value1" rows="3">{{ $pageData['section2title'] ?? '' }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>



            {{-- section 6 --}}
            <div class="container-fluid" style="margin-top: 30px">
                <div class="row">
                    <div class="col-md-12 text-left">
                        <h3>Section 1 Home Page</h3>
                        
                    </div>
                    <div class="col-md-12">
                        <form action="{{ route('section6.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="pageName" name="pageName"
                                    value="landingPage">
                                <input type="hidden" class="form-control" id="section6" name="section6"
                                    value="6">
                            </div>
                            <div class="form-group">
                                <!--<label for="exampleFormControlTextarea1">Example textarea</label>-->
                                <textarea class="form-control " id="content2"  id="value2" name="value2" rows="3">{{ $pageData['section6content'] ?? '' }}</textarea>

                            </div>
                             <div class="container">
                            
                                 <div class="form-group">
                                         <div class="row">
                                        <div class="col-lg-4">
                                          <label class="form-label" for="value1">Image 1</label>
                                            <input type="file" class="@error('value1') is-invalid @enderror form-control"
                                                id="value1" name="value1" accept="image/*" onchange="loadFile(event)" />
                                            <div class="imag">
                                            <img style="height: 100%; width: 100%; display: none; "id="output"/  style="display:none;">
                                            <img style="height: 100%; width: 100%;" id="pics" src="{{asset($pageData['section6image1'] ?? '') }}" style="display:block;">
                                            </div>
                                            @error('value1')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                             @if (!empty($pageData['section6image1']))
                                                <a onclick="return myFunction();"
                                                   href="{{ route('image.delete', 'image1') . '?section=6&oldImage=' . urlencode($pageData['section6image1']) }}"
                                                   class="w3-btn btnsmall1"
                                                   style="color:red">
                                                    X Delete
                                                </a>

                                            @endif
                                        </div>
                                        
                                         <div class="col-lg-4 ">
                                              <label class="form-label" for="value3">Image 2</label>
                                        <input type="file" class="form-control"  id="uploadInput1" name="value3"
                                            accept="image/*" />
                                            <div class="imag">
                                            <img style="height: 100%; width: 100%; display: none;"id="imagePreview1"/>
                                             <img style="height: 100%; width: 100%;"  id="old_image" src="{{asset($pageData['section6image2'] ?? '') }}" style="display:block;">
                                                                                        </div>
                                                @php
                                                $image = 'image2';
                                                $section = '6';
                                                $oldImage = $pageData['section6image2'] ?? '';
                                                $deleteUrl = route('image.delete', ['image' => $image]) . '?section=' . $section . '&oldImage=' . urlencode($oldImage);
                                            @endphp
                                            
                                            @if (!empty($oldImage))
                                                <a onclick="return myFunction();"
                                                   href="{{ $deleteUrl }}"
                                                   class="w3-btn btnsmall1"
                                                   style="color:red">
                                                    X Delete
                                                </a>
                                            @endif

                                            </div>
                                       
                                         <div class="col-lg-4 ">
                                             <label class="form-label" for="value4">Image 3</label>
                                        <input type="file" class="form-control"  id="uploadInput" name="value4"
                                            accept="image/*" />
                                           <div class="imag">
                                            <img style="height: 100%; width: 100%; display: none; "id="imagePreview"/>
                                             <img style="height: 100%; width: 100%;" id="Old_image" src="{{asset($pageData['section6image3'] ?? '') }}" style="display:block;">
                                            </div>
                                                @if (!empty($pageData['section6image3']))
                                            <a onclick="return myFunction();"
                                               href="{{ route('image.delete', 'image3') . '?section=6&oldImage=' . urlencode($pageData['section6image3']) }}"
                                               class="w3-btn btnsmall1"
                                               style="color:red">
                                                X Delete
                                            </a>

                                            @endif
                                            </div>
                                        
                                    <div>
                                </div>
                                </div>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
            <!--home section -1 new code starting here-->
            
            <!--<End this code section for first-->

            {{-- section 7 --}}
            <div class="container-fluid" style="margin-top: 30px">
                <div class="row">
                    <div class="col-md-12 text-left">
                        <h3>Section 2 Home Page</h3>
                    </div>
                    <div class="col-md-12">
                        <form action="{{ route('section6.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                             <div class="row">
                             <div class="form-group">
                                <textarea class="form-control tinymce-editor" id="content3" id="value2" name="value2" rows="3">{{ $pageData['section7content'] ?? '' }}</textarea>
                            </div>
                            </div>
                             <div class="container">
                                    <div class="form-group">
                                        <div class="row">
                                            <input type="hidden" name="pageName" value="landingPage">
                                            <input type="hidden" name="section7" value="7">
                                
                                            {{-- Image 1 --}}
                                            <div class="col-lg-4">
                                                <label class="form-label" for="value1">Image 1</label>
                                                <input type="file" class="@error('value1') is-invalid @enderror form-control" id="value1" name="value1" accept="image/*" onchange="previewImage(event, 'output')" />
                                                <div class="imag">
                                                    <img id="output" style="height: 100%; width: 100%; display: none;" />
                                                    <img id="pics" src="{{ asset($pageData['section7image1'] ?? '') }}" style="height: 100%; width: 100%; display: block;" />
                                                </div>
                                                @error('value1')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                 @if (!empty($pageData['section7image1']))
                                              <a onclick="return myFunction();"
                                               href="{{ route('image.delete', 'image1') . '?section=7&oldImage=' . urlencode($pageData['section7image1']) }}"
                                               class="w3-btn btnsmall1"
                                               style="color:red">
                                                X Delete
                                            </a>

                                            @endif
                                            </div>
                                
                                            {{-- Image 2 --}}
                                            <div class="col-lg-4">
                                                <label class="form-label" for="value3">Image 2</label>
                                                <input type="file" class="form-control" id="uploadInput1" name="value3" accept="image/*" onchange="previewImage(event, 'imagePreview1')" />
                                                <div class="imag">
                                                    <img id="imagePreview1" style="height: 100%; width: 100%; display: none;" />
                                                    <img id="old_image" src="{{ asset($pageData['section7image2'] ?? '') }}" style="height: 100%; width: 100%; display: block;" />
                                                </div>
                                                  @if (!empty($pageData['section7image2']))
                                              <a onclick="return myFunction();"
                                               href="{{ route('image.delete', 'image2') . '?section=7&oldImage=' . urlencode($pageData['section7image2']) }}"
                                               class="w3-btn btnsmall1"
                                               style="color:red">
                                                X Delete
                                            </a>

                                            @endif
                                            </div>
                                
                                            {{-- Image 3 --}}
                                            <div class="col-lg-4">
                                                <label class="form-label" for="value4">Image 3</label>
                                                <input type="file" class="form-control" id="uploadInput" name="value4" accept="image/*" onchange="previewImage(event, 'imagePreview')" />
                                                <div class="imag">
                                                    <img id="imagePreview" style="height: 100%; width: 100%; display: none;" />
                                                    <img id="Old_image" src="{{ asset($pageData['section7image3'] ?? '') }}" style="height: 100%; width: 100%; display: block;" />
                                                </div>
                                                  @if (!empty($pageData['section7image3']))
                                              <a onclick="return myFunction();"
                                               href="{{ route('image.delete', 'image3') . '?section=7&oldImage=' . urlencode($pageData['section7image3']) }}"
                                               class="w3-btn btnsmall1"
                                               style="color:red">
                                                X Delete
                                            </a>

                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                                           
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <style>
        .imag{
            width:341px;
            height:227px;
            padding-top:10px;
        }
    </style>
@endsection

@section('scripts')
 <!-- Place the first <script> tag in your HTML's <head> -->
 
 <script>
    $('#content1').summernote({
        placeholder: 'Text Here',
        tabsize: 2,
        height: 300
    });
    $('#content2').summernote({
        placeholder: 'Text Here',
        tabsize: 2,
        height: 300
    });
        $('#content3').summernote({
        placeholder: 'Text Here',
        tabsize: 2,
        height: 300
    });
</script>
<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    
    reader.onload = function(){
      var image = document.getElementById('pics');
       image.style.display = "none";
      var output = document.getElementById('output');
      output.style.display = "block";
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };

    let uploadInput = document.getElementById("uploadInput");
    
    uploadInput.onchange = function () {
      let image = new FileReader();
      
      image.onload = function (e) {
        document.getElementById("imagePreview").src = e.target.result;
         document.getElementById("Old_image").style.display = "none";
        };
      image.readAsDataURL(this.files[0]);
    };
</script>
<script>
     let uploadInput1 = document.getElementById("uploadInput1");
    
    uploadInput1.onchange = function () {
      let image = new FileReader();
      
      image.onload = function (f) {
        document.getElementById("imagePreview1").src = f.target.result;
        document.getElementById("old_image").style.display = "none";
        };
      image.readAsDataURL(this.files[0]);
    };
</script>
<script>
  function myFunction() {
      if(!confirm("Are You Sure to delete this"))
      event.preventDefault();
  }
 </script>
  @if(session()->has('success'))
    <script>
     swal("Thank You", "{{session()->get('success')}}", "success")
 </script>
     @endif
 <script>
    function previewImage(event, previewId, existingId) {
        const file = event.target.files[0];
        const preview = document.getElementById(previewId);
        const existing = document.getElementById(existingId);

        if (file) {
            const reader = new FileReader();
            reader.onload = function () {
                preview.src = reader.result;
                preview.style.display = 'block';
                if (existing) existing.style.display = 'none';
            };
            reader.readAsDataURL(file);
        }
    }
</script>


@endsection
