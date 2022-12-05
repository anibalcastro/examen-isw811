@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @auth
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            EXAMEN FINAL ISW811 - {{ Auth::user()->name }}
                            <hr>
                            <div>
                                <div>
                                    Anibal Castro Ponce - 208110305
                                </div>

                                <div>
                                    <a class="btn btn-dark" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            </div>
                    </div>
                @else
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            TIENES QUE <a href="/register">REGISTRARTE</a> o <a href="/login">INICIAR SESION</a>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </div>
@endsection
