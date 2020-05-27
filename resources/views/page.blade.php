@extends('skeletonmenu')

@section('title', $post->title)
    
@section('section_menu_title')
    @parent
    <h1 class="h2">{{$post->title}}</h1>
@endsection

@section('section_content')
    
@endsection