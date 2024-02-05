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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    {{-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> --}}
    <!-- CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link id="pagestyle" href="{{ asset('css/argon-dashboard.css') }}" rel="stylesheet" />
    @stack('style')
    <style>
        /* .bg-dark{
            background-color: #111C44 !important;
        } */
        .navbar-vertical.navbar-expand-xs .navbar-collapse {
            height: auto;
        }

        main {
            min-height: 100vh;
        }

        .alert .btn-close {
            position: absolute;
            /* top: 0; */
            right: 0;
            z-index: 2;
            padding-right: 2rem;
            /* background-image: url('data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 16 16'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e') */
        }

        /* body {
            min-height: 5000px
        } */
        /* main {
            min-height: 100vh;
        }
        .dark-version .pagination{
            --bs-pagination-bg: #111C44 !important;
        }
        .dark-version p{
            color: #fff !important;
        }
        .dark-version .card .ck>*{
            color: #111C44 !important;
        }
        .dark-version .sidenav.bg-white{
            background-color: #111C44 !important;
        }
        .dark-version .card .bg-dark{
            background-color: var(--bs-gray-400) !important;
        }
        .dark-version .card .border-white{
            border-color: #111C44 !important;
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
        .dark-version #aksi a {
            color: var(--bs-dark) !important;
        }
        .dark-version #aksi a:hover {
            color: var(--bs-white) !important;
        }
        .dark-version .form-floating label{
            color: #344767 !important;
        }
        .dark-version .modal h1, .dark-version .modal label  {
            color: #111C44 !important;
        }
        .form-floating label{
            margin-left: 0.7rem;
        }

        footer {
            color: var(--bs-dark);
        }

        footer a {
            transition: 0.5s;
            color: var(--bs-warning)
        }

        a:hover {
            color: var(--bs-dark);
        }
        

        .table thead th{
            padding: 0.5rem 0.5rem;
        }
        
        button[data-bs-dismiss="alert"].btn-close{
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2;
            padding: 1.25rem 1rem;
        }

        /* media query */
        /*
        @media (max-width: 480px) {
            footer p{
                font-size: 0.8rem
            }
        
        } */
    </style>
</head>

<body class="g-sidenav-show bg-gray-100">
