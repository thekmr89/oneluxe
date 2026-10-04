@extends('admin.layouts.app') @section('page-content')
<!--@if(session()->has('success'))-->
<!--    <div class="alert alert-success">-->
<!--        {{session()->get('success')}}-->
<!--    </div>-->
<!--     @endif-->
<div class="content-wrapper" style="min-height: 1302.12px;">
      <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage Blogs</h1>
                </div>
        </div>
    </section>

<section class="content">
<div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Blog Title</th>
                            <th>Author</th>
                            <th>Slug</th>
                            <th>Category</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blog_data as $value)
                        <tr>
                            <td>{!!$value->id ?? ''!!}</td>
                            <td>{!!$value->title ?? ''!!}</td>
                            <td>{!!$value->author ?? ''!!}</td>
                            <!-- <td><span class="tag tag-success">Approved</span></td> -->
                            <td>Your Partner For Inspiring</td>
                            <td>{!!$value->category ?? ''!!}</td>
                            <td><a href="{{ url('edit/'.$value->id) }}" class="w3-btn btnsmall">Edit</a></td>
                            <td><a onclick="return myFunction();" href="{{ url('bdelete/'.$value->id) }}" class="w3-btn btnsmall1">Delete</a></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div>
</div>
<style>
    a.btnsmall {
    background-color: #04AA6D !important;
    color: white;
    border-radius: 5px;
    padding: 7px;
}
a.btnsmall1 {
    background-color: red !important;
    color: white;
    border-radius: 5px;
    padding: 7px;
}
</style>
</section>
</div>
@endsection
@section('scripts')
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
 
 @endsection