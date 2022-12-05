@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @auth
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                        EXAMEN FINAL ISW811 - ANIBAL CASTRO - {{Auth::user()->name;}}
                        <hr>
                        Anibal Castro Ponce - 208110305
                </div>
            </div>
            @else
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    TIENES QUE <a href="/register">REGISTRARTE</a> O <a href="/login">INICIAR SESION</a>
                </div>
            </div>
            @endauth
        </div>
    </div>
</div>
@endsection
