<?php
/*
 * Theme Name: Gentelella
 * Author: Colorlib (Packaged by PaladinDigital)
 */
$theme = 'themes::paladindigital.laravel-theme-gentelella';
if (!isset($title)) {
	$title = config('app.name');
}
?><!DOCTYPE html>
<html>
<head>
@yield('head')
@include($theme . '._meta')
@yield('styles')
@include($theme . '._styles')
</head>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"></i> <span>{{ $title or 'Laravel' }}</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ $user->name or 'Guest' }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            @include($theme . '._sidebar')
          </div>
        </div>

        @include($theme . '._topnav')

        <!-- page content -->
        <div class="right_col" role="main">
            @yield('content')
        </div>
        <!-- /page content -->

        @include($theme . '._footer')
      </div>
    </div>
<aside>
@yield('sidebar')
@yield('widgets')
</aside>
@include($theme . '._scripts')
@yield('scripts')
</body>
</html>
