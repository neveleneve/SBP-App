@extends('layouts.app')

@section('content')
    <ion-header>
        <ion-toolbar id="header">
            <ion-buttons slot="start">
                <ion-avatar id="avatar">
                    <img src="{{ asset('assets/img/user-default.jpg') }}">
                </ion-avatar>
            </ion-buttons>
            <ion-buttons slot="end">
                <ion-button>
                    <ion-icon slot="icon-only" name="notifications-outline"></ion-icon>
                </ion-button>
                <ion-button>
                    <ion-icon slot="icon-only" name="heart-outline"></ion-icon>
                </ion-button>
            </ion-buttons>
        </ion-toolbar>
    </ion-header>
    <ion-content>
        <ion-searchbar placeholder="Pencarian..."></ion-searchbar>

        <ion-label>Event</ion-label>

        @include('layouts.tab')
    </ion-content>
@endsection
