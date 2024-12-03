@extends('admin.master.master')

@section('title')
    Theme page
@endsection

@section('body')
    <!--app-content open-->
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->

                <!-- End Row -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">All Theme</h3>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="table table-bordered text-nowrap border-bottom">
                                        <thead>
                                        <div class="d-flex justify-content-end mb-4">
                                            <a href="{{route('theme.create')}}" class="btn btn-primary">Add Theme</a>
                                        </div>
                                        <tr>
                                            <th class="border-bottom-0">Sl</th>
                                            <th class="border-bottom-0">Category</th>
                                            <th class="border-bottom-0">SubCategory</th>
                                            <th class="border-bottom-0">Name</th>
                                            <th class="border-bottom-0">Image</th>
                                            <th class="border-bottom-0">Status</th>
                                            <th class="border-bottom-0">Premelink</th>
                                            <th class="border-bottom-0">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($themes as $theme)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$theme->category->name}}</td>
                                                <td>{{$theme->sub_category->name}}</td>
                                                <td>{{$theme->name}}</td>
                                                <td><img src="{{asset($theme->image)}}" height="50" width="80"></td>
                                                <td>
                                                    @if($theme->status==1)

                                                        <a href="{{route('theme.show',$theme->id)}}" class="btn btn-primary">Active</a>
                                                    @else
                                                        <a href="{{route('theme.show',$theme->id)}}" class="btn btn-warning">Inactive</a>
                                                    @endif

                                                </td>
                                                <td>
                                                    @php
                                                        $url = url('detail/' . Str::slug($theme->sub_category->name) . '/' . Str::slug($theme->slug) ?? $theme->id);
                                                    @endphp

                                                    <a href="javascript:void(0);" onclick="copyUrl('{{ $url }}')">Copy URL</a>
                                                </td>





                                                <td>
                                                    <a href="{{route('theme.edit',$theme->id)}}" class="btn btn-success btn-lg" title="Edit">
                                                        <i class="ri-edit-box-fill"></i>
                                                    </a>

                                                    <button type="button" onclick="confirmDelete({{$theme->id}});" class="btn btn-danger btn-lg" title="Delete">
                                                        <i class="ri-chat-delete-fill"></i>
                                                    </button>

                                                    <form action="{{route('theme.destroy',$theme->id)}}" method="POST" id="categoryDeleteForm{{$theme->id}}">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <script>
                                                        function confirmDelete(categoryId) {
                                                            var confirmDelete = confirm('Are you sure you want to delete this?');
                                                            if (confirmDelete) {
                                                                document.getElementById('categoryDeleteForm' + categoryId).submit();
                                                            } else {
                                                                return false;
                                                            }
                                                        }
                                                    </script>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->


            </div>
        </div>
    </div>
    <td>
        @php
            $url = url('detail/' . Str::slug($theme->sub_category->name) . '/' . Str::slug($theme->slug) ?? $theme->id);
        @endphp

        <a href="javascript:void(0);" onclick="copyUrl('{{ $url }}')">Copy URL</a>
        <span id="copyMessage" style="display: none; color: green; margin-left: 5px;">Copied</span>
    </td>

    <script>
        function copyUrl(url) {
            // Copy the URL to the clipboard
            const tempInput = document.createElement('input');
            tempInput.value = url;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);
            alert('your link copyed');
        }
    </script>

@endsection


