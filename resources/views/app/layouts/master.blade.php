<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PlefSoft - Kurumsal Web Siteleri ve E-Ticaret Yazılımı</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/glightbox.min.css')}}" />
    <script src="{{asset('assets/js/glightbox.min.js')}}"></script>
    <link href="{{asset('assets/css/poppins.css')}}" rel="stylesheet">

    <meta name="description" content="PlefSoft ile dijital dönüşümde bir adım öne geçin! Kurumsal web siteleri, e-ticaret platformları, CRM sistemleri ve backend entegrasyonlarında uzman çözümler sunuyoruz. SEO uyumlu yazılımlar ve dijital pazarlama stratejileri ile markanızı zirveye taşıyın!">
    <meta name="keywords" content="kurumsal web sitesi, e-ticaret yazılımı, CRM sistemleri, backend entegrasyonu, özel yazılım çözümleri, web tasarım, yazılım geliştirme, dijital pazarlama stratejileri, SEO uyumlu web tasarımı, organik trafik artırma, arama motoru sıralamaları, çevrimiçi reklam kampanyaları, UX/UI tasarımı, mobil uyumlu web siteleri, dijital dönüşüm, SEO danışmanlığı, içerik yönetim sistemleri (CMS), hızlı web sayfası tasarımı, yerel SEO hizmetleri, e-ticaret site optimizasyonu, SEO dostu içerik oluşturma, b2b yazılım geliştirme, profesyonel yazılım hizmetleri">


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