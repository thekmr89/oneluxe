@extends('admin.layouts.app') @section('page-content')
<style>
    .new-btn{
    height: 31px;
    min-width: 100px;
    text-align: center;
    padding-top: 3px;
    border-radius: 3px;
    
    }
</style>
<div class="content-wrapper" style="min-height: 1302.12px;">
      <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 col-md-6">
                    <h1>Testimonials/Feedbacks</h1>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                     <div class="input-group input-group-sm" style="width: 150px;">
                         <a href="{{route('add.testimonial')}}" class="btn-success new-btn">Add New</a>
                    </div>
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
                   
                </div>
            </div>

            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Company</th>
                            <th>Feedback/Remarks</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testi_data as $testidata)
                        <tr>
                            <td>{!!$testidata->recid ?? ''!!}</td>
                            <td>{!!$testidata->name ?? ''!!}</td>
                            <td>{!!$testidata->title ?? ''!!}</td>
                            <td>{!!$testidata->company ?? ''!!}</td>
                            <td>
                                {{Illuminate\Support\Str::limit(strip_tags($testidata->description) ,$limit = 50, $end = '...')}}
                            </td>
                            <td><a onclick="return myFunction();" href="{{ url('delete-testi/'.$testidata->recid) }}" class="w3-btn btnsmall1">Delete</a></td>

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