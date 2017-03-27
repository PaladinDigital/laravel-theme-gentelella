<?php
/*
 * Theme Name: Gentelella
 * Author: Colorlib (Packaged by PaladinDigital)
 */
$theme = 'themes::paladindigital.laravel-thmee-gentelella';
?><!DOCTYPE html>
<html>
<head>
@yield('head')
    @include($theme . '._meta')
@yield('styles')
</head>
<body>
@include($theme . '._nav')
@yield('content')
<aside>
@yield('sidebar')
@yield('widgets')
</aside>
@include($theme . '._footer')
@yield('scripts')
</body>
</html>