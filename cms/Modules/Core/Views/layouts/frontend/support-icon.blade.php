@php
    $icons = [
        'facebook' => '<svg width="44" height="44" viewBox="0 0 44 44" xmlns="http://www.w3.org/2000/svg"><rect width="44" height="44" rx="7" fill="#1877F2"/><path d="M27.5 14h-2.8c-1.3 0-1.7.6-1.7 1.6v2.4h4.4l-.6 4.2h-3.8v10.8h-4.5V22.2h-3.3v-4.2h3.3v-3.1c0-3.3 2-5.2 5-5.2h3.2v4.3z" fill="white"/></svg>',
        'whatsapp' => '<svg height="44px" width="44px" xmlns="http://www.w3.org/2000/svg" aria-label="WhatsApp" role="img" viewBox="0 0 512 512"><rect width="512" height="512" rx="15%" fill="#25d366"/><path fill="#25d366" stroke="#ffffff" stroke-width="26" d="M123 393l14-65a138 138 0 1150 47z"/><path fill="#ffffff" d="M308 273c-3-2-6-3-9 1l-12 16c-3 2-5 3-9 1-15-8-36-17-54-47-1-4 1-6 3-8l9-14c2-2 1-4 0-6l-12-29c-3-8-6-7-9-7h-8c-2 0-6 1-10 5-22 22-13 53 3 73 3 4 23 40 66 59 32 14 39 12 48 10 11-1 22-10 27-19 1-3 6-16 2-18"/></svg>',
        'gmail' => '<svg height="44px" width="44px" xmlns="http://www.w3.org/2000/svg" aria-label="Gmail" role="img" viewBox="0 0 512.00 512.00"><rect width="512" height="512" rx="15%" fill="#ffffff"/><path d="M158 391v-142l-82-63V361q0 30 30 30" fill="#4285f4"/><path d="M 154 248l102 77l102-77v-98l-102 77l-102-77" fill="#ea4335"/><path d="M354 391v-142l82-63V361q0 30-30 30" fill="#34a853"/><path d="M76 188l82 63v-98l-30-23c-27-21-52 0-52 26" fill="#c5221f"/><path d="M436 188l-82 63v-98l30-23c27-21 52 0 52 26" fill="#fbbc04"/></svg>',
    ]
@endphp

<div class="item item-show">
    <a rel="nofollow" title="{{ $title }}" target='_blank' href="{{ $url }}">
        {!! $icons[$platform] ?? '' !!}
    </a>
</div>
