@extends('skeletonmenu')

@section('title', $post->title)
    
@section('section_menu_title')
    @parent
    <h1 class="h2">{{$post->title}}</h1>
@endsection

@section('section_header_menu')
    <!-- Edit Button only shown on logged account -->
    @if (!Auth::guest())
        <a class="btn btn-sm btn-outline-secondary" href="/page/{{$post->id}}/edit" role="button">Edit Page</a>
    @endif
@endsection

@section('section_content')
<div class="col">
    
    <!-- Short Desc -->
    <div>
        @if ($post->exists())
            <p>{!!$post->body!!}</p>
        @else
        <p>Dekripsi tidak ada.</p>
        @endif
    </div>
    
    <!-- Navigator -->
    <div class="row">
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <span>Content [<label class="text-primary" type="button" data-toggle="collapse" data-target="#collapseOne">hide</label>]</span>
                </div>
                <div class="collapse show" id="collapseOne">
                    <ol>
                        <li><a href="#description">Deskripsi</a></li>
                        <li><a href="#table">Tabel</a></li>
                        <li><a href="#reference">Referensi</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Long Desc -->

    <div id="description" data-target="description">
        <h4>Deskripsi</h4>
        <hr>
        @if ($post->exists())
            <p>{!! $post->body !!}</p>
        @else
        <p>Dekripsi tidak ada.</p>
        @endif
    </div>

    <!-- Table -->
    
    <div id="table" data-target="table">
        <h4>Tabel</h4>
        <hr>
    </div>

    <!-- Reference -->

    <div id="reference" data-target="reference">
        <h4>Referensi</h4>
        <hr>
    </div>
    <!-- TODO: Create delete button only for creator of that page [DONE] :: Auth user use database relation declared in HomeController@index -->
        <!-- Old Method -->
        @auth
            @if (Auth::user()->id == $post->user_id)
                {!! Form::open(['action' => ['WebController@destroy', $post->id], 'method' => 'DELETE', 'class' => 'float-right']) !!}
                    {!! Form::submit('Delete Page', ['class' => 'btn btn-sm btn-outline-danger']) !!}
                {!! Form::close() !!}
            @endif
        @endauth
</div>
@endsection