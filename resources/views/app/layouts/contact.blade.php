<section id="bize-ulasin" class="get-started">
    <div class="container">
      <div class="row text-center">
        <h1 class="display-3 fw-bold text-capitalize">Bize Ulaşın</h1>
        <div class="heading-line"></div>
      </div>
  
      <div class="row text-white">
        <div class="col-12 col-lg-6 gradient shadow p-3">
          <div class="cta-info w-100">
            <h4 class="display-4 fw-bold">100% Memnuniyet Garantisi</h4>
            <p class="lh-lg" style="text-align: left; hyphens: auto;">
              PlefSoft olarak, her projeyi sizinle yakın iş birliği içinde şekillendiriyor ve başarıya ulaşmanız için her adımda yanınızda oluyoruz. Sürekli destek ve özel yazılım geliştirme çözümlerimizle, hedeflerinize ulaşmanızı sağlayarak %100 memnuniyet garantisi sunuyoruz. Başarı yolculuğunuzda, her zaman sizinle olacağız.
            </p>
            <h3 class="display-3--brief">Sonraki Adım Ne Olacak?</h3>
            <ul class="cta-info__list">
              <li><strong>Teklifimizi Hazırlayacağız:</strong> İhtiyaçlarınızı ve hedeflerinizi anladıktan sonra, size özel bir çözüm önerisi hazırlayacağız.</li>
              <li><strong>Birlikte Değerlendireceğiz:</strong> Önerimizi ve planımızı detaylıca inceleyecek, tüm sorularınızı cevaplayacağız.</li>
              <li><strong>Tartışmaya Başlayalım:</strong> Projeye başlamak için sizinle iletişime geçeceğiz ve hemen harekete geçeceğiz.</li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-lg-6 bg-white shadow p-3">
          <div class="form w-100 pb-2">
            <h4 class="display-3--title mb-5">Hayalinizdeki Projeye Adım Atın!</h4>
            <form method="POST" action="{{route('contact.receiveMessage')}}" class="row">
              @csrf
              <div class="col-lg-6 col-md mb-3">
                <input type="text" placeholder="Adınızı girin" id="first_name" name="first_name" class="shadow form-control form-control-lg" required>
              </div>
              <div class="col-lg-6 col-md mb-3">
                <input type="text" placeholder="Soyadınızı girin" id="last_name" name="last_name" class="shadow form-control form-control-lg" required>
              </div>
              <div class="col-lg-12 mb-3">
                <input type="email" placeholder="E-posta adresinizi girin" id="email" name="email" class="shadow form-control form-control-lg" required>
              </div>
              <div class="col-lg-12 mb-3">
                <textarea name="message" placeholder="Sorunuzu veya mesajınızı buraya yazın" id="message" rows="8" minlength="10" maxlength="1000" class="shadow form-control form-control-lg" required></textarea>
              </div>
              <div class="text-center d-grid mt-1">
                <button type="submit" class="btn btn-primary rounded-pill pt-3 pb-3">
                  Gönder
                  <i class="fas fa-paper-plane"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>