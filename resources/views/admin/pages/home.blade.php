<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <link rel="icon" href="{{ asset('/images/fav.png') }}" type="image/png">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <title>Stock</title>

        <!-- vendor css -->



        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">

        <!-- Bracket CSS -->
        <link rel="stylesheet" href="../css/bracket.css">

        <link href="{{asset('template-res/css/bracket.css')}}" rel="stylesheet">

    </head>

    <body>




        @include('admin.layout.left-menu')
        @include('admin.layout.right-menu')

        <!-- ########## START: MAIN PANEL ########## -->
        <div class="br-mainpanel">
            <div class="br-pagetitle">
                <div>
                    <h4>Dashboard</h4>
                </div>
            </div>

            <div class="br-pagebody">
                {{-- <div class="row row-sm">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-info rounded overflow-hidden">
                            <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                                <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                                <div class="mg-l-20">
                                    <p
                                        class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Total Customer</p>
                                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{ $customerCount }}</p>
                                </div>
                            </div>
                            <div id="ch1" class="ht-30 tr-y-1"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                        <div class="bg-purple rounded overflow-hidden">
                            <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                                <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                                <div class="mg-l-20">
                                    <p
                                        class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Total Booking</p>
                                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{ $boookingCount }}</p>
                                </div>
                            </div>
                            <div id="ch3" class="ht-30 tr-y-1"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                        <div class="bg-teal rounded overflow-hidden">
                            <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                                <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                                <div class="mg-l-20">
                                    <p
                                        class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Today's Parking</p>
                                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{ $todayParkingCount }}</p>
                                </div>
                            </div>
                            <div id="ch2" class="ht-30 tr-y-1"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                        <div class="bg-primary rounded overflow-hidden">
                            <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                                <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
                                <div class="mg-l-20">
                                    <p
                                        class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Parking</p>
                                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{ $parkingCount }}</p>
                                </div>
                            </div>
                            <div id="ch4" class="ht-30 tr-y-1"></div>
                        </div>
                    </div>
                </div>  --}}

                        {{-- <div class="br-section-wrapper">
                            <h4>Recent Parking</h4>
                            <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                      <th>Name</th>
                                      <th>Property Name</th>
                                      <th>Licence Plate Number</th>
                                      <th>Date</th>
                                      <th>Price</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                      @foreach ($bookings as $item)
                                          <tr>
                                              <td>{{ $item->user->name }}</td>
                                              <td>{{ $item->propertyDetail->property_name }}</td>
                                              <td>{{ $item->user->customer->license }}</td>
                                              <td>{{ $item->activity_date }}</td>
                                              <td>{{ $item->price }} </td>
                                          </tr>
                                      @endforeach


                                  </tbody>
                            </table>
                        </div>

                        <div class="br-section-wrapper">
                            <h4>Recent Customers</h4>
                            <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Phone</th>
                                      <th>Address</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>


                                    @foreach ($userDetails as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->address1 }}</td>
                                            <td>
                                                <a class="dropdown-item" href="{{ URL::to('/admin/customer/show').'/'.$item->user_id }}">View</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                  </tbody>
                            </table>
                        </div> --}}


            </div>
            <!-- br-pagebody -->
            @include('admin.layout.footer')
        </div>
        <!-- br-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->

        <script src="{{asset('template-res/lib/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('template-res/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('template-res/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('template-res/js/bracket.js')}}"></script>
        <script src="{{asset('template-res/js/dashboard.js')}}"></script>
        {{-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> --}}
        <script src="{{asset('template-res/js/my_js.js')}}"></script>


    </body>

    <!-- Mirrored from themepixels.me/demo/bracketplus1.4/app/template/index.html by
    HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Oct 2020 06:04:49 GMT -->
</html>
