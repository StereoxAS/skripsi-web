@extends('skeletonmenu')
@section('title', 'Create Page')
    
@section('section_menu_title')
@parent
<h1 class="h2">Create Post</h1>
@endsection

@section('section_content')
    {!! Form::open(['action' => 'WebController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title') !!}    
        {!! Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) !!}
    </div>
    <div class="form-group" id='ckeditor'>
        {!! Form::label('description', 'Description') !!}    
        {!! Form::textarea('description', '', ['id' => 'editor','class' => 'form-control', 'placeholder' => 'Body']) !!}
    </div>

    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection