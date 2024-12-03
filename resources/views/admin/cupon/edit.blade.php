@extends('admin.master.master')

@section('title')
    Cupon Edit Page
@endsection

@section('body')
    <div class="app-content main-content mt-0">
        <div class="side-app">
            <div class="main-container container-fluid">
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Form Elements</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Elements</li>
                        </ol>
                    </div>
                </div>
                <div class="row row-sm">
                    <div class="col-sm-12">
                        <div class="card box-shadow-0">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Cupon Edit Form</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('cupon.update',$cupon->id)}}" method="POST" enctype="multipart/form-data" id="categoryForm">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Name</label>
                                        <input type="text" name="name" value="{{$cupon->name}}" required class="form-control" id="exampleInputEmail2" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Code</label>
                                        <input type="text" name="code" value="{{$cupon->code}}" required class="form-control" id="exampleInputEmail2" placeholder="Code">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Discount Price</label>
                                        <input type="text" name="discount_price" value="{{$cupon->discount_price}}"  required class="form-control" id="exampleInputEmail2" placeholder="Discount Price">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Start Date</label>
                                        <input type="date" name="start_date" value="{{$cupon->start_date}}"  required class="form-control" id="exampleInputEmail2" placeholder="Description">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">End Date</label>
                                        <input type="date" name="end_date" value="{{$cupon->end_date}}" required class="form-control" id="exampleInputEmail2" placeholder="Description">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Expire Date</label>
                                        <input type="date" name="expire_date" value="{{$cupon->expire_date}}" required class="form-control" id="exampleInputEmail2" placeholder="Description">
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary btn-w-md mt-3">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(input) {
            var preview = document.getElementById('imagePreview');
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('d-none'); // Show the preview image
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = '#';
                preview.classList.add('d-none'); // Hide the preview image if no file selected
            }
        }
    </script>
@endsection


