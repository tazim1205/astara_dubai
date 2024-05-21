<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Favicon -->
    @php
    $favicon = public_path().'/Backend/settings/'.$settings->favicon;
    @endphp
    @if(file_exists($favicon))
    <link rel="shortcut icon" href="{{asset('Backend/settings')}}/{{$settings->favicon}}" />
    @endif

    <!-- Title -->    
    <title>
        @if(config('app.locale') == 'en')
        {{$settings->title_en ?: $settings->title_bn}}
        @else
        {{$settings->title_bn ?: $settings->title_en}}
        @endif
    </title>

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('') }}frontend/assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

</head>