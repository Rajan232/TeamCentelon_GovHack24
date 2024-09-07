<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    @vite(['resources/css/app.css'])
    @stack('styles')

        <!-- apexcharts -->
        <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
      integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
      crossorigin="anonymous"
    />

    <!-- jsvectormap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
      integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
      crossorigin="anonymous"
    />
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                @permission('dashboard.read')
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{ route('admin.dashboard.index') }}" class="nav-link">{{ __('Dashboard') }}</a>
                    </li>
                @endpermission
            </ul>
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="javascript:void(0);" class="brand-link">
                {{-- <span class="brand-image">
                    {{ __('Foo') }}
                </span> --}}
                <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
            </a>

            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        @permission('dashboard.read')
                            <li class="nav-item">
                                <a href="{{ route('admin.dashboard.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>{{ __('Dashboard') }}</p>
                                </a>
                            </li>
                        @endpermission
                        @permission('roles.read')
                            <li class="nav-item">
                                <a href="{{ route('admin.roles.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-shield-alt"></i>
                                    <p>{{ __('Roles') }}</p>
                                </a>
                            </li>
                        @endpermission
                        @permission('permissions.read')
                            <li class="nav-item">
                                <a href="{{ route('admin.permissions.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-user-shield"></i>
                                    <p>{{ __('Permissions') }}</p>
                                </a>
                            </li>
                        @endpermission
                        @permission('users.read')
                            <li class="nav-item">
                                <a href="{{ route('admin.users.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>{{ __('Users') }}</p>
                                </a>
                            </li>
                        @endpermission
                        @permission('profile.read')
                            <li class="nav-item">
                                <a href="{{ route('profile.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>{{ __('My Profile') }}</p>
                                </a>
                            </li>
                        @endpermission
                        <li class="nav-item">
                            <a href="javascript:void(0);" id="logout-button" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>{{ __('Logout') }}</p>
                            </a>
                            <form id="logout-form" class="d-none" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    @yield('main')
                </div>
            </div>
        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; 2024 <a
                    href="{{ route('admin.dashboard.index') }}">{{ config('app.name') }}</a>.</strong>
            <span>{{ __('All rights reserved.') }}</span>
        </footer>
    </div>

    <script>
        window.jQuery = null;
        window.$ = null;
    </script>

    @vite(['resources/js/app.js'])
    @stack('scripts')

    <script src='dist/js/adminlte.js'></script>

    <script
      src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
      integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ="
      crossorigin="anonymous"></script>

    <!-- sortablejs -->
    <script is:inline>
      const connectedSortables =
        document.querySelectorAll(".connectedSortable");
      connectedSortables.forEach((connectedSortable) => {
        let sortable = new Sortable(connectedSortable, {
          group: "shared",
          handle: ".card-header",
        });
      });

      const cardHeaders = document.querySelectorAll(
        ".connectedSortable .card-header",
      );
      cardHeaders.forEach((cardHeader) => {
        cardHeader.style.cursor = "move";
      });
    </script>

    <!-- apexcharts -->
    <script
      src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
      integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8="
      crossorigin="anonymous"></script>

    <!-- ChartJS -->
    <script is:inline>
      // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
      // IT'S ALL JUST JUNK FOR DEMO
      // ++++++++++++++++++++++++++++++++++++++++++

      const sales_chart_options = {
        series: [
          {
            name: "Digital Goods",
            data: [28, 48, 40, 19, 86, 27, 90],
          },
          {
            name: "Electronics",
            data: [65, 59, 80, 81, 56, 55, 40],
          },
        ],
        chart: {
          height: 300,
          type: "area",
          toolbar: {
            show: false,
          },
        },
        legend: {
          show: false,
        },
        colors: ["#0d6efd", "#20c997"],
        dataLabels: {
          enabled: false,
        },
        stroke: {
          curve: "smooth",
        },
        xaxis: {
          type: "datetime",
          categories: [
            "2023-01-01",
            "2023-02-01",
            "2023-03-01",
            "2023-04-01",
            "2023-05-01",
            "2023-06-01",
            "2023-07-01",
          ],
        },
        tooltip: {
          x: {
            format: "MMMM yyyy",
          },
        },
      };

      const sales_chart = new ApexCharts(
        document.querySelector("#revenue-chart"),
        sales_chart_options,
      );
      sales_chart.render();
    </script>

    <!-- jsvectormap -->
    <script
      src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"
      integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y="
      crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"
      integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY="
      crossorigin="anonymous"></script>

    <!-- jsvectormap -->
    <script is:inline>
      const visitorsData = {
        US: 398, // USA
        SA: 400, // Saudi Arabia
        CA: 1000, // Canada
        DE: 500, // Germany
        FR: 760, // France
        CN: 300, // China
        AU: 700, // Australia
        BR: 600, // Brazil
        IN: 800, // India
        GB: 320, // Great Britain
        RU: 3000, // Russia
      };

      // World map by jsVectorMap
      const map = new jsVectorMap({
        selector: "#world-map",
        map: "world",
      });

      // Sparkline charts
      const option_sparkline1 = {
        series: [
          {
            data: [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021],
          },
        ],
        chart: {
          type: "area",
          height: 50,
          sparkline: {
            enabled: true,
          },
        },
        stroke: {
          curve: "straight",
        },
        fill: {
          opacity: 0.3,
        },
        yaxis: {
          min: 0,
        },
        colors: ["#DCE6EC"],
      };

      const sparkline1 = new ApexCharts(
        document.querySelector("#sparkline-1"),
        option_sparkline1,
      );
      sparkline1.render();

      const option_sparkline2 = {
        series: [
          {
            data: [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921],
          },
        ],
        chart: {
          type: "area",
          height: 50,
          sparkline: {
            enabled: true,
          },
        },
        stroke: {
          curve: "straight",
        },
        fill: {
          opacity: 0.3,
        },
        yaxis: {
          min: 0,
        },
        colors: ["#DCE6EC"],
      };

      const sparkline2 = new ApexCharts(
        document.querySelector("#sparkline-2"),
        option_sparkline2,
      );
      sparkline2.render();

      const option_sparkline3 = {
        series: [
          {
            data: [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21],
          },
        ],
        chart: {
          type: "area",
          height: 50,
          sparkline: {
            enabled: true,
          },
        },
        stroke: {
          curve: "straight",
        },
        fill: {
          opacity: 0.3,
        },
        yaxis: {
          min: 0,
        },
        colors: ["#DCE6EC"],
      };

      const sparkline3 = new ApexCharts(
        document.querySelector("#sparkline-3"),
        option_sparkline3,
      );
      sparkline3.render();
    </script>

</body>

</html>
