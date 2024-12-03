@extends('admin.master.master')
@section('title')
    Theme Add Page

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
                                <h4 class="card-title">Theme Add Form</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('theme.store') }}" method="POST" enctype="multipart/form-data" id="categoryForm">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Name</label>
                                        <input type="text" name="name" required class="form-control" id="exampleInputEmail2" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Category</label>
                                        <select class="form-control" name="category_id" onchange="getProductSubCategory(this.value)">
                                            <option value="">--Select Category Name--</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail2">SubCategory</label>
                                        <select class="form-control" name="sub_category_id" id="subCategoryId">
                                            <option value="">--Select Sub Category Name--</option>
                                            @foreach($subcategories as $subcategory)
                                                <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>




                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Link</label>
                                        <input type="text" name="link"  class="form-control" id="exampleInputEmail2" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Regular Price</label>
                                        <input type="number" name="regular_price"  class="form-control" id="exampleInputEmail2" placeholder="Your Theme Regular Price">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Selling Price</label>
                                        <input type="number" name="selling_price"  class="form-control" id="exampleInputEmail2" placeholder="Your Theme Selling Price">
                                    </div>



                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Compatible Browsers</label>
                                        <input type="text" name="browser" class="form-control" id="exampleInputEmail2" placeholder="Browser Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Software Version</label>
                                        <input type="text" name="software_version"  class="form-control" id="exampleInputEmail2" placeholder="Software Version">
                                    </div>

                                    <div class="form-group">
                                        <label for="privacy_policy">Support</label>
                                        <textarea class="form-control" id="summernote2" name="support"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="privacy_policy">Theme Detail</label>
                                        <textarea class="form-control" id="summernote" name="detail"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="condition">Theme More Detail</label>
                                        <textarea class="form-control" name="more_detail" id="summernote1"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="formFile" class="form-label">Image</label>
                                        <input class="form-control file-input" type="file" name="image" id="formFile" onchange="previewImage(this)">
                                        <img id="imagePreview" src="#" alt="Image Preview" class="img-fluid d-none" height="80" width="120">
                                    </div>
                                    <div class="form-group">
                                        <label for="key_words">Seo Tags</label>
                                        <input type="text" name="seo_tag" class="form-control" id="key_words" data-role="tagsinput" placeholder="Enter tags">
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
    <script>
        $('#summernote').summernote({
            tabsize: 2,
            height: 100
        });
    </script>
    <script>
        $('#summernote1').summernote({
            tabsize: 2,
            height: 100
        });
    </script>
    <script>
        $('#summernote2').summernote({
            tabsize: 2,
            height: 100
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


@endsection

