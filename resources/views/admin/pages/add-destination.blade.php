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
                        <h1 class="m-0">Destinations</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/login">Home</a></li>
                            <li class="breadcrumb-item active">Destination</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">


            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">Add Destinations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">List Of Destinations</a>
                </li>
            </ul>
            <br>



            {{-- section1 --}}
            <div class="container-fluid">
                <div class="row">


                    <div class="col-md-12 text-center">
                        <h3> Add Destination </h3>
                    </div>
                    <div class="col-md-12">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">

                                <input type="hidden" class="form-control" id="pageName" name="pageName"
                                    value="Destinations">

                                <label class="form-label" for="value1">Destinaton Image 1</label>
                                <input type="file" class="@error('value1') is-invalid @enderror form-control"
                                    id="value1" name="value1" accept="image/*" />
                                @error('value1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <label class="form-label" for="value2">Destinaton Image 2</label>
                                <input type="file" class="@error('value2') is-invalid @enderror form-control"
                                    id="value2" name="value2" accept="image/*" />
                                @error('value2')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                {{-- <label class="form-label" for="valueh">home page Destinaton Image </label>
                                <input type="file" class="form-control" id="valueh" name="valueh" accept="image/*" /> --}}

                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Destination Tittle 1</label>
                                <textarea class="form-control tinymce-editor" id="value3" name="value3" rows="3"></textarea>

                                <label for="exampleFormControlTextarea1">Destination Tittle 2</label>
                                <textarea class="form-control tinymce-editor" id="value4" name="value4" rows="3"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>


                </div>
            </div>

        </section>
    </div>
@endsection

@section('scripts')
     
@endsection
