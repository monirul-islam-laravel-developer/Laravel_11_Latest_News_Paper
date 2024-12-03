@extends('front.master.master')
@section('title')
    Profile page

@endsection

@section('body')
    <hr class="new5">
    <!-- ================================== Dashboard Start =========================== -->
    <section class="dashboard">
        <div class="dashboard__inner d-flex">

            <!-- ===================== Dashboard Sidebar Start ======================= -->
        @include('front.include_customer.sidebar')
        <!-- ===================== Dashboard Sidebar End ======================= -->
            <!-- Cover Photo Start -->
            <div class="dashboard-body">

                <div class="cover-photo position-relative z-index-1 overflow-hidden">

                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' id="imageUploadTwo" accept=".png, .jpg, .jpeg">
{{--                            <label for="imageUploadTwo">--}}
{{--                                <span class="icon"> <img src="{{asset('/')}}front/assets/images/icons/camera-two.svg" alt=""> </span>--}}
{{--                                <span class="text">Change Cover</span>--}}
{{--                            </label>--}}
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreviewTwo">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cover Photo End -->


                <div class="dashboard-body__content profile-content-wrapper z-index-1 position-relative mt--100">
                    <!-- Profile Content Start -->
                    <div class="profile">
                        <div class="row gy-4">
                            <div class="col-xxl-3 col-xl-4">
                                <div class="profile-info">
                                    <div class="profile-info__inner mb-40 text-center">

