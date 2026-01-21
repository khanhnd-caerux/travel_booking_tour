<script async language="javascript" src="{{ asset('frontend/cache/js/app.js') }}"></script>

<!-- PWA Scripts -->
<script>
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
            navigator.serviceWorker.register('/sw.js')
                .then(registration => console.log('ServiceWorker registration successful'))
                .catch(err => console.log('ServiceWorker registration failed:', err));
        });
    }

    let deferredPrompt;
    window.addEventListener('beforeinstallprompt', (e) => {
        e.preventDefault();
        deferredPrompt = e;
    });
</script>
