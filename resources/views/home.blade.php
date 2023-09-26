{{-- indico il layout che utilizzo --}}

@extends('layouts.public')


{{-- indico cosa inserire al posto dello yield presente nel layout  --}}

@section('content')
    @include('partials.hero')
    @include('partials.cardList')
    @include('partials.banner')
@endsection
