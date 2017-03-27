<?php
/*
 * Theme Name: Gentelella
 * Author: Colorlib (Packaged by PaladinDigital)
 */
$theme = 'themes::paladindigital.laravel-theme-gentelella';
?><!DOCTYPE html>
<html>
<head>
@yield('head')
@include($theme . '._meta')
@yield('styles')
@include($theme . '._styles')
</head>
<body>
@include($theme . '._nav')
@yield('content')
<aside>
@yield('sidebar')
@yield('widgets')
</aside>
@include($theme . '._footer')
@include($theme . '._scripts')
@yield('scripts')
</body>
</html>
