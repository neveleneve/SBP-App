<!DOCTYPE html>
<html lang="en" mode="md">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    {{-- @livewireStyles --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css">
    <style>
        ion-toolbar#header {
            --background: #033c73;
            --color: white;
        }

        ion-tab-bar#footer {
            --background: #033c73;
            --color: white;
        }

        ion-avatar#avatar {
            padding: 14px;
        }
    </style>
    @stack('customcss')
</head>

<body>
    <ion-app>
        @yield('content')
    </ion-app>
    {{-- @livewireScripts --}}
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
    @stack('customjs')
</body>

</html>
