@extends('skeletonmenu')

@section('title', 'Searc')

@section('section_menu_title')
@parent
    <h1 class="h2">Search</h1>
@endsection

@section('section_content')
    <p>TODO: Create ajax search</p>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
@endsection