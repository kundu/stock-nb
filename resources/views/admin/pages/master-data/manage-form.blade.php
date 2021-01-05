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
            <h4>Create Form</h4>
        </div>
    </div>
    <!-- d-flex -->

    <div class="br-pagebody">
        <form class="br-section-wrapper" method="post"   action="{{ URL::to('/master-data/form/store') }}">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">Form Name:
                            <span class="tx-danger">*</span></label>
                        <input
                            class="form-control"
                            type="text"
                            name="name"
                            required="required"
                            placeholder="Enter Category Name">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">Type:
                            <span class="tx-danger">*</span></label>
                        <select class="form-control" name="type" required onchange="typeChange(this)">
                            <option value="" disabled selected>Select Type</option>
                            <option value="text">Text</option>
                            <option value="number">Number</option>
                            <option value="date">Date</option>
                            <option value="textarea">Textarea</option>
                            <option value="select">Select</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-12" id="value-id" style="display: none">
                    <div class="form-group">
                        <label class="form-control-label">Select Box Value (Separate by comma):
                            <span class="tx-danger">*</span></label>
                            <textarea class="form-control" name="value" id="t-id" placeholder="separate by comma. ex: option1, option2, option3" cols="10" rows="10"></textarea>
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
        <h4>Form Field List</h4>
      </div>
    </div>

    <div class="br-pagebody">
      <div class="br-section-wrapper">
        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Type</th>
              <th>Value</th>
            </tr>
          </thead>
          <tbody>

            @php
                $count = 1;
            @endphp
            @foreach ($formFields as $item)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->type }}</td>
                    <td>{{ json_decode($item->value) ?? '' }}</td>
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
  <script src="{{asset('template-res/lib/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('template-res/lib/datatables.net-dt/js/dataTables.dataTables.min.js')}}"></script>
  <script src="{{asset('template-res/lib/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('template-res/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js')}}"></script>


  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });


    function typeChange(elem){
        if(elem.value == "select"){
            $("#value-id").slideDown();
            $("#t-id").attr('required', '');
        }
        else{
            $("#value-id").fadeOut();
            $("#t-id").removeAttr('required')
        }
    }
  </script>
    </body>

</html>
