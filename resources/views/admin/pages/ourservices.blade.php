@extends('admin.layouts.app')

@section('page-content')
    <div class="content-wrapper">

        @if (\Session::has('error'))
            <div class="alert alert-danger">
                <ul>
                    <li>{!! \Session::get('error') !!}</li>
                </ul>
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
                        <h1 class="m-0">Manage Services Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active">OUR SERVICES</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                
                <a class="nav-link {{ $activeTab == 'home' ? 'show active' : '' }}" id="home-tab" data-toggle="tab"
                    href="#home" role="tab" aria-controls="home" aria-selected="{{ $activeTab == 'home' ? 'true' : 'false' }}">Services Page Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $activeTab == 'contact' ? 'show active' : '' }}" id="contact-tab" data-toggle="tab"
                    href="#contact" role="tab" aria-controls="contact" aria-selected="{{ $activeTab == 'home' ? 'true' : 'false' }}">Manage Listing</a>
            </li>
        </ul>


        <!-- Main content -->
        <section class="content">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade {{ $activeTab == 'home' ? 'show active' : '' }}" id="home" role="tabpanel"
                    aria-labelledby="home-tab">
                    <div class="container-fluid">
                        <div class="row">
                            
                            <div class="col-md-12">
                                <form action="{{ route('admin.save.services1') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="pageName" name="pageName"
                                            value="landingPage">
                                        <input type="hidden" class="form-control" id="section1" name="section1"
                                            value="1">


                                        <label class="form-label" for="value1">Banner Image</label>
                                        <input type="file" class="@error('value1') is-invalid @enderror form-control"
                                            id="value1" name="value1" accept="image/*" />
                                        @error('value1')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Text Over Banner</label>
                                        <textarea class="form-control" id="value2" name="value2" rows="3">{!! strip_tags($pageData['section1tittle']) ?? '' !!}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Summary Section</label>
                                        <textarea class="form-control content2"  id="valueD" name="valueD" rows="3">{{ $pageData['section1content'] ?? '' }}</textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>


                    <!-- /.row (main row) -->
                </div>
                <div class="tab-pane fade {{ $activeTab == 'contact' ? 'show active' : '' }}" id="contact" role="tabpanel"
                    aria-labelledby="contact-tab">
                    <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">
                        Add Service
                    </button>

                    <!-- Table Content -->
                    <table class="table mt-2">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Heading</th>
                                <th scope="col">Content</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Display on</th>
                                <th scope="col">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($multiServices as $service)
                                <tr>
                                    <td>{!! $service->id !!}</td>
                                    <td><h2 style="font-size:15px;">{!! $service->heading !!}</h2></td>
                                    <td>{!! $service->content_value !!}</td>
                                    <td><div class="img"><img src="{{asset( $service->image_path) }}" alt="" srcset=""
                                            width="250"></div></td>
                                    <td>
                                        @if ($service->view_home == 1)
                                            <span style="margin-top:10%"
                                                class="btn btn-sm btn-danger">Home Page</span>
                                        @else
                                            <span style="margin-top:10%"
                                                class="btn btn-sm btn-success">Services Page</span>
                                        @endif
                                    </td>
                                    <td>
                                            <a style="margin-top:10%;min-width:100px;"
                                                href="{{ route('admin.service', ['id' => $service->id]) }}"
                                                class="btn btn-sm btn-success">Edit</a>

                                            @if ($service->status == 1)
                                                <a style="margin-top:10%;min-width:100px;"
                                                    href="multi-service/deactive/{{ $service->id }}"
                                                    class="btn btn-sm btn-danger" style="min-width:100px">Deactive</a>
                                            @else
                                                <a style="margin-top:10%;min-width:100px;" href="multi-service/active/{{ $service->id }}"
                                                    class="btn btn-sm btn-success" style="min-width:100px">Active</a>
                                            @endif
                                            <br/>
                                            <br/>
                                              <a href="{{ route('admin.delete.services', $service->id) }}"
                                            class="btn btn-sm btn-danger" style="min-width:100px">Delete</button></a>

                                    </td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Table Content -->
                </div>
                <!-- /.container-fluid -->
            </div>
        </section>
    </div>


    <!-- Modal  -->
    <div class="modal fade {{ $activeTab == 'exampleModal' ? 'show active' : '' }}" id="exampleModal" tabindex="-1"
        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.save.services') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="section" id="section" value="2">
                        <div class="form-group">
                            <label for="value1">Select Photo</label>
                            <input type="file" class="form-control" id="value1" name="value1">

                            @if (isset($editData))
                                <input type="hidden" class="form-control" id="id" name="id"
                                    value="{{ $editData->id }}">
                            @endif
                        </div>
                        <!--<div class="form-group">-->
                        <!--    <label for="value2">Section Content</label>-->
                        <!--    <textarea class="form-control content1" id="value2" name="section_heading" rows="3">{{ $editData->heading ?? '' }}</textarea>-->
                        <!--</div>-->
                        <div class="form-group">
                        <label for="value2">Section Heading</label>
                        <input type="text" class="form-control" id="value2" name="section_heading"
                               value="{{ $editData->heading ?? '' }}">
                    </div>
                        <div class="form-group">
                            <label for="value2">Section Content</label>
                            <textarea class="form-control content3"  id="value2" name="value2" rows="3">{{ $editData->content_value ?? '' }}</textarea>
                        </div>
                         <div class="form-check">
                            <input class="" type="text" name="tag_service_page"
                                id="tag_service_page" style="width:60%;" value="{{ $editData->tag_service_page ?? '' }}">
                            <label class="form-check-label" for="tag_service_page">
                                <b>Tag Service Page</b>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="flexCheckIndeterminate"
                                id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                <b>Show in The Home Page</b>
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <style>
        .img{
            height:200px;
            width:200px
        }
        .img img{
            width:100%;
           object-fit: fill;
           height:200px;
        }
    </style>
@endsection

@section('scripts')
<script>
        $('.content1').summernote({
        placeholder: 'Text Here',
        tabsize: 2,
        height: 70
    });
    $('.content2').summernote({
        placeholder: 'Text Here',
        tabsize: 2,
        height: 300
    });
    $('.content3').summernote({
        placeholder: 'Text Here',
        tabsize: 2,
        height: 300
    });
    $('#content4').summernote({
        placeholder: 'Text Here',
        tabsize: 2,
        height: 300
    });
</script>
<script>
        $(document).ready(function() {
            var hash = window.location.hash;
            if (hash) {
                $('.nav-link[href="' + hash + '"]').tab('show');
            } else {
                $('.nav-link[href="#{{ $activeTab }}"]').tab('show');
            }

            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                window.location.hash = e.target.hash;
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            @if ($activeTab == 'exampleModal')
                $('#exampleModal').modal('show');
            @endif
        });
    </script>
    @if (isset($editData))
        <script>
            var checkbox = document.getElementById('flexCheckIndeterminate');
            checkbox.checked = {{ $editData['view_home'] }} === 1;
        </script>
    @endif
@endsection
