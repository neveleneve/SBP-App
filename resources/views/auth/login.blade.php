@extends('layouts.app')

@section('content')
    <ion-content class="ion-padding">

        <div class="ion-text-center" style="margin-bottom: 20px;">
            <ion-icon name="bag-outline" style="font-size: 50px;"></ion-icon>
            <h1 style="font-weight: bold; margin: 10px 0 0;">Shopping</h1>
        </div>

        <!-- Judul Login -->
        <div class="ion-text-center" style="margin-bottom: 30px;">
            <h2 style="font-size: 22px; font-weight: bold;">login akun</h2>
        </div>

        <form action="{{ route('login') }}" method="post">
            @csrf
            <ion-list>
                <ion-item class="input-item">
                    <ion-icon slot="start" name="mail-outline"></ion-icon>
                    <ion-input placeholder="Email" type="email" name="email"></ion-input>
                </ion-item>

                <ion-item class="input-item">
                    <ion-icon slot="start" name="lock-closed-outline"></ion-icon>
                    <ion-input placeholder="Kata Sandi" type="password" name="password"></ion-input>
                </ion-item>
            </ion-list>

            <!-- Checkbox Ingat Password -->
            <ion-item lines="none" style="margin-top: 10px;">
                <ion-checkbox slot="start"></ion-checkbox>
                <ion-label>Ingat Password</ion-label>
            </ion-item>

            <!-- Tombol Masuk -->
            <div class="ion-text-center" style="margin-top: 20px;">
                <ion-button expand="full" color="dark" style="border-radius: 10px;" type="submit">
                    Masuk
                </ion-button>
                <ion-button expand="block" fill="outline" color="dark" style="margin-top: 10px; border-radius: 10px;"
                    href="{{ route('register') }}">
                    Daftar
                </ion-button>
            </div>
        </form>

        <div class="ion-text-center" style="margin-top: 10px;">
            <a href="#" style="font-size: 14px; text-decoration: none; color: var(--ion-color-medium);">
                lupa kata sandinya?
            </a>
        </div>
    </ion-content>
@endsection
