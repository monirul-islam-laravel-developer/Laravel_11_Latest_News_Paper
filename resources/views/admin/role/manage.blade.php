@extends('admin.master.master')

@section('title')
    Role manage
@endsection

@section('body')
    <!--app-content open-->
    <div class="app-content main-content mt-0">
        <div class="side-app">
            <!-- CONTAINER -->
            <div class="main-container container-fluid">
                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Role manage</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="table table-bordered text-nowrap border-bottom">
                                        <thead>
                                        <tr>
                                            <th>SL NO</th>
                                            <th>Role Name</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($roles as $role)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$role->name}}</td>
                                                <td>{{$role->description}}</td>
                                                <td>
                                                    <a href="{{route('role.edit', ['id' => $role->id])}}" class="btn btn-success btn-sm" title="Edit">
                                                        <i class="ri-edit-box-fill"></i>
                                                    </a>
                                                    <a href="{{route('role.delete', ['id' => $role->id])}}" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Ary you sure to delete this..');">
                                                        <i class="ri-chat-delete-fill"></i>
                                                    </a>
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

