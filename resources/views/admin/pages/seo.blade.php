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
                        <h1 class="m-0">SEO</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/login">Home</a></li>
                            <li class="breadcrumb-item active">SEO</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
 {{-- dd($data); --}}
        <!-- Main content -->
        <section class="content">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">Home Page</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="about-tab" data-toggle="tab" href="#aboutus" role="tab"
                        aria-controls="aboutus" aria-selected="false">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="destination-tab" data-toggle="tab" href="#destination" role="tab"
                        aria-controls="destination" aria-selected="false">Destinations</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="services-tab" data-toggle="tab" href="#services" role="tab"
                        aria-controls="services" aria-selected="false">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="experiences-tab" data-toggle="tab" href="#experiences" role="tab"
                        aria-controls="experiences" aria-selected="false">Inspiring Experiences</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="travel-tab" data-toggle="tab" href="#travel" role="tab"
                        aria-controls="travel" aria-selected="false">Responsible Travel</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                        aria-controls="contact" aria-selected="false">Contact Us</a>
                </li>

            </ul>
            <br>

            {{-- section1 --}}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <!-- Section 1 -->
                                <form action="{{ route('admin.save.seo') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="section" id="section" value="homePage">
                                        <label for="section1Content">Tittle </label>
                                        <textarea class="form-control" id="section1Content" name="section1Content" rows="3">{{ $data1->tittle; }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="section2Content">Meta Keywords</label>
                                        <textarea class="form-control" id="section2Content" name="section2Content" rows="3">{{ $data1->keywords; }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="section2Content">Meta Description</label>
                                        <textarea class="form-control" id="section3Content" name="section3Content" rows="3">{{ $data1->description; }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                <hr>
                            </div>

                            <div class="tab-pane fade" id="aboutus" role="tabpanel" aria-labelledby="profile-tab">
                                <form action="{{ route('admin.save.seo') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="section" id="section" value="aboutUs">
                                        <label for="section1Content">Tittle </label>
                                        <textarea class="form-control" id="section1Content" name="section1Content" rows="3">{{ $data2->tittle; }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="section2Content">Meta Keywords</label>
                                        <textarea class="form-control" id="section2Content" name="section2Content" rows="3">{{ $data2->keywords; }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="section2Content">Meta Description</label>
                                        <textarea class="form-control" id="section3Content" name="section3Content" rows="3">{{ $data2->description; }}</textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                <hr>
                            </div>

                            <div class="tab-pane fade" id="destination" role="tabpanel" aria-labelledby="profile-tab">
                                <form action="{{ route('admin.save.seo') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="section" id="section" value="destination">
                                        <label for="section1Content">Tittle </label>
                                        <textarea class="form-control" id="section1Content" name="section1Content" rows="3">{{ $data6->tittle; }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="section2Content">Meta Keywords</label>
                                        <textarea class="form-control" id="section2Content" name="section2Content" rows="3">{{ $data6->keywords; }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="section2Content">Meta Description</label>
                                        <textarea class="form-control" id="section3Content" name="section3Content" rows="3">{{ $data6->description; }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                <hr>
                            </div>

                            <div class="tab-pane fade" id="services" role="tabpanel" aria-labelledby="profile-tab">
                                <form action="{{ route('admin.save.seo') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="section" id="section" value="services">
                                        <label for="section1Content">Tittle</label>
                                        <textarea class="form-control" id="section1Content" name="section1Content" rows="3">{{ $data3->tittle; }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="section2Content">Metta Keywords</label>
                                        <textarea class="form-control" id="section2Content" name="section2Content" rows="3">{{ $data3->keywords; }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="section2Content">Metta Description</label>
                                        <textarea class="form-control" id="section3Content" name="section3Content" rows="3">{{ $data3->description; }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                <hr>
                            </div>

                            <div class="tab-pane fade" id="experiences" role="tabpanel" aria-labelledby="profile-tab">
                                <form action="{{ route('admin.save.seo') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="section" id="section" value="experiences">
                                        <label for="section1Content">Tittle</label>
                                        <textarea class="form-control" id="section1Content" name="section1Content" rows="3">{{ $data4->tittle; }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="section2Content">Metta Keywords</label>
                                        <textarea class="form-control" id="section2Content" name="section2Content" rows="3">{{ $data4->keywords; }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="section2Content">Meta Description</label>
                                        <textarea class="form-control" id="section3Content" name="section3Content" rows="3">{{ $data4->description; }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                <hr>
                            </div>

                            <div class="tab-pane fade" id="travel" role="tabpanel" aria-labelledby="profile-tab">
                                <form action="{{ route('admin.save.seo') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="section" id="section" value="travel">
                                        <label for="section1Content">Tittle</label>
                                        <textarea class="form-control" id="section1Content" name="section1Content" rows="3">{{ $data5->tittle; }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="section2Content">Meta keywords</label>
                                        <textarea class="form-control" id="section2Content" name="section2Content" rows="3">{{ $data5->keywords; }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="section2Content">Meta Description</label>
                                        <textarea class="form-control" id="section3Content" name="section3Content" rows="3">{{ $data5->description; }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                <hr>
                            </div>
                             <div class="tab-pane fade" id="travel" role="tabpanel" aria-labelledby="profile-tab">
                                <form action="{{ route('admin.save.seo') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="section" id="section" value="travel">
                                        <label for="section1Content">Tittle</label>
                                        <textarea class="form-control" id="section1Content" name="section1Content" rows="3">{{ $data5->tittle; }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="section2Content">Meta keywords</label>
                                        <textarea class="form-control" id="section2Content" name="section2Content" rows="3">{{ $data5->keywords; }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="section2Content">Meta Description</label>
                                        <textarea class="form-control" id="section3Content" name="section3Content" rows="3">{{ $data5->description; }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                <hr>
                            </div>

                             <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="profile-tab">
                                <form action="{{ route('admin.save.seo') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="section" id="section" value="contact">
                                        <label for="section1Content">Tittle</label>
                                        <textarea class="form-control" id="section1Content" name="section1Content" rows="3">{{ $data7->tittle; }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="section2Content">Meta keywords</label>
                                        <textarea class="form-control" id="section2Content" name="section2Content" rows="3">{{ $data7->keywords; }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="section2Content">Meta Description</label>
                                        <textarea class="form-control" id="section3Content" name="section3Content" rows="3">{{ $data7->description; }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                <hr>
                            </div>

                        </div>
                    </div>

        </section>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.tiny.cloud/1/h2i627qpk2x44z2vkshvrgsesr6onkskwiw0mzd81z5ct9mj/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 300,
            menubar: true,
            apikey: 'h2i627qpk2x44z2vkshvrgsesr6onkskwiw0mzd81z5ct9mj',
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount', 'image'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
@endsection
