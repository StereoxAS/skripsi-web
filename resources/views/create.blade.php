@extends('skeletonmenu')
@section('title', 'Create Page')
    
@section('section_menu_title')
@parent
<h1 class="h2">Create Page</h1>
@endsection

@section('section_content')
    {!! Form::open(['action' => 'WebController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title') !!}    
        {!! Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('short_desc', 'Short Desc') !!}    
        {!! Form::textarea('short_desc', '', ['id' => 'short_desc','class' => 'form-control', 'placeholder' => 'Short description', 'maxlength' => '191']) !!}
    </div>
    <!--
    @if ($parsedFile ?? '' != '')
        <div class="form-group" id='ckeditor'>
            {!! Form::label('description', 'Description') !!}    
            {!! Form::textarea('description', $parsedFile ?? '', ['id' => 'editor','class' => 'form-control', 'placeholder' => 'Body']) !!}
        </div>
    @else
        <div class="form-group" id='ckeditor'>
            {!! Form::label('description', 'Description') !!}    
            {!! Form::textarea('description', '', ['id' => 'editor','class' => 'form-control', 'placeholder' => 'Body']) !!}
        </div>
    @endif-->
    <div class="form-group">
        {{Form::file('file_upload')}}
    </div>

    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection