@extends('layout')

@section('title', 'Next Generation CSS')
@section('body_class', 'join')

@section('partials.section')

    <h1>Hello World</h1>

    <ul>
        <li>thing1</li>
        <li>thing2</li>
    </ul>
@endsection

@section('partials.media')
    @include('partials.media')
@endsection