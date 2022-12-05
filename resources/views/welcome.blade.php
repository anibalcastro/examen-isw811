@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @auth
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                        EXAMEN FINAL ISW811 - ANIBAL CASTRO - {{auth()->name;}}
                </div>
            </div>
            @else
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            TIENES QUE <a href="/register">REGISTRARTE</a> o <a href="/login">INICIAR SESION</a>
                        </div>
                    @endif
                </div>
            </div>
            @endauth
        </div>
    </div>
</div>
@endsection
