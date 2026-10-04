@extends('admin.layouts.app')

@section('page-content')
    @if (\Session::has('error'))
        <div class="alert alert-danger">
            <ul>
                <li>{!! \Session::get('error') !!}</li>
            </ul>
        </div>
    @endif
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Transaction List</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Landing</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>


        <!-- Main content -->
        <section class="content">   
            <div class="container table-responsive">
                <table class="table table-hover table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Order ID</th>
                            <th>Transaction ID</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Package Name</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaction_list as $index => $txn)
                            @php
                                $meta_data = [];
                                $package_name = '';
                                try {
                                    $metadata = $txn->metadata ?? null;

                                    if ($metadata) {
                                        $metadataArray = json_decode($metadata, true);
                                        $package_name = $metadataArray['package_name']??'';

                                        if (json_last_error() === JSON_ERROR_NONE && isset($metadataArray['payment_page_sdk_payload'])) {
                                            $meta_data = json_decode($metadataArray['payment_page_sdk_payload'], true);

                                            if (json_last_error() !== JSON_ERROR_NONE) {
                                                $meta_data = [];
                                            }
                                        }
                                    }
                                } catch (\Throwable $e) {
                                    $meta_data = [];
                                    // Optionally log the error: Log::error("Metadata decode error: " . $e->getMessage());
                                }
                            @endphp
                            <tr>
                                <td>{{ $txn->id }}</td>
                                <td>{{ $txn->order_id }}
                                </td>
                                <td> {{ $txn->txn_id }}</td>
                                <td>{{ $txn->payment_status === 'CHARGED' ? 'SUCCESS' : $txn->payment_status }}</td>
                                <td>{{ $txn->currency }} {{ $txn->amount }}</td>
                                <td>{{ $meta_data['firstName'] ?? 'N/A' }} {{ $meta_data['lastName'] ?? '' }}</td>
                                <td>{{ $txn->customer_email }}</td>
                                <td>{{ $txn->customer_phone }}</td>
                                <td>{{ $package_name }}</td>
                                <td>{{ $meta_data['description'] ?? 'N/A' }}</td>
                                <td>{{ \Carbon\Carbon::parse($txn->created_at)->setTimezone('Asia/Kolkata')->format('d-m-Y H:i:s') }}</td>
                                <td>
                                    <form action="{{ route('admin.transaction.delete',['id'=>$txn->id])}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$transaction_list->links()}}
            </div>
        </section>

        <!-- /.content -->
    </div>
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
    @if(session()->has('success'))
<script>
    swal("Thank You","{{session()->get('success')}}", "success")
</script>
@endif
@endsection