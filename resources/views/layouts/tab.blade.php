<ion-tabs>
    <ion-tab-bar slot="bottom">
        <ion-tab-button href="{{ route('home') }}" {{ Request::is('home*') ? 'selected' : null }} wire:navigate>
            <ion-icon name="home"></ion-icon>
            Home
        </ion-tab-button>
        <ion-tab-button>
            <ion-icon name="ticket"></ion-icon>
            Ticket
        </ion-tab-button>
        <ion-tab-button>
            <ion-icon name="document"></ion-icon>
            Transaction
        </ion-tab-button>
        <ion-tab-button href="{{ route('profile') }}" {{ Request::is('profile*') ? 'selected' : null }} wire:navigate>
            <ion-icon name="person"></ion-icon>
            Profile
        </ion-tab-button>
    </ion-tab-bar>
</ion-tabs>
