@extends('skeletonmenu')

<head>
    <!-- DropZone asset -->
    <link rel="stylesheet" type="text/css" href="{{asset('dropzone-5.7.0/dist/min/dropzone.min.css')}}">
    <script src="{{asset('dropzone-5.7.0/dist/min/dropzone.min.js')}}" type="text/javascript"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

@section('title', 'Upload')

@section('section_menu_title')
@parent
<h1 class="h2">Upload</h1>
@endsection

@section('section_content')
<div class="container">
    <p>Choose or drag file(s) to upload</p>
    <div class="content">
        <!-- Create a dropZone and route to uploadFile (/upload/fileupload) -->
        <form action="{{route('uploadFile')}}" method="POST" class="dropzone"></form>
    </div>
</div>
<script>
    var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
    Dropzone.autoDiscover = false;
    var dropZone = new Dropzone(".dropzone",
    { 
        maxFilesize: 8,  // max 8mb, also set max_filesize in php.ini
        acceptedFiles: ".csv, .txt, .doc, .docx, .jpg, .jpeg, .png, .pdf",
    });
    /* Cek on file added
    dropZone.on("addedfile", function () {
        alert("cek");
        console.log("Check");
    })
    */
    dropZone.on("success", function() {
        alert("Success");
    });
    dropZone.on("sending", function(file, xhr, formData) 
    {
        formData.append("_token", CSRF_TOKEN);
    }); 
</script>
@endsection