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

        <title> {{ $title ?? 'Admin' }} </title>

        <!-- vendor css -->
        <link href="{{asset('template-res/lib/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
        <link href="{{asset('template-res/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">


        <!-- Bracket CSS -->
        {{-- <link rel="stylesheet" href="{{asset('template-res/css/bracket.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('template-res/css/my_style.css')}}">

        <link rel="stylesheet" href="{{asset('template-res/css/s2.css')}}">

        <!-- This Page Css -->
        <link href="{{asset('template-res/lib/datatables.net-dt/css/jquery.dataTables.min.css')}}" rel="stylesheet">
        <link href="{{asset('template-res/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css')}}" rel="stylesheet">

        <link href="{{asset('template-res/css/bracket.css')}}" rel="stylesheet">



    </head>

    <body>



        @include('admin.layout.left-menu')
        @include('admin.layout.right-menu')

        <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">



    <!-- br-pageheader -->
    <div class="br-pagetitle">
        <div>
            <h4>Create Product</h4>
        </div>
    </div>
    <!-- d-flex -->

    <div class="br-pagebody">
        <form class="br-section-wrapper" method="post"   action="{{ URL::to('/product/store') }}">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="row">

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">Select Parent Category:
                            <span class="tx-danger">*</span></label>
                            <select class="js-example-basic-multiple form-control" required name="category_id" onchange="categoryChange(this)">
                                <option value="" disabled selected>Select Parent Category</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">Select Sub Category:
                            <span class="tx-danger">*</span></label>
                            <select class="js-example-basic-multiple form-control" required name="sub_category_id" id="sub-category-id">
                                <option value="" disabled selected>Select Parent Category first</option>
                            </select>
                    </div>
                </div>
            </div>

            <div id="forms-id">
                <h4>After selecting parent category, form will autometically populate</h4>
            </div>


            <!-- row -->
            <div class="form-layout-footer mg-t-30">
                <button class="btn btn-info" type="submit" id="submit-id" style="display: none">Submit</button>
            </div>
            <!-- form-layout-footer -->
        </form>
    </div>



    @include('admin.layout.footer')
  </div>
  <!-- ########## END: MAIN PANEL ########## -->

  <script src="{{asset('template-res/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('template-res/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('template-res/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('template-res/js/bracket.js')}}"></script>
  <script src="{{asset('template-res/js/my_js.js')}}"></script>
  <script src="{{asset('template-res/js/s2.js')}}"></script>
  <script src="{{asset('template-res/lib/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('template-res/lib/datatables.net-dt/js/dataTables.dataTables.min.js')}}"></script>
  <script src="{{asset('template-res/lib/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('template-res/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js')}}"></script>


  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });

    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
  </script>


<script>
    function categoryChange(elem){
        url = "{{ URL::to('/category/ajax/sub-category') }}"+"/"+elem.value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("sub-category-id").innerHTML = this.responseText;
                }
            };
        xmlhttp.open("GET", url, true);
        xmlhttp.send();

        formPopulate(elem.value);
    }

    function formPopulate(category_id){
        url = "{{ URL::to('/product/ajax-form-field') }}"+"/"+category_id;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("forms-id").innerHTML = this.responseText;
                }
            };
        xmlhttp.open("GET", url, true);
        xmlhttp.send();

        document.getElementById("submit-id").style.display = "block";
    }
</script>
    </body>

</html>
