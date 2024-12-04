@extends('layouts.app')

@section('content')
    <ion-header id="header">
        <ion-toolbar>
            <ion-title strong="true">SBP App</ion-title>
        </ion-toolbar>
    </ion-header>
    <ion-content>
        <h5 class="ion-text-center">
            Kemudahan dalam 1 Sentuhan!
        </h5>
        <ion-modal trigger="login" id="loginmodal">
            <div class="block">
                <ion-content class="ion-padding-top">
                    <form action="{{ route('login') }}" method="post" class="ion-padding-horizontal">
                        @csrf
                        <ion-input label="Email" type="text" name="email"
                            placeholder="johndoe@example.com"></ion-input>
                        {{-- <ion-item>
                        </ion-item> --}}
                        <ion-input label="Password" type="password" name="password" placeholder="********"></ion-input>
                        {{-- <ion-item>
                        </ion-item> --}}
                        <ion-button expand="block" fill="outline" color="dark"
                            strong="true" type="submit" id="btn-login">Login</ion-button>
                        <ion-loading trigger="btn-login" message="Logging In..." duration="3000"></ion-loading>
                    </form>
                </ion-content>
            </div>
        </ion-modal>
        <ion-modal trigger="register" id="registermodal">
            <ion-header>
                <ion-toolbar>
                    <ion-buttons slot="start">
                        <ion-button onclick="registerback()">
                            <ion-icon name="chevron-back" color="dark"></ion-icon>
                        </ion-button>
                    </ion-buttons>
                    <ion-title>Register</ion-title>
                </ion-toolbar>
            </ion-header>
            <ion-content class="ion-padding">
                <form action="{{ route('register') }}" method="post">
                    <ion-item>
                        <ion-input label="Name" label-placement="stacked" type="text"
                            placeholder="Your name"></ion-input>
                    </ion-item>
                    <ion-item>
                        <ion-input label="Email" label-placement="stacked" type="text"
                            placeholder="Your email"></ion-input>
                    </ion-item>
                    <ion-item>
                        <ion-input label="Password" label-placement="stacked" type="password"
                            placeholder="Your password"></ion-input>
                    </ion-item>
                </form>
            </ion-content>
        </ion-modal>
    </ion-content>
    <ion-footer>
        <ion-toolbar>
            <ion-button id="login" expand="block" color="dark" strong="true" class="ion-margin-horizontal">
                Login
            </ion-button>
            <ion-button id="register" class="ion-margin-top ion-margin-horizontal" strong="true" expand="block"
                fill="outline" color="dark">
                Register
            </ion-button>
        </ion-toolbar>
    </ion-footer>
@endsection

@push('customjs')
    <script>
        var loginmodal = document.querySelector('#loginmodal');
        var registermodal = document.querySelector('#registermodal');
        //   var modal = document.querySelector('ion-modal');

        loginmodal.initialBreakpoint = 1;
        loginmodal.breakpoints = [0, 1];

        function loginback() {
            loginmodal.dismiss(null, 'cancel');
        }

        function registerback() {
            registermodal.dismiss(null, 'cancel');
        }
    </script>
@endpush

@push('customcss')
    <style>
        .block {
            width: 100%;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        ion-modal {
            --height: auto;
        }
    </style>
@endpush
