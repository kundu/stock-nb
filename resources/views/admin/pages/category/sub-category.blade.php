<!DOCTYPE html>
<html lang="en">


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
            <h4>Create Sub Category</h4>
        </div>
    </div>
    <!-- d-flex -->

    <div class="br-pagebody">
        <form class="br-section-wrapper" method="post"   action="{{ URL::to('/category/sub/store') }}">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="row">

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">Select Parent Category:
                            <span class="tx-danger">*</span></label>
                            <select class="js-example-basic-multiple form-control" required name="category_id">
                                <option value="" disabled selected>Select Parent Category</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">Sub Category Name:
                            <span class="tx-danger">*</span></label>
                        <input
                            class="form-control"
                            type="text"
                            name="name"
                            required="required"
                            placeholder="Enter Sub Category Name">
                    </div>
                </div>


            </div>

            <!-- row -->
            <div class="form-layout-footer mg-t-30">
                <button class="btn btn-info" type="submit">Submit</button>
            </div>
            <!-- form-layout-footer -->
        </form>
    </div>



    <div class="br-pagetitle">
      <div>
        <h4>Sub Category List</h4>
        <p class="mg-b-0">Go to action for editing</p>
      </div>
    </div><!-- d-flex -->

    <div class="br-pagebody">
      <div class="br-section-wrapper">
        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>#</th>
              <th>Sub Category Name</th>
              <th>Parent Category Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            @php
                $count = 1;
            @endphp
            @foreach ($sub_categories as $item)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                         {{ $item->category->name }}
                    </td>
                    <td>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-top:2px !important; padding-bottom:2px !important;">
                        Action</button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="{{ URL::to('/admin/property/edit').'/'.$item->id }}">Edit</a>
                        </div>
                    </div>
                    </td>
                </tr>
            @endforeach

          </tbody>
        </table>
      </div>
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
    </body>

</html>
