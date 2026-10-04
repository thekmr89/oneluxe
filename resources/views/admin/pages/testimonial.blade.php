@extends('admin.layouts.app')@section('page-content')
<div class="content-wrapper" style="min-height: 1604.44px;">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage Testimonial</h1>
                </div>
        </div>
    </section>

    <section class="content">
    <form form action="{{ route('testi.addd') }}" method="POST" enctype="multipart/form-data">
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{session()->get('success')}}
    </div>
     @endif
    @csrf
        <div class="row">
            
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" name="name" class="form-control">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Title</label>
                            <textarea name="title" class="form-control" rows="4"></textarea>
                            @error('meta_keywords')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Company</label>
                            <textarea name="company" class="form-control" rows="4"></textarea>
                            @error('meta_description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Feedback / Remarks From Clients</label>
                            <textarea name="description" id="content1" class="form-control " rows="5"></textarea>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>

            </div>
             
        </div>
        <div class="row">
            <div class="col-12">
                 <button type="submit" class="btn btn-success float-right">Update</button>
            </div>
        </div>
</form>
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
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
 <script>
     $('#content1').summernote({
        placeholder: 'Text Here',
        tabsize: 2,
        height: 100
    });
 </script>
@endsection