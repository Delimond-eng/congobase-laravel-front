
@extends('layouts.app')

@section('content')

    {{--  slider section  --}}
    @include('sections.slider')
    {{--  end section slider  --}}
        {{--  section about  --}}
    @include('sections.about')
    {{--  end section about  --}}

    {{--  promo section  --}}
    @include('sections.promo')
    {{--  end section promo  --}}

    {{--  section event  --}}
    @include('sections.actions')
    {{--  end section  --}}

    {{--  section campaigns  --}}
    @include('sections.campaigns')
    {{--  end section  campaigns --}}

    {{--  section faqs  --}}
    @include('sections.faq')
    {{--  end section  --}}

    {{--  section counter  --}}
    @include('sections.counter')
    {{--  end section  --}}


    {{--  section events--}}
    @include('sections.events')
    {{--  end section  --}}

    {{--  section testimonial  --}}
    @include('sections.testimonial')
    {{--  end testimonial section  --}}

@endsection

