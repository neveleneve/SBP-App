@extends('layouts.app')

@section('content')
    <ion-content class="ion-padding">
        <ion-refresher id="refresher" slot="fixed">
            <ion-refresher-content>
            </ion-refresher-content>
        </ion-refresher>
        <h3 style="font-weight: 700">Welcome, {{ Auth::user()->name }}!</h3>

        @include('layouts.tab')
    </ion-content>
@endsection

@push('customjs')
    <script>
        const refresher = document.getElementById('refresher');

        refresher.addEventListener('ionRefresh', () => {
            setTimeout(() => {
                refresher.complete();
            }, 2000);
        });
    </script>
@endpush
