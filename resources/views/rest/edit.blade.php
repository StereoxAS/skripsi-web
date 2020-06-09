@extends('skeletonmenu')
@section('title', 'Edit Page')
    
@section('section_menu_title')
@parent
<h1 class="h2">Edit Post</h1>
@endsection

@section('section_header_menu')
    <!-- Cancel edit -->
    <a class="btn btn-sm btn-outline-secondary" href="/page/{{$post->id}}" role="button">Cancel Edit Page</a>
@endsection

@section('section_content')
    {!! Form::open(['action' => ['WebController@update', $post->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title') !!}    
        {!! Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('short_desc', 'Short Desc') !!}    
        {!! Form::textarea('short_desc', $post->short_desc, ['id' => 'short_desc','class' => 'form-control', 'placeholder' => 'Body', 'maxlength' => '191']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description') !!}    
        {!! Form::textarea('description', $post->body, ['id' => 'editor','class' => 'form-control', 'placeholder' => 'Body', 'oninput' => '"this.style.height = "";this.style.height = this.scrollHeight + "px" "']) !!}
    </div>
    <div class="form-group">
        {{Form::file('file_upload')}}
        @if ($post->file == "templateFile.pdf")
            {!! Form::label('file_upload', 'No file currently attached.') !!}  
        @else
            {!! Form::label('file_upload', 'File currently attached: ' . $post->file) !!}  
        @endif 
    </div>
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection