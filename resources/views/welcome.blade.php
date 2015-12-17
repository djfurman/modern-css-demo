@extends('layout')

@section('body_class', 'join')

@section('partials.section')
    <h1>Hello World</h1>

    @foreach($testimonials as $testimony)
        @include('testimonials/testimony')
    @endforeach

    <div class="Testimonial"></div>

    <div class="Testimonial {{ $testimonial->featured ? 'Testimonial--is-featured': '' }}"></div>
@stop