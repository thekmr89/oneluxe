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

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Little Inspirations</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Little Inspirations</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-body">
                <form action="{{route('little.update.file',['id'=>$file->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="tourfile">Select Tour Video</label>
                        <input type="file" class="form-control" id="tourfile" name="tourfile">
                    </div>
                    <div class="form-group">
                        <label for="placeholderImage">Select Placeholder Image</label>
                        <input type="file" class="form-control" id="placeholderImage" name="placeholderImage">
                    </div>
                    <div class="form-group">
                        <label for="title">Video Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$file->title}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Video Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{$file->description}}">
                    </div>
                    <button class="btn btn-danger" type="submit">Update</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
@endsection