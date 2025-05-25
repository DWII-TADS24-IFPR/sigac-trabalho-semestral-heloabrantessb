@extends('layouts.footer')

@if (Route::has('login'))
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">SIGAC <span class="navbar-text">
                    Sistema de Gerenciamento de Atividades Complementares
                </span></a>

            <form class="flex" role="search">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">
                        Entrar
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary">
                            Cadastrar
                        </a>
                    @endif
                @endauth
            </form>
        </div>
    </nav>
@endif
