@extends('layouts.frontend')
@push('styles')
    <style>
        .avatar {
            vertical-align: middle;
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .readonlyUrl {
            border: none;
            outline: none;
            background: #ccc;
            border-radius: 4px;
            padding: 4px 8px;
        }
        .code a {
            padding: 4px 8px;
            color: #333333;
        }
        .code a:hover {
            text-decoration: none;
        }
        .code a.active {
            background: #333;
            color: #fff;
        }
        .param-desc{
            font-style:italic;
            color:#444;
        }
    </style>
@endpush
@section('content')
    @include('frontend._start')
    @include('frontend._authentication')
    @include('frontend._custom_plan')
    @include('frontend._meeting')
    @include('frontend._SSO')
    @include('frontend._embedded_whiteboard')
@endsection
