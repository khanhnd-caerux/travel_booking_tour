@php
    $siteTitle = 'Linen Backpacker Tour - Ha Giang Loop';
    $siteDescription = 'Phuc Hoang - Owner of "Linen Backpacker". Ha Giang Loop BY LinenBackpacker';
    $siteKeywords = 'LinenBackpacker\'s Homestay - Ha Giang Loop';
    $ogImage = 'https://linenbackpacker.com/frontend/images/config/asset-17_1698816647.jpeg';
    $fbAppId = '647558742055251';
    $fbAdmins = '647558742055251';
    $googleVerification = 'wbGxdRaMeMm69UxvryuTouLeXhZeiwc2FQYQI6C3kVM';
@endphp

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Cache-control" content="public">
<title>{{ $siteTitle }}</title>
<meta name="description" content="{{ $siteDescription }}" />
<meta name="keywords" content="{{ $siteKeywords }}" />
<meta name="dc.language" content="EN" />
<meta name="dc.source" content="index.html" />
<meta name="dc.relation" content="index.html" />
<meta name="dc.title" content="{{ $siteTitle }}" />
<meta name="dc.keywords" content="{{ $siteKeywords }}" />
<meta name="dc.subject" content="{{ $siteTitle }}" />
<meta name="dc.description" content="{{ $siteDescription }}" />

<!-- Open Graph Meta Tags -->
<meta property="og:type" content="website" />
<meta property="og:site_name" content="{{ $siteTitle }}" />
<meta property="og:locale" content="vi_EN" />
<meta property="og:title" content="{{ $siteTitle }}" />
<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:description" content="{{ $siteDescription }}" />
<meta property="og:image" content="{{ $ogImage }}" />
<meta property="og:image:width" content="600" />
<meta property="og:image:alt" content="{{ $siteTitle }}" />

<!-- Facebook Meta Tags -->
<meta property="fb:app_id" content="{{ $fbAppId }}" />
<meta property="fb:admins" content="{{ $fbAdmins }}" />

<!-- Other Meta Tags -->
<link rel="author" href="{{ url('/') }}" />
<link rel="manifest" href="{{ asset('manifest.json') }}" />
<meta name="theme-color" content="#1877F2" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="apple-mobile-web-app-title" content="Tour Booking">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="geo.placename" content="Hà Nội" />
<meta name="geo.region" content="VN-HN" />
<meta name="geo.position" content="21;105.83" />
<meta name="ICBM" content="21, 105.83" />
<meta name="google-site-verification" content="{{ $googleVerification }}" />
<meta name="googlebot" content="index,follow" />
<meta content="INDEX,FOLLOW" name="robots" />

<link rel="canonical" href="{{ url('/') }}">
<link rel='icon' type='image/x-icon' href="{{ $ogImage }}" />
<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
<link rel="alternate" type="application/rss+xml" title="{{ $siteTitle }} Feed" href="{{ url('/rss') }}" />
