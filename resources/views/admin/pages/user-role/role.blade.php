<!DOCTYPE html>
<html lang="en">


    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
<link rel="icon" href="{{ asset('/images/fav.png') }}" type="image/png">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Stock Admin || Role</title>

        <!-- vendor css -->
        <link href="{{asset('template-res/lib/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
        <link href="{{asset('template-res/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">


        <!-- Bracket CSS -->
        <link rel="stylesheet" href="{{asset('template-res/css/bracket.css')}}">
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
    <div class="br-pagetitle">
      <div>
        <h4>Role</h4>
        <p class="mg-b-0">All roles</p>

        @if(Session::has('message'))
            <p class="alert mg-b-0 {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
      </div>
    </div><!-- d-flex -->

    <div class="br-pagebody">
        <div class="row">
          <div class="col-12">
            <button class="btn btn-secondary btn-xs pull-right" type="button" data-toggle="modal" data-target=".bs-example-modal-lg">Add New Role</button>
          </div>
        </div>
        <div class="br-section-wrapper">
          <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Role</th>
                <th>Guard</th>
                {{-- <th>Action</th> --}}
              </tr>
            </thead>
            <tbody>

                @foreach ($role as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->guard_name }}</td>
                        {{-- <td>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-top:2px !important; padding-bottom:2px !important;">
                            Action</button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item"  data-toggle="modal" data-target=".bs-example-modal-lg_edit">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                        </td> --}}
                    </tr>
                @endforeach

            </tbody>
          </table>
        </div>
      </div>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Create New Role</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="x_content">
                        <br />
                        <form class="" action="{{ url::to('/admin/user-role/role/create') }}" method="post">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                            <div class="form-group row">
                                <div class="col-12">
                                    <label class="col-12">Role Name<span class="required">*</span></label>
                                    <div class="col-12">
                                        <input class="form-control" placeholder="Role Name" name="name" required="required" />
                                    </div>
                                </div>
                            </div>



                            <table class="table table-striped mb-0 mt-3" id="dataTable-1">
                                <thead>
                                  <tr>
                                    <th>Module </th>
                                    <th>Permissions </th>
                                  </tr>
                                </thead>
                                <tbody>

                                    <?php $count = 1; ?>
                                    @foreach ($permissions as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <div class="row ">
                                                <div class="col-md-3 custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="{{ 'permission'.$count }}" name="permissions[]" value="{{ $item->id }}" type="checkbox" required>
                                                    <label for="{{ 'permission'.$count++ }}" class="custom-control-label">Add</label><br>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                              </table>


                            <div class="form-group row">
                                <div class="col-12">
                                    <label class="col-12"><span class="required"></span></label>
                                    <div class="col-12">
                                        <input type="submit" class="form-control" value="Create" />
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-example-modal-lg_edit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Role Edit</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="x_content">
                        <br />
                            <form class="" action="" method="post" novalidate>
                            <div class="form-group row">
                                <div class="col-12">
                                <label class="col-12">Name<span class="required">*</span></label>
                                <div class="col-12">
                                    <input class="form-control" placeholder="Name" required="required" />
                                </div>
                                </div>
                            </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layout.footer')
  </div>
  <!-- ########## END: MAIN PANEL ########## -->

  <script src="{{asset('template-res/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('template-res/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('template-res/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('template-res/js/bracket.js')}}"></script>
  <script src="{{asset('template-res/js/dashboard.js')}}"></script>
  <script src="{{asset('template-res/js/my_js.js')}}"></script>
  <script src="{{asset('template-res/lib/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('template-res/lib/datatables.net-dt/js/dataTables.dataTables.min.js')}}"></script>
  <script src="{{asset('template-res/lib/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('template-res/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js')}}"></script>

  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });


    $(function(){
        var requiredCheckboxes = $('.custom-checkbox :checkbox[required]');
        requiredCheckboxes.change(function(){
            if(requiredCheckboxes.is(':checked')) {
                requiredCheckboxes.removeAttr('required');
            } else {
                requiredCheckboxes.attr('required', 'required');
            }
        });
    });
  </script>
    </body>

</html>
