<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PlefSoft, Bootstrap 5 Landing Page</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/glightbox.min.css')}}" />
    <script src="{{asset('assets/js/glightbox.min.js')}}"></script>
    <link href="{{asset('assets/css/poppins.css')}}" rel="stylesheet">

    <meta name="description" content="Kurumsal web siteleri, e-ticaret platformları, CRM sistemleri ve backend entegrasyonları için profesyonel yazılım destek hizmetleri.">
    <meta name="keywords" content="kurumsal web sitesi, e-ticaret yazılımı, CRM sistemleri, backend entegrasyonu, yazılım destek hizmetleri, özel yazılım çözümleri, web tasarım, e-ticaret platformları, işletme yazılımları, yazılım geliştirme, yazılım danışmanlığı, profesyonel yazılım hizmetleri,dijital pazarlama stratejileri, online reklamcılık, sosyal medya yönetimi, özel yazılım geliştirme, SEO uyumlu web tasarımı, Google sıralamaları, organik trafik artırma, arama motoru sıralamaları, çevrimiçi reklam kampanyaları, web tasarım çözümleri">
    <meta name="author" content="Plefsoft.com">
</head>
<body>

    @include('app.layouts.nav')

    @yield('content')

    @include('app.layouts.footer')

    <!-- BACK TO TOP BUTTON  -->
    <a href="#" class="shadow btn-primary rounded-circle back-to-top">
    <i class="fas fa-chevron-up"></i>
    </a>

    <script src="assets/vendors/js/glightbox.min.js"></script>
    <script type="text/javascript">
            const lightbox = GLightbox({
                'touchNavigation': true,
                'href': 'https://www.youtube.com/watch?v=J9lS14nM1xg',
                'type': 'video',
                'source': 'youtube', //vimeo, youtube or local
                'width': 900,
                'autoPlayVideos': 'true',
        });
    
    </script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>