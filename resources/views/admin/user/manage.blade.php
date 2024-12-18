@extends('admin.master.master')

@section('title')
    User manage
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
                                <h3 class="card-title">User manage</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="table table-bordered text-nowrap border-bottom">
                                        <thead>
                                        <tr>
                                            <th>SL NO</th>
                                            <th>User Name</th>
                                            <th>Role Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>
                                                    @foreach($user->roles as $user_role)
                                                        <span>{{$user_role->name.' , '}}</span>
                                                    @endforeach
                                                </td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->mobile}}</td>
                                                <td>
                                                    <a href="{{route('user.edit', ['id' => $user->id])}}" class="btn btn-success btn-sm" title="Edit">
                                                        <i class="ri-edit-box-fill"></i>
                                                    </a>
                                                    <a href="{{route('user.delete', ['id' => $user->id])}}" class="btn btn-danger btn-sm {{$user->id == 1 ? 'disabled' : ''}}" title="Delete" onclick="return confirm('Ary you sure to delete this..');">
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

