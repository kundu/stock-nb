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
            <h4>Edit Product</h4>
        </div>
    </div>
    <!-- d-flex -->

    <div class="br-pagebody">
        <form class="br-section-wrapper" method="post"   action="{{ URL::to('/product/update') }}">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <div id="forms-id">
                <div class="row">

                    @foreach ($product->productValue as $item)
                        @if ($formFieldArray[$item->form_field_id]->type == "text" || $formFieldArray[$item->form_field_id]->type == "number" || $formFieldArray[$item->form_field_id]->type == "date")
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">{{ $formFieldArray[$item->form_field_id]->name }}:
                                        <span class="tx-danger">*</span></label>
                                    <input
                                        class="form-control"
                                        type="{{ $formFieldArray[$item->form_field_id]->type }}"
                                        name="fields[{{ $item->id }}]"
                                        value="{{ $item->value }}"
                                        required="required"
                                        placeholder="Enter {{ $formFieldArray[$item->form_field_id]->name }}">
                                </div>
                            </div>
                        @endif

                        @if ($formFieldArray[$item->form_field_id]->type == "textarea")
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">{{ $formFieldArray[$item->form_field_id]->name }}:
                                        <span class="tx-danger">*</span></label>
                                        <textarea class="form-control" name="fields[{{ $item->id }}]" placeholder="Enter {{ $formFieldArray[$item->form_field_id]->name }}" cols="10" rows="10">{{ $item->value }}</textarea>
                                </div>
                            </div>
                        @endif

                        @if ($formFieldArray[$item->form_field_id]->type == "select")
                            @php
                                $value = json_decode($formFieldArray[$item->form_field_id]->value);
                                $value = explode(',', $value);
                            @endphp
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">{{ $formFieldArray[$item->form_field_id]->name }}:
                                        <span class="tx-danger">*</span></label>
                                        <select class="js-example-basic-multiple form-control" required name="fields[{{ $item->id }}]">
                                            @foreach ($value as $item2)
                                                @if ($item2 == $formFieldArray[$item->form_field_id]->value)
                                                    <option selected value="{{ $item2 }}">{{ $item2 }}</option>
                                                @else
                                                    <option value="{{ $item2 }}">{{ $item2 }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

            </div>


            <!-- row -->
            <div class="form-layout-footer mg-t-30">
                <button class="btn btn-info" type="submit" id="submit-id">Update</button>
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
  <script src="{{asset('template-res/lib/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('template-res/lib/datatables.net-dt/js/dataTables.dataTables.min.js')}}"></script>
  <script src="{{asset('template-res/lib/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('template-res/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js')}}"></script>


  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });

  </script>



    </body>

</html>
