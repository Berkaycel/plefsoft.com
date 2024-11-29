<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="_Ech9H2gD2aj22zOL8GNJrPrnlcq5CCJNiCukJAlB20">
    <title>PlefSoft - Kurumsal Web Siteleri ve E-Ticaret Yazılımı</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/glightbox.min.css')}}" />
    <script src="{{asset('assets/js/glightbox.min.js')}}"></script>
    <link href="{{asset('assets/css/poppins.css')}}" rel="stylesheet">
    <link rel="canonical" href="https://www.plefsoft.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="description" content="PlefSoft ile dijital dönüşümde bir adım öne geçin! Web siteleri, e-ticaret platformları, CRM sistemleri ve SEO uyumlu çözümler sunuyoruz.">

    <meta name="keywords" content="kurumsal web sitesi, e-ticaret yazılımı, CRM sistemleri, backend entegrasyonu, özel yazılım çözümleri, web tasarım, yazılım geliştirme, dijital pazarlama stratejileri, SEO uyumlu web tasarımı, organik trafik artırma, arama motoru sıralamaları, çevrimiçi reklam kampanyaları, UX/UI tasarımı, mobil uyumlu web siteleri, dijital dönüşüm, SEO danışmanlığı, içerik yönetim sistemleri (CMS), hızlı web sayfası tasarımı, yerel SEO hizmetleri, e-ticaret site optimizasyonu, SEO dostu içerik oluşturma, b2b yazılım geliştirme, profesyonel yazılım hizmetleri">


    <meta name="author" content="Plefsoft.com">
</head>
<body>

    @include('app.layouts.nav')

    @yield('content')

    @include('app.layouts.footer')

    <a href="https://wa.me/905389818597" class="shadow btn-primary rounded-circle back-to-top" style="background-color: #25D366 !important; border-color: #25D366 !important; width: 5rem !important; height: 5rem !important;">
    <i class="fa fa-whatsapp" style="font-size: 3.7rem !important;"></i>
    </a>

    {{-- <script src="{{asset('assets/vendors/js/glightbox.min.js')}}"></script> --}}
    {{-- <script type="text/javascript">
            const lightbox = GLightbox({
                'touchNavigation': true,
                'href': 'https://www.youtube.com/watch?v=J9lS14nM1xg',
                'type': 'video',
                'source': 'youtube',
                'width': 900,
                'autoPlayVideos': 'true',
        });
    
    </script> --}}
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>