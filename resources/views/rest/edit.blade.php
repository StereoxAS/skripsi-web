@extends('skeletonmenu')
@section('title', 'Edit Page')
    
@section('section_menu_title')
@parent
<h1 class="h2">Edit Post</h1>
@endsection

@section('section_content')
    {!! Form::open(['action' => ['WebController@update', $post->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title') !!}    
        {!! Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('short_desc', 'Short Desc') !!}    
        {!! Form::textarea('short_desc', $post->short_desc, ['id' => 'short_desc','class' => 'form-control', 'placeholder' => 'Body']) !!}
    </div>
    <div class="form-group" id='ckeditor'>
        {!! Form::label('description', 'Description') !!}    
        {!! Form::textarea('description', $post->body, ['id' => 'editor','class' => 'form-control', 'placeholder' => 'Body']) !!}
    </div>
    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection