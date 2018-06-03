@extends('web.layouts.default')

@section('head')
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
@endsection

@section('scripts')

@endsection

@section('content')
    <div class="flex-center position-ref full-height">

        @include('web.includes.menu')

        <div class="content">
            <div class="title m-b-md">
                Laravel {{ user_lang() }}
            </div>


            <h3>Cambio de idioma</h3>
            <div class="links">
                <a class="@if(user_lang() == 'en') active @endif" href="{{ get_lang_route('en') }}">{{ __('web.english') }}</a>
                <a class="@if(user_lang() == 'es') active @endif" href="{{ get_lang_route('es') }}">{{ __('web.spanish') }}</a>
            </div>

            <hr>

            <h1>Menu 01</h1>

            <br>
            <div class="elevation-z1">
                elevation-z1
            </div>
            <br>
            <div class="elevation-z4">
                elevation-z4
            </div>
            <br>
            <div class="elevation-z8">
                elevation-z8
            </div>
            <br>
            <div class="elevation-example">
                elevation-z4 -> elevation-z8
            </div>

        </div>
    </div>
@endsection