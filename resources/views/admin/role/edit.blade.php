@extends('admin.master.master')

@section('title')
    Role Edit Page
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
                                <h4 class="card-title">Role Edit Form</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted font-14">{{Session::get('message')}}</p>
                                <form class="form-horizontal" action="{{route('role.update', ['id' => $role->id])}}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-2 col-form-label">Role Name</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" value="{{$role->name}}" name="name" id="inputEmail3" placeholder="Role Name"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-2 col-form-label">Description</label>
                                        <div class="col-10">
                                            <textarea class="form-control" id="inputPassword3" name="description" placeholder="Role Description">{{$role->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3 justify-content-end">
                                        <label class="col-2 col-form-label">Select Route</label>
                                        <div class="col-10">
                                            <div class="row">
                                                @foreach ($routeLists as $prefix => $routeNames)
                                                    <div class="col-md-6">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="text-center">{{ \Illuminate\Support\Str::ucfirst($prefix) }} Module</h4>
                                                            </div>
                                                            <div class="card-body text-center">
                                                                @foreach ($routeNames as $key => $routeName)
                                                                    @php
                                                                        // Format the route name
                                                                        $formattedRouteName = str_replace('.', ' ', $routeName); // Replace dots with spaces
                                                                        $formattedRouteName = ucwords($formattedRouteName); // Capitalize the first letter of each word
                                                                    @endphp
                                                                    <div class="form-check form-check-inline" style="margin: 2%;">
                                                                        <input type="checkbox" value="{{ $routeName }}"
                                                                               style="height: 20px;width: 20px;" name="route_name[]"
                                                                               @foreach($role->roleRoutes as $roleRoute)
                                                                               {{ $routeName == $roleRoute->route_name ? 'checked' : '' }}
                                                                               @endforeach class="form-check-input"
                                                                               id="customCheck{{ $routeName }}"/>
                                                                        <label
                                                                            for="customCheck{{ $routeName }}"
                                                                            class="form-check-label"
                                                                            style="margin-left: 5px; cursor: pointer;"
                                                                        >
                                                                            {{ $formattedRouteName }}
                                                                        </label>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="justify-content-end row">
                                        <div class="col-10">
                                            <button type="submit" class="btn btn-info">Update Role Info</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
