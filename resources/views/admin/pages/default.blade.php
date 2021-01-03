<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from themepixels.me/demo/bracketplus1.4/app/template/index.html by
    HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Oct 2020 06:03:33 GMT -->
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
<link rel="icon" href="{{ asset('/images/fav.png') }}" type="image/png">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Condo</title>

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
                    <p class="mg-b-0">Condo Visitors</p>
                </div>
            </div>

            <div class="br-pagebody">

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
        <script src="{{asset('template-res/js/my_js.js')}}"></script>
    </body>

</html>
