<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>
        Argon Dashboard 2 by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('css/argon-dashboard.css') }}" rel="stylesheet" />
    <style>
        .navbar-vertical.navbar-expand-xs .navbar-collapse {
            height: auto;
        }

        /* body {
            min-height: 5000px
        } */
        main {
            min-height: 100vh;
        }
        .dark-version .sidenav.bg-white{
            background-color: #111C44 !important;
        }

        .dark-version footer {
            color: var(--bs-white);
        }

        .dark-version footer a#copyright {
            transition: 0.5s;
            color: var(--bs-warning) !important;
        }

        .dark-version footer a#copyright:hover {
            color: var(--bs-white) !important;
        }

        footer {
            color: var(--bs-dark);
        }

        footer a {
            transition: 0.5s;
            color: var(--bs-warning)
        }

        footer a:hover {
            color: var(--bs-dark);
        }
    </style>
</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="h-100 position-fixed bg-secondary position-absolute w-100"></div>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main" data-color="dark">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
                target="_blank">
                <img src="{{ asset('img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Argon Dashboard 2</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="./pages/dashboard.html">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./pages/tables.html">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Tables</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./pages/profile.html">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./pages/sign-in.html">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Sign In</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./pages/sign-up.html">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-collection text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Sign Up</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg pb-5">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
                                href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">

                    <ul class="ms-md-auto navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <div class="d-flex text-white">
                                <span class="d-sm-inline d-none pe-2">Light / Dark</span>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="dark-version"
                                        onclick="darkMode(this)">
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-xl-none px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Money</p>
                                        <h5 class="font-weight-bolder">
                                            $53,000
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+55%</span>
                                            since yesterday
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Users</p>
                                        <h5 class="font-weight-bolder">
                                            2,300
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+3%</span>
                                            since last week
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">New Clients</p>
                                        <h5 class="font-weight-bolder">
                                            +3,462
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-danger text-sm font-weight-bolder">-2%</span>
                                            since last quarter
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Sales</p>
                                        <h5 class="font-weight-bolder">
                                            $103,430
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+5%</span> than last
                                            month
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                        <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 mb-lg-0 mb-4">
                  <div class="card z-index-2">
                    <div class="card-header py-3 bg-transparent">
                      <h3 class="text-capitalize m-0">Hello World</h3>
                    </div>
                    {{-- <div class="card-body pt-3">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                              <thead>
                                <tr>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                                  <th class="text-secondary opacity-7"></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <div class="d-flex px-2 py-1">
                                      <div>
                                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                      </div>
                                      <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                        <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <p class="text-xs font-weight-bold mb-0">Manager</p>
                                    <p class="text-xs text-secondary mb-0">Organization</p>
                                  </td>
                                  <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-success">Online</span>
                                  </td>
                                  <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                  </td>
                                  <td class="align-middle">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                      Edit
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="d-flex px-2 py-1">
                                      <div>
                                        <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                                      </div>
                                      <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                        <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <p class="text-xs font-weight-bold mb-0">Programator</p>
                                    <p class="text-xs text-secondary mb-0">Developer</p>
                                  </td>
                                  <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                  </td>
                                  <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                                  </td>
                                  <td class="align-middle">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                      Edit
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="d-flex px-2 py-1">
                                      <div>
                                        <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user3">
                                      </div>
                                      <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                                        <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <p class="text-xs font-weight-bold mb-0">Executive</p>
                                    <p class="text-xs text-secondary mb-0">Projects</p>
                                  </td>
                                  <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-success">Online</span>
                                  </td>
                                  <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                                  </td>
                                  <td class="align-middle">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                      Edit
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="d-flex px-2 py-1">
                                      <div>
                                        <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user4">
                                      </div>
                                      <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Michael Levi</h6>
                                        <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <p class="text-xs font-weight-bold mb-0">Programator</p>
                                    <p class="text-xs text-secondary mb-0">Developer</p>
                                  </td>
                                  <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-success">Online</span>
                                  </td>
                                  <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                                  </td>
                                  <td class="align-middle">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                      Edit
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="d-flex px-2 py-1">
                                      <div>
                                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user5">
                                      </div>
                                      <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Richard Gran</h6>
                                        <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <p class="text-xs font-weight-bold mb-0">Manager</p>
                                    <p class="text-xs text-secondary mb-0">Executive</p>
                                  </td>
                                  <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                  </td>
                                  <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                                  </td>
                                  <td class="align-middle">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                      Edit
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="d-flex px-2 py-1">
                                      <div>
                                        <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user6">
                                      </div>
                                      <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Miriam Eric</h6>
                                        <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <p class="text-xs font-weight-bold mb-0">Programtor</p>
                                    <p class="text-xs text-secondary mb-0">Developer</p>
                                  </td>
                                  <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                  </td>
                                  <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                                  </td>
                                  <td class="align-middle">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                      Edit
                                    </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                    </div> --}}
                  </div>
                </div>
                
              </div>
            </div>
            <footer class="container-fluid position-absolute bottom-0">
                <p class="text-center">Copyright © 2021<a href="#" id="copyright" class="px-1">Adi
                        Winarno & Fitri Lestari</a>.
                </p>
            </footer>
    </main>
    <!--   Core JS Files   -->
    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
    
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('js/argon-dashboard.min.js?v=2.0.4') }}"></script>
</body>

</html>
