@extends('Core::layouts.backend.app', ['titlePage' => 'Trang đăng nhập'])
@section('content')
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100"
        style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                                <div class="row mt-3">
                                    <div class="col-2 text-center ms-auto">
                                        <a class="btn btn-link px-3" href="javascript:;">
                                            <i class="fa fa-facebook text-white text-lg"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 text-center px-1">
                                        <a class="btn btn-link px-3" href="javascript:;">
                                            <i class="fa fa-github text-white text-lg"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 text-center me-auto">
                                        <a class="btn btn-link px-3" href="javascript:;">
                                            <i class="fa fa-google text-white text-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form role="form" class="text-start" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email"
                                        class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="email" value="" required>
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-check form-switch d-flex align-items-center mb-3">
                                    <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                                    <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                                </div>
                                @if (session('password-fail'))
                                <p class="alert alert-danger text-white">{{ session('password-fail') }}</p>
                                @endif
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign
                                        in</button>
                                </div>
                                <p class="mt-4 text-sm text-center">
                                    Don't have an account?
                                    <a href="../pages/sign-up.html"
                                        class="text-primary text-gradient font-weight-bold">Sign up</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer position-absolute bottom-2 py-2 w-100">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-12 col-md-6 my-auto">
                        <div class="copyright text-center text-sm text-white text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart" aria-hidden="true"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold text-white"
                                target="_blank">Creative Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-white"
                                    target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-white"
                                    target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-white"
                                    target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-white"
                                    target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</main>
<!--   Core JS Files   -->
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
<script>
    var win = n.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '                 }
                ba(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>

<!-- PWA and Push Notification Scripts -->
<script>
    // Register Service Worker for PWA
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', function() {
            navigator.serviceWorker.register('/sw.js')
                .then(function(registration) {
                    console.log('ServiceWorker registration successful');
                    
                    // Request notification permission
                    if ('Notification' in window && Notification.permission === 'default') {
                        Notification.requestPermission().then(function(permission) {
                            if (permission === 'granted') {
                                subscribeToPushNotifications(registration);
                            }
                        });
                    } else if (Notification.permission === 'granted') {
                        subscribeToPushNotifications(registration);
                    }
                })
                .catch(function(err) {
                    console.log('ServiceWorker registration failed: ', err);
                });
        });
    }

    // Subscribe to push notifications
    async function subscribeToPushNotifications(registration) {
        try {
            let subscription = await registration.pushManager.getSubscription();
            
            if (!subscription) {
                // Get VAPID public key from server
                const response = await fetch('/api/push-notification/vapid-key');
                const data = await response.json();
                
                if (data.publicKey) {
                    subscription = await registration.pushManager.subscribe({
                        userVisibleOnly: true,
                        applicationServerKey: urlBase64ToUint8Array(data.publicKey)
                    });
                    
                    // Send subscription to server
                    await sendSubscriptionToServer(subscription);
                }
            } else {
                // Already subscribed, verify with server
                await sendSubscriptionToServer(subscription);
            }
        } catch (error) {
            console.error('Error subscribing to push notifications:', error);
        }
    }

    // Convert VAPID key
    function urlBase64ToUint8Array(base64String) {
        const padding = '='.repeat((4 - base64String.length % 4) % 4);
        const base64 = (base64String + padding)
            .replace(/\-/g, '+')
            .replace(/_/g, '/');

        const rawData = window.atob(base64);
        const outputArray = new Uint8Array(rawData.length);

        for (let i = 0; i < rawData.length; ++i) {
            outputArray[i] = rawData.charCodeAt(i);
        }
        return outputArray;
    }

    // Send subscription to server
    async function sendSubscriptionToServer(subscription) {
        try {
            const response = await fetch('/api/push-notification/subscribe', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
                },
                body: JSON.stringify({
                    endpoint: subscription.endpoint,
                    keys: {
                        p256dh: arrayBufferToBase64(subscription.getKey('p256dh')),
                        auth: arrayBufferToBase64(subscription.getKey('auth'))
                    }
                })
            });

            const data = await response.json();
            if (data.success) {
                console.log('Successfully subscribed to push notifications');
            }
        } catch (error) {
            console.error('Error sending subscription to server:', error);
        }
    }

    // Convert ArrayBuffer to Base64
    function arrayBufferToBase64(buffer) {
        const bytes = new Uint8Array(buffer);
        let binary = '';
        for (let i = 0; i < bytes.byteLength; i++) {
            binary += String.fromCharCode(bytes[i]);
        }
        return window.btoa(binary);
    }

    // Handle install prompt
    let deferredPrompt;
    window.addEventListener('beforeinstallprompt', (e) => {
        e.preventDefault();
        deferredPrompt = e;
        console.log('App can be installed');
    });
</script>
@endsection
