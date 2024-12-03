@extends('front.master.master')
@section('title')
     Dashboard
@endsection

@section('body')
     <hr class="new5">
     <!-- ================================== Dashboard Start =========================== -->
     <section class="dashboard">
          <div class="dashboard__inner d-flex">

               <!-- ===================== Dashboard Sidebar Start ======================= -->
               @include('front.include_customer.sidebar')
               <!-- ===================== Dashboard Sidebar End ======================= -->
               <div class="dashboard-body">

                    <!-- Dashboard Nav Start -->
                    <div class="dashboard-nav bg-white flx-between gap-md-3 gap-2">
                         <div class="dashboard-nav__left flx-align gap-md-3 gap-2">
                              <button type="button" class="icon-btn bar-icon text-heading bg-gray-seven flx-center">
                                   <i class="las la-bars"></i>
                              </button>
                              <button type="button" class="icon-btn arrow-icon text-heading bg-gray-seven flx-center">
                                   <img src="{{asset('/')}}front/assets/images/icons/angle-right.svg" alt="">
                              </button>
                              <form action="#" class="search-input d-sm-block d-none">
            <span class="icon">
                <img src="{{asset('/')}}front/assets/images/icons/search-dark.svg" alt="" class="white-version">
                <img src="{{asset('/')}}front/assets/images/icons/search-dark-white.svg" alt="" class="dark-version">
            </span>
                                   <input type="text" class="common-input common-input--md common-input--bg pill w-100" placeholder="Search here...">
                              </form>
                              <h4 class="welcome-balance__title mb-0">Welcome back! {{Session::get('custommer_name')}}</h4>
                         </div>
                         <div class="dashboard-nav__right">
                              <div class="header-right flx-align">
                                   <div class="header-right__inner gap-sm-3 gap-2 flx-align d-flex">

                                        <!-- Light Dark Mode -->
                                   </div>
                              </div>
                         </div>
                    </div>
                    <!-- Dashboard Nav End -->


                    <div class="dashboard-body__content">

                         <!-- welcome balance Content Start -->
                         <div class="welcome-balance mt-2 mb-40 flx-between gap-2">
                              <div class="welcome-balance__left">

                              </div>
                         </div>
                         <!-- welcome balance Content End -->

                         <div class="dashboard-body__item-wrapper">

                              <!-- dashboard body Item Start -->
                              <div class="dashboard-body__item">
                                   <div class="row gy-4">
                                        <div class="col-xl-3 col-sm-6">
                                             <div class="dashboard-widget">
                                                  <img src="{{asset('/')}}front/assets/images/shapes/widget-shape1.png" alt="" class="dashboard-widget__shape one">
                                                  <img src="{{asset('/')}}front/assets/images/shapes/widget-shape2.png" alt="" class="dashboard-widget__shape two">
                                                  <span class="dashboard-widget__icon">
            <img src="{{asset('/')}}front/assets/images/icons/dashboard-widget-icon1.svg" alt="">
        </span>
                                                  <div class="dashboard-widget__content flx-between gap-1 align-items-end">
                                                       <div>
                                                            <h4 class="dashboard-widget__number mb-1 mt-3">2M+</h4>
                                                            <span class="dashboard-widget__text font-14">Total Products</span>
                                                       </div>
                                                       <img src="{{asset('/')}}front/assets/images/icons/chart-icon.svg" alt="">
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6">
                                             <div class="dashboard-widget">
                                                  <img src="{{asset('/')}}front/assets/images/shapes/widget-shape1.png" alt="" class="dashboard-widget__shape one">
                                                  <img src="{{asset('/')}}front/assets/images/shapes/widget-shape2.png" alt="" class="dashboard-widget__shape two">
                                                  <span class="dashboard-widget__icon">
            <img src="{{asset('/')}}front/assets/images/icons/dashboard-widget-icon2.svg" alt="">
        </span>
                                                  <div class="dashboard-widget__content flx-between gap-1 align-items-end">
                                                       <div>
                                                            <h4 class="dashboard-widget__number mb-1 mt-3">$5289.00</h4>
                                                            <span class="dashboard-widget__text font-14">Total Earnings</span>
                                                       </div>
                                                       <img src="{{asset('/')}}front/assets/images/icons/chart-icon.svg" alt="">
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6">
                                             <div class="dashboard-widget">
                                                  <img src="{{asset('/')}}front/assets/images/shapes/widget-shape1.png" alt="" class="dashboard-widget__shape one">
                                                  <img src="{{asset('/')}}front/assets/images/shapes/widget-shape2.png" alt="" class="dashboard-widget__shape two">
                                                  <span class="dashboard-widget__icon">
            <img src="{{asset('/')}}front/assets/images/icons/dashboard-widget-icon3.svg" alt="">
        </span>
                                                  <div class="dashboard-widget__content flx-between gap-1 align-items-end">
                                                       <div>
                                                            <h4 class="dashboard-widget__number mb-1 mt-3">5,2458</h4>
                                                            <span class="dashboard-widget__text font-14">Total Downloads</span>
                                                       </div>
                                                       <img src="{{asset('/')}}front/assets/images/icons/chart-icon.svg" alt="">
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6">
                                             <div class="dashboard-widget">
                                                  <img src="{{asset('/')}}front/assets/images/shapes/widget-shape1.png" alt="" class="dashboard-widget__shape one">
                                                  <img src="{{asset('/')}}front/assets/images/shapes/widget-shape2.png" alt="" class="dashboard-widget__shape two">
                                                  <span class="dashboard-widget__icon">
            <img src="{{asset('/')}}front/assets/images/icons/dashboard-widget-icon4.svg" alt="">
        </span>
                                                  <div class="dashboard-widget__content flx-between gap-1 align-items-end">
                                                       <div>
                                                            <h4 class="dashboard-widget__number mb-1 mt-3">2,589</h4>
                                                            <span class="dashboard-widget__text font-14">Total Sales</span>
                                                       </div>
                                                       <img src="{{asset('/')}}front/assets/images/icons/chart-icon.svg" alt="">
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <!-- dashboard body Item End -->

                              <!-- dashboard body Item Start -->
                              <div class="dashboard-body__item">
                                   <div class="row gy-4">
                                        <div class="col-xl-8">
                                             <div class="dashboard-card">
                                                  <div class="dashboard-card__header flx-between gap-2">
                                                       <h6 class="dashboard-card__title mb-0">Sales History</h6>
                                                       <div class="select-has-icon d-inline-block">
                                                            <select class="select common-input select-sm">
                                                                 <option value="1">Monthly</option>
                                                                 <option value="2">Daily</option>
                                                                 <option value="3">Yearly</option>
                                                            </select>
                                                       </div>
                                                  </div>
                                                  <div class="dashboard-card__chart">
                                                       <div id="chart"></div>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-xl-4">
                                             <div class="dashboard-card">
                                                  <div class="dashboard-card__header">
                                                       <h6 class="dashboard-card__title mb-0">Top Countries</h6>
                                                  </div>
                                                  <ul class="country-list">
                                                       <li class="country-list__item flx-between gap-2">
                                                            <div class="country-list__content flx-align gap-2">
                                                                 <span class="country-list__flag"><img src="{{asset('/')}}front/assets/images/thumbs/flag1.png" alt=""></span>
                                                                 <span class="country-list__name">United States</span>
                                                            </div>
                                                            <span class="country-list__amount">$58.00</span>
                                                       </li>
                                                       <li class="country-list__item flx-between gap-2">
                                                            <div class="country-list__content flx-align gap-2">
                                                                 <span class="country-list__flag"><img src="{{asset('/')}}front/assets/images/thumbs/flag2.png" alt=""></span>
                                                                 <span class="country-list__name">Maxico</span>
                                                            </div>
                                                            <span class="country-list__amount">$69.00</span>
                                                       </li>
                                                       <li class="country-list__item flx-between gap-2">
                                                            <div class="country-list__content flx-align gap-2">
                                                                 <span class="country-list__flag"><img src="{{asset('/')}}front/assets/images/thumbs/flag3.png" alt=""></span>
                                                                 <span class="country-list__name">Brazil</span>
                                                            </div>
                                                            <span class="country-list__amount">$120.00</span>
                                                       </li>
                                                       <li class="country-list__item flx-between gap-2">
                                                            <div class="country-list__content flx-align gap-2">
                                                                 <span class="country-list__flag"><img src="{{asset('/')}}front/assets/images/thumbs/flag4.png" alt=""></span>
                                                                 <span class="country-list__name">Canada</span>
                                                            </div>
                                                            <span class="country-list__amount">$25.00</span>
                                                       </li>
                                                       <li class="country-list__item flx-between gap-2">
                                                            <div class="country-list__content flx-align gap-2">
                                                                 <span class="country-list__flag"><img src="{{asset('/')}}front/assets/images/thumbs/flag5.png" alt=""></span>
                                                                 <span class="country-list__name">Ireland</span>
                                                            </div>
                                                            <span class="country-list__amount">$85.00</span>
                                                       </li>
                                                       <li class="country-list__item flx-between gap-2">
                                                            <div class="country-list__content flx-align gap-2">
                                                                 <span class="country-list__flag"><img src="{{asset('/')}}front/assets/images/thumbs/flag6.png" alt=""></span>
                                                                 <span class="country-list__name">Newzealand</span>
                                                            </div>
                                                            <span class="country-list__amount">$99.00</span>
                                                       </li>
                                                       <li class="country-list__item flx-between gap-2">
                                                            <div class="country-list__content flx-align gap-2">
                                                                 <span class="country-list__flag"><img src="{{asset('/')}}front/assets/images/thumbs/flag7.png" alt=""></span>
                                                                 <span class="country-list__name">Spain</span>
                                                            </div>
                                                            <span class="country-list__amount">$89.00</span>
                                                       </li>
                                                       <li class="country-list__item flx-between gap-2">
                                                            <div class="country-list__content flx-align gap-2">
                                                                 <span class="country-list__flag"><img src="{{asset('/')}}front/assets/images/thumbs/flag8.png" alt=""></span>
                                                                 <span class="country-list__name">Turkey</span>
                                                            </div>
                                                            <span class="country-list__amount">$72.00</span>
                                                       </li>
                                                       <li class="country-list__item flx-between gap-2">
                                                            <div class="country-list__content flx-align gap-2">
                                                                 <span class="country-list__flag"><img src="{{asset('/')}}front/assets/images/thumbs/flag9.png" alt=""></span>
                                                                 <span class="country-list__name">Italy</span>
                                                            </div>
                                                            <span class="country-list__amount">$465.00</span>
                                                       </li>
                                                       <li class="country-list__item flx-between gap-2">
                                                            <div class="country-list__content flx-align gap-2">
                                                                 <span class="country-list__flag"><img src="{{asset('/')}}front/assets/images/thumbs/flag10.png" alt=""></span>
                                                                 <span class="country-list__name">Argentina</span>
                                                            </div>
                                                            <span class="country-list__amount">$45.00</span>
                                                       </li>
                                                       <li class="country-list__item flx-between gap-2">
                                                            <div class="country-list__content flx-align gap-2">
                                                                 <span class="country-list__flag"><img src="{{asset('/')}}front/assets/images/thumbs/flag11.png" alt=""></span>
                                                                 <span class="country-list__name">Maxico</span>
                                                            </div>
                                                            <span class="country-list__amount">$42.00</span>
                                                       </li>
                                                       <li class="country-list__item flx-between gap-2">
                                                            <div class="country-list__content flx-align gap-2">
                                                                 <span class="country-list__flag"><img src="{{asset('/')}}front/assets/images/thumbs/flag12.png" alt=""></span>
                                                                 <span class="country-list__name">Newzealand</span>
                                                            </div>
                                                            <span class="country-list__amount">$89.00</span>
                                                       </li>
                                                  </ul>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <!-- dashboard body Item End -->

                              <!-- dashboard body Item Start -->
                              <div class="dashboard-body__item">
                                   <div class="table-responsive">
                                        <table class="table style-two">
                                             <thead>
                                             <tr>
                                                  <th>Date</th>
                                                  <th>Item Sales</th>
                                                  <th>Earning</th>
                                             </tr>
                                             </thead>
                                             <tbody>
                                             <tr>
                                                  <td> Saturday, 10</td>
                                                  <td> 2</td>
                                                  <td> $89.00</td>
                                             </tr>
                                             <tr>
                                                  <td> Sunday, 11</td>
                                                  <td> 3  </td>
                                                  <td>$150.00</td>
                                             </tr>
                                             <tr>
                                                  <td> Monday, 12</td>
                                                  <td> 2  </td>
                                                  <td>$15.00</td>
                                             </tr>
                                             <tr>
                                                  <td> Tuesday, 15</td>
                                                  <td> 2  </td>
                                                  <td>$25.00</td>
                                             </tr>
                                             <tr>
                                                  <td> Wednesday, 16</td>
                                                  <td> 5  </td>
                                                  <td>$20.00</td>
                                             </tr>
                                             <tr>
                                                  <td> Thursday, 17</td>
                                                  <td> 3  </td>
                                                  <td>$35.00</td>
                                             </tr>
                                             <tr>
                                                  <td> Wednesday, 18</td>
                                                  <td> 1  </td>
                                                  <td>$15.00</td>
                                             </tr>
                                             <tr>
                                                  <td> Thursday, 20</td>
                                                  <td> 5 </td>
                                                  <td>$22.00</td>
                                             </tr>
                                             <tr>
                                                  <td> Wednesday, 22</td>
                                                  <td> 8  </td>
                                                  <td>$10.00</td>
                                             </tr>
                                             <tr>
                                                  <td> Tuesday, 23</td>
                                                  <td> 6  </td>
                                                  <td>$125.00</td>
                                             </tr>
                                             <tr>
                                                  <td> Wednesday, 24</td>
                                                  <td> 3  </td>
                                                  <td>$15.00</td>
                                             </tr>
                                             <tr>
                                                  <td> Tuesday, 23</td>
                                                  <td> 9  </td>
                                                  <td>$15.00</td>
                                             </tr>
                                             <tr>
                                                  <td>Wednesday, 24</td>
                                                  <td> 5  </td>
                                                  <td>$23.00</td>
                                             </tr>
                                             </tbody>
                                        </table>
                                   </div>
                              </div>
                              <!-- dashboard body Item End -->

                         </div>
                    </div>

                    <!-- ====================== Dashboard Footer Start ======================== -->

                    <!-- ====================== Dashboard Footer End ======================== -->


               </div>
          </div>
     </section>
@endsection




