<nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="">
        <img src="{{asset('images/plefsoft-logo-white.png')}}" alt="logo image" style="max-width: 150px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('index')}}">Anasayfa</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Hizmetlerimiz</a></li>
          {{-- <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li> --}}
          <li class="nav-item"><a class="nav-link" href="#faq">Sıkça Sorulan Sorular</a></li>
          {{-- <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li> --}}
          <li class="nav-item"><a class="nav-link" href="#contact">Bize Ulaşın</a>
          </li>
        </ul>
        <button type="button" class="rounded-pill btn-rounded">
          +90 538 981 8597
          <span>
            <i class="fas fa-phone-alt"></i>
          </span>
        </button>
      </div>
    </div>
  </nav>