<?php
if (!isset($charset)) {
    $charset = 'UTF-8';
}
?>
<meta charset="{{ $charset }}">
@if (isset($title))
    <title>{{ $title }}</title>
@endif
@if (isset($description))
    <meta name="description" content="{{ $description }}">
@endif
@if (isset($keywords))
    @if(is_array($keywords))
        <meta name="keywords" content="{{ join(',', $keywords) }}">
    @else
        <meta name="keywords" content="{{ $keywords }}">
    @endif
@endif
@if (isset($viewport))
    <meta name="viewport" content="{{ $viewport }}">
@else
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@endif
@yield('meta')