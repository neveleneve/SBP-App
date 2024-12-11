@extends('layouts.app')

@section('content')
    <ion-header>
        <ion-toolbar id="header">
            <ion-buttons slot="start">
                <ion-avatar id="avatar">
                    <img src="{{ asset('assets/img/user-default.jpg') }}">
                </ion-avatar>
                @auth
                    Selamat datang, {{ Auth::user()->name }}
                @else
                    Selamat datang
                @endauth
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
    <ion-content class="ion-padding">
        <ion-searchbar placeholder="Pencarian..."></ion-searchbar>
        <ion-grid>
            <ion-row>
                <ion-col>
                    <h2 style="font-size: 18px; font-weight: bold; margin-bottom: 10px;">
                        Event Belanja
                    </h2>
                </ion-col>
            </ion-row>
        </ion-grid>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://placehold.co/300x150?text=Event+Belanja+1" alt="Event 1">
                </div>
                <div class="swiper-slide">
                    <img src="https://placehold.co/300x150?text=Event+Belanja+2" alt="Event 2">
                </div>
                <div class="swiper-slide">
                    <img src="https://placehold.co/300x150?text=Event+Belanja+3" alt="Event 3">
                </div>
            </div>
        </div>
        <ion-grid class="ion-padding-top">
            <ion-row>
                <ion-col size="3">
                    <div class="category-item">
                        <ion-avatar>
                            <img src="https://placehold.co/100x100?text=Jam+Tangan" alt="Jam Tangan">
                        </ion-avatar>
                        <p>Jam Tangan</p>
                    </div>
                </ion-col>
                <ion-col size="3">
                    <div class="category-item">
                        <ion-avatar>
                            <img src="https://placehold.co/100x100?text=Tas" alt="Tas">
                        </ion-avatar>
                        <p>Tas</p>
                    </div>
                </ion-col>
                <ion-col size="3">
                    <div class="category-item">
                        <ion-avatar>
                            <img src="https://placehold.co/100x100?text=Perhiasan" alt="Perhiasan">
                        </ion-avatar>
                        <p>Perhiasan</p>
                    </div>
                </ion-col>
                <ion-col size="3">
                    <div class="category-item">
                        <ion-avatar>
                            <img src="https://placehold.co/100x100?text=Digital" alt="Digital">
                        </ion-avatar>
                        <p>Digital</p>
                    </div>
                </ion-col>
            </ion-row>
            <ion-row>
                <ion-col size="3">
                    <div class="category-item">
                        <ion-avatar>
                            <img src="https://placehold.co/100x100?text=Bayi" alt="Bayi">
                        </ion-avatar>
                        <p>Bayi</p>
                    </div>
                </ion-col>
                <ion-col size="3">
                    <div class="category-item">
                        <ion-avatar>
                            <img src="https://placehold.co/100x100?text=Furniture" alt="Furniture">
                        </ion-avatar>
                        <p>Furniture</p>
                    </div>
                </ion-col>
                <ion-col size="3">
                    <div class="category-item">
                        <ion-avatar>
                            <img src="https://placehold.co/100x100?text=Kecantikan" alt="Kecantikan">
                        </ion-avatar>
                        <p>Kecantikan</p>
                    </div>
                </ion-col>
                <ion-col size="3">
                    <div class="category-item">
                        <ion-avatar>
                            <img src="https://placehold.co/100x100?text=Sport" alt="Sport">
                        </ion-avatar>
                        <p>Sport</p>
                    </div>
                </ion-col>
            </ion-row>
        </ion-grid>
        <ion-grid>
            <ion-row>
                <ion-col>
                    <h2 style="font-size: 18px; font-weight: bold;">
                        Belanja Mall
                    </h2>
                </ion-col>
                <ion-col class="ion-text-end">
                    <h2 style="font-size: 14px;">
                        Lihat Semua
                    </h2>
                </ion-col>
            </ion-row>
        </ion-grid>
        <ion-modal initial-breakpoint='0.5' @guest is-open="true" @endguest>
            <ion-content class="ion-padding ion-text-center">
                <h4 class="">
                    <strong>
                        Pengumuman!
                    </strong>
                </h4>
                <p class="ion-text-center">🎉 Selamat datang di pusat perbelanjaan! 🎊</p>
                <p>Selamat datang, pelanggan yang terhormat!</p>
                <p>
                    Di sini, kami bukan hanya sebuah pusat perbelanjaan, melainkan juga pertemuan antara impian dan
                    selera.
                    Terima kasih telah memilih kami dan menjadi bagian dari keluarga besar kami.
                </p>
                <p>
                    Terima kasih telah memilih kami. Mari bersama-sama menciptakan masa depan yang indah!
                    <br>
                    Sekali lagi, selamat datang! Nikmatilah setiap momen waktu yang luar biasa ini yang menjadi milik
                    Anda!
                </p>
            </ion-content>
        </ion-modal>
    </ion-content>
    @include('layouts.tab')
@endsection

@push('customcss')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <style>
        .swiper {
            width: 100%;
            height: 160px;
            border-radius: 10px;
            overflow: clip;
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .category-item {
            text-align: center;
        }

        .category-item ion-avatar {
            margin: 0 auto;
            width: 70px;
            height: 70px;
            background: #f9f9f9;
            border: 1px solid #ddd;
        }

        .category-item p {
            margin-top: 8px;
            font-size: 14px;
            font-weight: 500;
        }
    </style>
@endpush

@push('customjs')
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,
            autoplay: {
                delay: 3000,
            },
        });
    </script>
@endpush
