<ion-tabs>
    <ion-tab-bar slot="bottom" id="footer">
        <ion-tab-button href="{{ route('landing') }}">
            <ion-icon name="home{{ Request::is('/') ? null : '-outline' }}"></ion-icon>
            Home
        </ion-tab-button>
        <ion-tab-button>
            <ion-icon name="bag-outline"></ion-icon>
            Cart
        </ion-tab-button>
        <ion-tab-button>
            <ion-icon name="cart-outline"></ion-icon>
            Order
        </ion-tab-button>
        <ion-tab-button href="{{ route('profile') }}">
            <ion-icon name="person{{ Request::is('profile*') ? null : '-outline' }}"></ion-icon>
            Profile
        </ion-tab-button>
    </ion-tab-bar>
</ion-tabs>
