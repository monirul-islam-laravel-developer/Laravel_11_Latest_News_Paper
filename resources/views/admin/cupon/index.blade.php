@extends('admin.master.master')

@section('title')
    Cupon page
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
                                <h3 class="card-title">All Cupon</h3>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="table table-bordered text-nowrap border-bottom">
                                        <thead>
                                        <div class="d-flex justify-content-end mb-4">
                                            <a href="{{route('cupon.create')}}" class="btn btn-primary">Add Cupon</a>
                                        </div>
                                        <tr>
                                            <th class="border-bottom-0">Sl</th>
                                            <th class="border-bottom-0">Name</th>
                                            <th class="border-bottom-0">Code</th>
                                            <th class="border-bottom-0">Start date</th>
                                            <th class="border-bottom-0">End date</th>
                                            <th class="border-bottom-0">Expire date</th>
                                            <th class="border-bottom-0">Status</th>
                                            <th class="border-bottom-0">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($cupons as $cupon)
                                            <tr>
                                                <td>1</td>
                                                <td>{{$cupon->name}}</td>
                                                <td>{{$cupon->code}}</td>
                                                <td>{{$cupon->start_date}}</td>
                                                <td>{{$cupon->end_date}}</td>
                                                <td>{{$cupon->expire_date}}</td>
                                                <td>
                                                    @if($cupon->status==1)
                                                    <a href="{{route('cupon.show',$cupon->id)}}" class="btn btn-primary">Active</a>
                                                    @else
                                                        <a href="{{route('cupon.show',$cupon->id)}}" class="btn btn-warning">Inactive</a>
                                                    @endif

                                                </td>
                                                <td>2-2-30</td>

                                                <td>
                                                    <a href="{{route('cupon.edit',$cupon->id)}}" class="btn btn-success btn-lg" title="Edit">
                                                        <i class="ri-edit-box-fill"></i>
                                                    </a>

                                                    <button type="button" onclick="confirmDelete({{$cupon->id}});" class="btn btn-danger btn-lg" title="Delete">
                                                        <i class="ri-chat-delete-fill"></i>
                                                    </button>

                                                    <form action="{{route('cupon.destroy',$cupon->id)}}" method="POST" id="categoryDeleteForm{{$cupon->id}}">
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


@endsection



