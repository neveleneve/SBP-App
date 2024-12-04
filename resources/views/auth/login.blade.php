@extends('layouts.app')

@section('content')
    <ion-header>
        <ion-toolbar>
            <ion-button fill="clear" slot="start" href="{{ route('landing') }}">
                <ion-icon name="chevron-back"></ion-icon>
            </ion-button>
            <ion-title>Login</ion-title>
        </ion-toolbar>
    </ion-header>
    <ion-content class="ion-padding">
        <ion-card>
            <ion-card-header>
                <ion-card-title>Login Form</ion-card-title>
            </ion-card-header>
            <ion-card-content>
                <!-- Form Login -->
                <form action="/login" method="POST">
                    @csrf
                    <ion-item>
                        <ion-label position="stacked">Email</ion-label>
                        <ion-input type="email" name="email" required></ion-input>
                    </ion-item>
                    <ion-item>
                        <ion-label position="stacked">Password</ion-label>
                        <ion-input type="password" name="password" required></ion-input>
                    </ion-item>
                    <ion-button expand="block" type="submit">Login</ion-button>
                </form>
            </ion-card-content>
        </ion-card>
    </ion-content>
@endsection
