<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('temp/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('temp/assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('temp/assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('temp/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('temp/assets/vendor/charts/chartist-bundle/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('temp/assets/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('temp/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('temp/assets/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('temp/assets/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">
    <title>Bitly</title>
    <style>
        .notify{
            z-index: 10000!important
        }
            </style>
</head>

<body>
    @notifyCss
    @include('notify::components.notify')

    @notifyJs
    <div class="dashboard-main-wrapper">
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="#">Bitly</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>

                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <a class="dropdown-item" href="{{ route('logout') }}"><i class="fas fa-power-off mr-2"></i>Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Bitly Dashbord </h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ecommerce-widget">
                        <div class="row">
                            <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Url List</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            @yield('content')
                                            <div class="container mb-3">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addUrlModal">
                                                          <i class="fas fa-plus"></i> Create Url
                                                        </a>
                                                      </div>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 py-2">
                                                        {{ $shortLinks->links() }}
                                                        </a>
                                                      </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="addUrlModal">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                      <h5 class="modal-title">Create Url</h5>
                                      <button class="close" data-dismiss="modal">
                                        <span>&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form action="{{ route('admin.link.store') }}" method="POST">
                                          @csrf

                                        <div class="form-group">
                                          <label for="title">Long Url</label>
                                          <input type="text" name="link" class="form-control">
                                        </div>
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-primary"><i class="fas fa-save pr-2"></i>Save</button>
                                    </div>
                                </form>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- jquery 3.3.1 -->
    <script src="{{ asset('temp/assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('temp/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('temp/assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('temp/assets/libs/js/main-js.js') }}"></script>
    <!-- chart chartist js -->
    <script src="{{ asset('temp/assets/vendor/charts/chartist-bundle/chartist.min.js') }}"></script>
    <!-- sparkline js -->
    <script src="{{ asset('temp/assets/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
    <!-- morris js -->
    <script src="{{ asset('temp/assets/vendor/charts/morris-bundle/raphael.min.js') }}"></script>
    <script src="{{ asset('temp/assets/vendor/charts/morris-bundle/morris.js') }}"></script>
    <!-- chart c3 js -->
    <script src="{{ asset('temp/assets/vendor/charts/c3charts/c3.min.js') }}"></script>
    <script src="{{ asset('temp/assets/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script>
    <script src="{{ asset('temp/assets/vendor/charts/c3charts/C3chartjs.js') }}"></script>
    <script src="{{ asset('temp/assets/libs/js/dashboard-ecommerce.js') }}"></script>
    {{-- <script>
          $('#EditUrlModal').on('show.bs.modal', function (event) {
             console.log('malek');
      var button = $(event.relatedTarget)
      var mylink = button.data('mylink')
      var mylinkid = button.data('mylinkid')
      var cat_id = button.data('catid')
      var modal = $(this)
      modal.find('.modal-body #title').val(mylink);
      modal.find('.modal-body #mylinkid').val(mylinkid);
      modal.find('.modal-body #cat_id').val(cat_id);
})
    </script> --}}
</body>

</html>
