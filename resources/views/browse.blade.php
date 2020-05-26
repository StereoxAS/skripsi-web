@extends('skeletonmenu')
<head>

</head>
@section('title', 'Browse')

@section('section_menu_title')
@parent
    <h1 class="h2">Browse</h1>
@endsection
@section('section_header_menu')
<div class="dropdown">
    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span data-feather="calendar"></span>
        Sort by
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
    </div>
</div>

@endsection

@section('section_content')
<div class="container">
    <form action="">
        <div class="form-group">
            <input type="text" class="form-control" id="searchBrowse" placeholder="Search for document..">
        </div>
    </form>
    <p>Developed by Krishna Aji</p>
    <p>Powered by Laravel & Bootstrap</p>
</div>
@endsection