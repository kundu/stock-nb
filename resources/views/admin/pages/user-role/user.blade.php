<!DOCTYPE html>
<html lang="en">


    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
<link rel="icon" href="{{ asset('/images/fav.png') }}" type="image/png">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Stock || User</title>

        <!-- vendor css -->



        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">

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
            {{-- <div class="br-pagetitle">
                <div>
                    <h4>Dashboard</h4>
                </div>
            </div> --}}

            <div class="br-pagetitle">
                <div>
                    <h4>Staff User Create</h4>
                    <p class="mg-b-0">Create and edit user</p>
                    @if(Session::has('message'))
                        <p class="alert mg-b-0 {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                </div>
            </div>




            <div class="br-pagebody">
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-secondary btn-xs pull-right" type="button" data-toggle="modal" data-target=".bs-example-modal-lg">Add New User</button>
                    </div>
                </div>
                <div class="br-section-wrapper">
                  <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Role</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>


                      @foreach ($users as $item)
                      @if (isset($item->roles[0]->name) && $item->roles[0]->name == "Owner")

                      @else
                        <tr>
                            <td>{{ $item->name ?? ''}}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->userDetail->phone ?? '' }}</td>
                            <td>{{ $item->userDetail->address1 ?? ''}}</td>
                            <td>{{ $item->roles[0]->name ?? '' }}</td>
                            <td>
                            <a href="#"  onclick="editClick('{{ $item->id }}')" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg_edit">Edit</a>
                            <a href="{{ URL::to('/admin/user-role/user/delete').'/'.$item->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>

                        </tr>
                      @endif

                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>




            <!-- br-pagebody -->


            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Create New User</h4>
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="x_content">
                                <br>
                                <form class="" action="{{ url::to('/admin/user-role/user/store') }}" method="post">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                    <div class="form-group row">
                                      <div class="col-6">
                                        <label class="col-12">Name<span class="required">*</span></label>
                                        <div class="col-12">
                                            <input class="form-control" name="name" required="required">
                                        </div>
                                      </div>
                                      <div class="col-6">
                                        <label class="col-12">Email<span class="required">*</span></label>
                                        <div class="col-12">
                                            <input class="form-control" type="email" name="email" required="required">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <div class="col-6">
                                        <label class="col-12">Address<span class="required">*</span></label>
                                        <div class="col-12">
                                            <input class="form-control" name="address1" required="required">
                                        </div>
                                      </div>
                                      <div class="col-6">
                                        <label class="col-12">Address Two<span class="required">*</span></label>
                                        <div class="col-12">
                                            <input class="form-control" name="address2">
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <div class="col-6">
                                        <label class="col-12">City<span class="required">*</span></label>
                                        <div class="col-12">
                                            <input class="form-control" type="text" name="city">
                                        </div>
                                      </div>
                                      <div class="col-6">
                                        <label class="col-12">Phone<span class="required">*</span></label>
                                        <div class="col-12">
                                            <input class="form-control" type="number" name="phone" required="required">
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <div class="col-6">
                                        <label class="col-12">Country<span class="required">*</span></label>
                                        <div class="col-12">
                                            <select class="form-control" name="country_id" required>
                                                <option value="" selected disabled>Select Country</option>
                                                @foreach ($countries as $item)
                                                    <option value={{ $item->id }}>{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                      </div>
                                      <div class="col-6">
                                        <label class="col-12">Password<span class="required">*</span></label>
                                        <div class="col-12">
                                            <input class="form-control" type="password" name="password" required="required">
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label class="col-12">User Role<span class="required">*</span></label>
                                            <select class="form-control col-12" name="role_id" required style="width: 92% !important; margin-left: 4% !important;">
                                                <option value="" disabled selected>Select Role</option>
                                                @foreach ($roles as $item)
                                                    <option value={{ $item->id }}>{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                      <div class="col-6">
                                        <label class="col-12"><span class="required"></span></label>
                                        <div class="col-12">
                                        </div>
                                      </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-8 offset-md-4 mt-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="reset" class="btn btn-success">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="modal fade bs-example-modal-lg_edit" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">User Edit</h4>
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="x_content">
                                <br>
                                <form class="" action="{{ url::to('/admin/user-role/user/update') }}" method="post">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                                    <div id="edit-panel"></div>

                                    <div class="form-group">
                                        <div class="col-md-8 offset-md-4 mt-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="reset" class="btn btn-success">Reset</button>
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
        <!-- br-mainpanel -->
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
        </script>

        <script>
            function editClick($id){
                url = "{{ URL::to('/admin/user-role/user/ajaxGetUserEdit') }}"+"/"+$id;
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("edit-panel").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", url, true);
                xmlhttp.send();
            }
        </script>
    </body>

</html>