{{--                                        <div class="avatar-upload mb-24">--}}
{{--                                            <div class="avatar-edit">--}}
{{--                                                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg">--}}
{{--                                                <label for="imageUpload">--}}
{{--                                                    <img src="{{asset('/')}}front/assets/images/icons/camera.svg" alt="">--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                            <div class="avatar-preview">--}}
{{--                                                <div >--}}
{{--                                                    id="imagePreview"--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <h4>  <p class="text-center text-success">{{Session::get('message')}}</p></h4>
                                        <h5 class="profile-info__name mb-1">{{$customer->name}}</h5>
                                    </div>

                                    <ul class="profile-info-list">
                                        <li class="profile-info-list__item">
                        <span class="profile-info-list__content flx-align flex-nowrap gap-2">
                            <img src="{{asset('/')}}front/assets/images/icons/profile-info-icon1.svg" alt="" class="icon">
                            <span class="text text-heading fw-500">Your Name</span>
                        </span>
                                            <span class="profile-info-list__info">{{$customer->name}}</span>
                                        </li>
                                        <li class="profile-info-list__item">
                        <span class="profile-info-list__content flx-align flex-nowrap gap-2">
                            <img src="{{asset('/')}}front/assets/images/icons/profile-info-icon2.svg" alt="" class="icon">
                            <span class="text text-heading fw-500">Email</span>
                        </span>
                                            <span class="profile-info-list__info">{{$customer->email}}</span>
                                        </li>
                                        <li class="profile-info-list__item">
                        <span class="profile-info-list__content flx-align flex-nowrap gap-2">
                            <img src="{{asset('/')}}front/assets/images/icons/profile-info-icon3.svg" alt="" class="icon">
                            <span class="text text-heading fw-500">Phone</span>
                        </span>
                                            <span class="profile-info-list__info">+88{{$customer->number}}</span>
                                        </li> <li class="profile-info-list__item">
                        <span class="profile-info-list__content flx-align flex-nowrap gap-2">
                            <img src="{{asset('/')}}front/assets/images/icons/profile-info-icon3.svg" alt="" class="icon">
                            <span class="text text-heading fw-500">Alt Phone</span>
                        </span>
                                            <span class="profile-info-list__info">+88{{$customer->alt_number}}</span>
                                        </li>
                                        <li class="profile-info-list__item">
                        <span class="profile-info-list__content flx-align flex-nowrap gap-2">
                            <img src="{{asset('/')}}front/assets/images/icons/profile-info-icon4.svg" alt="" class="icon">
                            <span class="text text-heading fw-500">Address</span>
                        </span>
                                            <span class="profile-info-list__info">{{$customer->address}}</span>
                                        </li>
{{--                                        <li class="profile-info-list__item">--}}
{{--                        <span class="profile-info-list__content flx-align flex-nowrap gap-2">--}}
{{--                            <img src="{{asset('/')}}front/assets/images/icons/profile-info-icon5.svg" alt="" class="icon">--}}
{{--                            <span class="text text-heading fw-500">Balance</span>--}}
{{--                        </span>--}}
{{--                                            <span class="profile-info-list__info">$0.00 USD</span>--}}
{{--                                        </li>--}}
                                        <li class="profile-info-list__item">
                        <span class="profile-info-list__content flx-align flex-nowrap gap-2">
                            <img src="{{asset('/')}}front/assets/images/icons/profile-info-icon6.svg" alt="" class="icon">
                            <span class="text text-heading fw-500">Member Since</span>
                        </span>
                                            <span class="profile-info-list__info">{{ \Carbon\Carbon::parse($customer->created_at)->format('F j, Y') }}</span>
                                        </li>
                                        <li class="profile-info-list__item">
                        <span class="profile-info-list__content flx-align flex-nowrap gap-2">
                            <img src="{{asset('/')}}front/assets/images/icons/profile-info-icon7.svg" alt="" class="icon">
                            <span class="text text-heading fw-500">Purchased</span>
                        </span>
                                            <span class="profile-info-list__info">0 items</span>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-xxl-9 col-xl-8">
                                <div class="dashboard-card">
                                    <div class="dashboard-card__header pb-0">
                                        <ul class="nav tab-bordered nav-pills" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link font-18 font-heading active" id="pills-personalInfo-tab" data-bs-toggle="pill" data-bs-target="#pills-personalInfo" type="button" role="tab" aria-controls="pills-personalInfo" aria-selected="true">Personal Info</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link font-18 font-heading" id="pills-changePassword-tab" data-bs-toggle="pill" data-bs-target="#pills-changePassword" type="button" role="tab" aria-controls="pills-changePassword" aria-selected="false">Change Password</button>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="profile-info-content">
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-personalInfo" role="tabpanel" aria-labelledby="pills-personalInfo-tab" tabindex="0">
                                                <form action="{{ route('customer-update', ['id' => $customer->id]) }}" autocomplete="off" method="POST" enctype="multipart/form-data">
                                                    @method('POST')
                                                    @csrf
                                                    <div class="row gy-4">
                                                        <div class="col-sm-6 col-xs-6">
                                                            <label for="fName" class="form-label mb-2 font-18 font-heading fw-600">Your Name</label>
                                                            <input type="text" class="common-input border" id="fName" name="name" value="{{$customer->name}}" placeholder="Your Name">
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6">
                                                            <label for="lastNamee" class="form-label mb-2 font-18 font-heading fw-600">Email</label>
                                                            <input type="email" class="common-input border" id="lastNamee" name="email"  value="{{$customer->email}}" placeholder="Email">
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6">
                                                            <label for="phonee" class="form-label mb-2 font-18 font-heading fw-600">Phone Number</label>
                                                            <input type="tel" class="common-input border" name="number" id="phonee" value="{{$customer->number}}" placeholder="Phone Number">
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6">
                                                            <label for="phonee" class="form-label mb-2 font-18 font-heading fw-600">Alternative Number</label>
                                                            <input type="tel" class="common-input border" name="alt_number" id="phonee" value="{{$customer->alt_number}}" placeholder="Phone Number">
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6">
                                                            <label for="emailAdddd" class="form-label mb-2 font-18 font-heading fw-600">Address</label>
                                                            <input type="text" class="common-input border" name="address" id="emailAdddd" value="{{$customer->address}}" placeholder="Email Address">
                                                        </div>
                                                        <!-- Other form fields -->

                                                            <div class="col-sm-6 col-xs-6">
                                                                <label for="cityyy" class="form-label mb-2 font-18 font-heading fw-600">Gender</label>
                                                                <div class="select-has-icon">
                                                                    <select class="common-input border" id="cityyy" name="gender">
                                                                        <option selected disabled>--Select Gender--</option>
                                                                        <option value="male" {{ $customer->gender == 'male' ? 'selected' : '' }}>Male</option>
                                                                        <option value="female" {{ $customer->gender == 'female' ? 'selected' : '' }}>Female</option>
                                                                        <option value="other" {{ $customer->gender == 'other' ? 'selected' : '' }}>Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <!-- Submit button and other fields -->

                                                        <div class="col-sm-6 col-xs-6">
                                                            <label for="Postcodeee" class="form-label mb-2 font-18 font-heading fw-600">National Id Number</label>
                                                            <input type="text" class="common-input border" name="nid" id="Postcodeee" value="{{$customer->nid}}" placeholder="National Id Number">
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6">
                                                            <label for="date_of_birth" class="form-label mb-2 font-18 font-heading fw-600">Date of Birth</label>
                                                            <input type="date" class="common-input border" name="date_of_birth" id="date_of_birth" value="{{$customer->date_of_birth}}" placeholder="Date of Birth">
                                                        </div>
                                                        <div class="col-sm-12 col-xs-12">
                                                            <label for="image" class="form-label mb-2 font-18 font-heading fw-600">Image</label>

                                                            <!-- File input -->
                                                            <input type="file" class="form-control-file" id="imageUpload" name="image" accept="image/*" onchange="previewImage(event)">

                                                            <br/>

                                                            <!-- Image Preview -->
                                                            <img id="imagePreview" src="{{ asset($customer->image) }}" width="100" height="50" alt="Image Preview">
                                                        </div>

                                                        <!-- JavaScript for Live Preview -->




                                                        <div class="col-sm-12 text-end">
                                                            <button type="submit" class="btn btn-main btn-lg pill mt-4"> Update Profile</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

{{--                                            <div class="tab-pane fade" id="pills-changePassword" role="tabpanel" aria-labelledby="pills-changePassword-tab" tabindex="0">--}}
{{--                                                <form action="{{ route('customer-password-change') }}" method="POST">--}}
{{--                                                    @csrf--}}
{{--                                                    <div class="row gy-4">--}}

{{--                                                        <div class="col-12">--}}
{{--                                                            <label for="current-password" class="form-label mb-2 font-18 font-heading fw-600">Current Password</label>--}}
{{--                                                            <div class="position-relative">--}}
{{--                                                                <input type="password" name="password" class="common-input common-input--withIcon common-input--withLeftIcon" id="current-password" placeholder="************">--}}
{{--                                                                <span class="input-icon input-icon--left"><img src="{{asset('/')}}front/assets/images/icons/key-icon.svg" alt=""></span>--}}
{{--                                                                <span class="input-icon password-show-hide fas fa-eye la-eye-slash toggle-password-two" id="toggle-current-password"></span>--}}

{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="col-sm-12 col-xs-12">--}}
{{--                                                            <label for="new-password" class="form-label mb-2 font-18 font-heading fw-600">New Password</label>--}}
{{--                                                            <div class="position-relative">--}}
{{--                                                                <input type="password" name="new_password" class="common-input common-input--withIcon common-input--withLeftIcon" id="new-password" placeholder="************">--}}
{{--                                                                <span class="input-icon input-icon--left"><img src="{{asset('/')}}front/assets/images/icons/lock-two.svg" alt=""></span>--}}
{{--                                                                <span class="input-icon password-show-hide fas fa-eye la-eye-slash toggle-password-two" id="toggle-new-password"></span>--}}

{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="col-sm-12 col-xs-12">--}}
{{--                                                            <label for="confirm-password" class="form-label mb-2 font-18 font-heading fw-600">Confirm Password</label>--}}
{{--                                                            <div class="position-relative">--}}
{{--                                                                <input type="password" name="new_password_confirmation" class="common-input common-input--withIcon common-input--withLeftIcon" id="confirm-password" placeholder="************">--}}
{{--                                                                <span class="input-icon input-icon--left"><img src="{{asset('/')}}front/assets/images/icons/lock-two.svg" alt=""></span>--}}
{{--                                                                <span class="input-icon password-show-hide fas fa-eye la-eye-slash toggle-password-two" id="toggle-confirm-password"></span>--}}
{{--                                                                @error('new_password_confirmation')--}}
{{--                                                                <small class="text-danger">{{ $message }}</small>--}}
{{--                                                                @enderror--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="col-sm-12 text-end">--}}
{{--                                                            <button type="submit" class="btn btn-main btn-lg pill mt-4">Update Password</button>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </form>--}}
{{--                                            </div>--}}
                                            <div class="tab-pane fade" id="pills-changePassword" role="tabpanel" aria-labelledby="pills-changePassword-tab" tabindex="0">
                                                <form action="{{ route('customer-password-change') }}" method="POST" onsubmit="return validatePasswordMatch()">
                                                    @csrf
                                                    <div class="row gy-4">

                                                        <div class="col-12">
                                                            <label for="current-password" class="form-label mb-2 font-18 font-heading fw-600">Current Password</label>
                                                            <div class="position-relative">
                                                                <input type="password" name="password" class="common-input common-input--withIcon common-input--withLeftIcon" id="current-password" placeholder="************">
                                                                <span class="input-icon input-icon--left"><img src="{{asset('/')}}front/assets/images/icons/key-icon.svg" alt=""></span>
                                                                <span class="input-icon password-show-hide fas fa-eye la-eye-slash toggle-password-two" id="toggle-current-password"></span>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12 col-xs-12">
                                                            <label for="new-password" class="form-label mb-2 font-18 font-heading fw-600">New Password</label>
                                                            <div class="position-relative">
                                                                <input type="password" name="new_password" class="common-input common-input--withIcon common-input--withLeftIcon" id="new-password" placeholder="************">
                                                                <span class="input-icon input-icon--left"><img src="{{asset('/')}}front/assets/images/icons/lock-two.svg" alt=""></span>
                                                                <span class="input-icon password-show-hide fas fa-eye la-eye-slash toggle-password-two" id="toggle-new-password"></span>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12 col-xs-12">
                                                            <label for="confirm-password" class="form-label mb-2 font-18 font-heading fw-600">Confirm Password</label>
                                                            <div class="position-relative">
                                                                <input type="password" name="new_password_confirmation" class="common-input common-input--withIcon common-input--withLeftIcon" id="confirm-password" placeholder="************">
                                                                <span class="input-icon input-icon--left"><img src="{{asset('/')}}front/assets/images/icons/lock-two.svg" alt=""></span>
                                                                <span class="input-icon password-show-hide fas fa-eye la-eye-slash toggle-password-two" id="toggle-confirm-password"></span>
                                                            </div>
                                                            <div id="password-error" class="text-danger mt-2"></div>
                                                        </div>

                                                        <div class="col-sm-12 text-end">
                                                            <button type="submit" class="btn btn-main btn-lg pill mt-4">Update Password</button>
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
                    <!-- Profile Content End -->

                </div>

                <!-- ====================== Dashboard Footer Start ======================== -->
                <!-- ====================== Dashboard Footer End ======================== -->


            </div>
        </div>
    </section>
    <script>
        function validatePasswordMatch() {
            var newPassword = document.getElementById('new-password').value;
            var confirmPassword = document.getElementById('confirm-password').value;
            var errorDiv = document.getElementById('password-error');

            if (newPassword !== confirmPassword) {
                errorDiv.innerHTML = "New password and confirmation password do not match.";
                return false; // Prevent form submission
            } else {
                errorDiv.innerHTML = ""; // Clear any previous error
            }
            return true; // Allow form submission
        }
    </script>
    <script>
        document.querySelectorAll('.toggle-password-two').forEach(item => {
            item.addEventListener('click', function() {
                let input = document.querySelector(item.getAttribute('id').replace('toggle-', '#'));
                if (input.getAttribute('type') === 'password') {
                    input.setAttribute('type', 'text');
                    item.classList.remove('fa-eye-slash');
                    item.classList.add('fa-eye');
                } else {
                    input.setAttribute('type', 'password');
                    item.classList.remove('fa-eye');
                    item.classList.add('fa-eye-slash');
                }
            });
        });

    </script>
    <script type="text/javascript">
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('imagePreview');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
