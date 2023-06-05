<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="robots" content="index, follow">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">
        <meta property="og:site_name" content="ralph cibis">
        <meta property="og:url" content="{{ url()->current() }}">

        <title>{{$title}}</title>

        <meta name="description" content="{{$description}}">
        <meta property="og:title" content="{{$title}}">
        <meta property="og:description" content="{{$description}}">

        @vite('resources/js/app.js')
    </head>
    <body class="antialiased bg-zinc-800">
