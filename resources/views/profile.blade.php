@extends('layouts.app')

@section('content')
    <ion-content>
        @include('layouts.tab')
    </ion-content>
@endsection

@push('customcss')
    <style>
        /* This style is for demonstration purposes only. */
        /* It's not required for the tabs to function. */
        .example-content {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }
    </style>
@endpush
