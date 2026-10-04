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
                        <h1 class="m-0">Mange Inspiring Experinces Details</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Little Inspirations</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <!-- Main content -->
        <section class="content">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">Page Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Tour Photos On Inspiring Experinces Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                        aria-controls="contact" aria-selected="false">Videos On Inspiring Experinces Page</a>
                </li>
            </ul>
            <br>

            <div class="container-fluid" style="margin-top: 30px">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-content" id="myTabContent">


                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <!-- Section 1 -->
                                <form action="{{ route('admin.little.updatesection') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="section" id="section" value="1">

                                    <div class="form-group">
                                        <label class="form-label" for="heroImage">Banner Image</label>
                                        <input type="file" class="form-control" id="heroImage" name="heroImage"
                                            accept="image/*" />
                                    </div>

                                    <div class="form-group">
                                        <label for="section1Heading">Text Over Banner</label>
                                        <textarea class="form-control" id ="content1" id="section1Heading" name="section1Heading" rows="3">{{ $pageData['section1heading'] ?? '' }}</textarea>

                                    </div>
                                    <div class="form-group">
                                        <label for="section1Content">Summary Section</label>
                                        <textarea class="form-control"  id ="content" id="section1Content" name="section1Content" rows="3">{{ $pageData['section1content'] ?? '' }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>


                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Upload Photo
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="addPhotoModal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addPhotoModal">Add Tour Photos</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('little.upload.file') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" id="fileType" name="fileType" value="photo">
                                                    <div class="form-group">
                                                        <label for="tourfile">Select Tour Photo</label>
                                                        <input type="file" class="form-control" id="tourfile"
                                                            name="tourfile"></input>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="title">Photo Title</label>
                                                        <input type="text" class="form-control" id="title"
                                                            name="title"></input>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description">Photo Description</label>
                                                        <input type="text" class="form-control" id="description"
                                                            name="description"></input>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description">Show On</label>
                                                        <select class="form-select" id="infofor" name="infofor">
                                                            <option name="LIH" value="LIH">Little Inspiration Home Page</option>
                                                            <option name="LID" value="LID">Little Inspiration Details Page</option>
                                                        </select>
                                                        
                                                        </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <!-- Table -->
                                <table class="table mt-2">
                                    <thead>
                                        <tr>
                                            <th scope="col">Photo</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($photos as $photo)
                                            <tr>
                                                <th>
                                                    <img src="{{asset ($photo->file_path)}}" alt="" srcset=""
                                                        width="250">
                                                </th>
                                                <td>{{ $photo->title }}</td>
                                                <td>{{ $photo->description }}</td>
                                                <td>
                                                    <!--<a href="file/delete/{{ $photo->id }}"-->
                                                    <!--    class="btn btn-sm btn-danger">Delete</button>-->
                                                        
                                                        <a href="{{ url('file/delete/' . $photo->id) }}" class="btn btn-sm btn-danger">Delete</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- Table -->
                            </div>


                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#addVideoModal">
                                    Upload Video
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="addVideoModal" tabindex="-1" role="dialog"
                                    aria-labelledby="addVideoModal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addVideoModal">Add Tour Video</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('little.upload.file') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" id="fileType" name="fileType" value="video">
                                                    <div class="form-group">
                                                        <label for="tourfile">Select Tour Video</label>
                                                        <input type="file" class="form-control" id="tourfile"
                                                            name="tourfile"></input>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="placeholderImage">Select Placeholder Image</label>
                                                        <input type="file" class="form-control" id="placeholderImage"
                                                            name="placeholderImage"></input>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="title">Video Title</label>
                                                        <input type="text" class="form-control" id="title"
                                                            name="title"></input>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description">Video Description</label>
                                                        <input type="text" class="form-control" id="description"
                                                            name="description"></input>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <!-- Table -->
                                <table class="table mt-2">
                                    <thead>
                                        <tr>
                                            <th scope="col">Video</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($videos as $video)
                                            <tr>
                                                <th scope="row">
                                                    <video width="320" height="240" controls>
                                                        <source src="{{asset($video->file_path)}}" type="video/mp4">
                                                    </video>
                                                </th>
                                                <td>{{ $video->title }}</td>
                                                <td>{{ $video->description }}</td>
                                                <td>
                                                    <a href="file/view-edit/{{ $video->id }}"
                                                        class="btn btn-sm btn-success">Edit</button>
                                                        <a href="file/delete/{{ $video->id }}"
                                                            class="btn btn-sm btn-danger">Delete</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- Table -->
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
<script>
        $('#content').summernote({
        placeholder: 'Text Here',
        tabsize: 2,
        height: 300
    });
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
</script>
 
@endsection
