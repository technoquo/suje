@extends('layouts.app')
@section('content')
    @include('page.sections.hero')
    @include('page.sections.features')
    @include('page.sections.about')
    @include('page.sections.team')
{{--    @include('page.sections.services')--}}
    {{--    @include('page.sections.price')--}}
    {{--    @include('page.sections.projects')--}}
    @include('page.sections.testimonial')
    @include('page.sections.counter')
    @include('page.sections.clients')
    @include('page.sections.blog')
    @include('page.sections.contact')
    {{--    @include('page.sections.cta')--}}
@endsection