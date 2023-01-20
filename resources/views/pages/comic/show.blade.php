@extends('layouts.app')
{{-- @section('title-page', 'DC COMIC - show') --}}
@section('title-page')
    I migliori fumetti - {{ $elem->title }}
@endsection

@section('main-content')
    <h1 class="text-center">{{ $elem->title }}</h1>
    @if ( session('success') )
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div>
        <p>
            {{ $elem->description }}
        </p>
    </div>
@endsection
