@extends('layouts.footer')

@if (Route::has('login'))
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-4">
        <div class="container-fluid">
            <a class="navbar-brand">SIGAC <span class="navbar-text">
                    Sistema de Gerenciamento de Atividades Complementares
                </span></a>

            <form role="" class="m-0">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-info ">
                        Entrar
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-info ms-1">
                            Cadastrar
                        </a>
                    @endif
                @endauth
            </form>
        </div>
    </nav>
    <main class="d-flex ">
        <div class="w-50">
            <img src="{{ asset('images/welcomePhoto.jpg') }}" alt="" class="w-100">
        </div>
        <div class="w-50 d-flex alignn-content-center flex-column text-center align-items-center gap-4">
            <h1 class="text-center">
                SIGAC
            </h1>
            <p class="fs-1 text-secondary">Sistema de Gerenciamento de Atividades Complementares</p>

            <form role="" class="m-0 d-flex flex-column w-25 gap-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-lg">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg">
                        Entrar
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-light ms-1 btn-lg">
                            Cadastrar
                        </a>
                    @endif
                @endauth
            </form>
        </div>
    </main>
@endif
