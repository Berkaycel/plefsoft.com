@extends('app.layouts.master')

@section('content')
  @include('app.layouts.banner')

  @include('app.layouts.campanies')

  @include('app.layouts.services')

  @include('app.layouts.testimonials')

  @include('app.layouts.faq')

  {{-- @include('app.layouts.portfolio') --}}

  @include('app.layouts.get_started')
@endsection