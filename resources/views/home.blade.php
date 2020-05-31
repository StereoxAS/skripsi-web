@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! You will be redirected in a brief..
                </div>
                <script> setTimeout(function(){window.location="{{route('landing')}}"}, 2000); </script>
            </div>
        </div>
    </div>
</div>
@endsection
