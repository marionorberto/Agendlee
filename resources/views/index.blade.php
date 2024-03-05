@extends('layout.main')
@section('content')
<main>

<section class="s1 d-flex justify-content-around align-items-center">
  <div>
    <h1 class="text-big">Manage your schedule<br> everywhere online</h1>
    <p class="text-justified text-muted">
    Lorem ipsum dolor sit amet, consectetur adipisicing
    elit. Minima,<br> laboriosam itaque vero sequi,laboriosam itaque vero sequi
    elit. Minima,<br> laboriosam itaque vero sequi,laboriosam itaque vero sequi
    elit. Minima,<br> laboriosam itaque vero sequi,laboriosam itaque vero sequi
    </p>
    <form action="" method="post" class="d-flex align-items-center">
      <input type="text" class="form-control input-form-call-action">
      <button class="btn-form-call-action text-white fw-bold">Register now</button>
    </form>
  </div>
  <div>
    <img class="img-schedule" src="{{URL::to('images/schedule.svg')}}" alt="" srcset="">
  </div>
</section>
<hr class="mt-3 mb-3">
<section>
 <div class="container">
           <h2 class="text-center">How to use it </h2>
          <div class="d-flex justify-content-around align-items-center">

            <div class="process-panel">
              <div class="process-panel-text-step">
                <p class="text-muted">step 1</p>
              </div>
              <h2 class="fs-3">start your campaign </h2>
              <p class="text-center">Highly targeted landing pages will increase your results, and with A/B testing takes you to the next level cost per cost per acquisition. little more about your product or.</p>
            </div>

            <div class="process-panel">
              <div class="">
                <p>step 2</p>
              </div>
              <h2 class="process-name">engage new users</h2>
              <p class="process-desc">Stop wasting money on more traffi. Get more leads on your existing traffic instead. At the end, this improves your ROI significantly. convince them to use your game</p>
            </div>
            <div class="process-panel">
              <div class="process-phase">
                <p>step 3</p>
              </div>
              <h2 class="">claim your reward </h2>
              <p class="">Higher conversion rates means you get more business from your cur in rent traffic and reduce cost peple cost per acquisition.this improves your ROI significantly.</p>
            </div>
          </div>
        </div>
</section>
<div class="footer-top">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-3">
                <div class="footer-logo"><a class="logo" href="index.html"><img class="logo logo-light" src="assets/images/logo/logo-footer.png" alt="LadidApp Logo"></a></div>
                <p>Ladidapp is a design studio founded in London and expanded our services, and offering solutions Worldwide.</p>
                <div class="footer-social">
                  <ul class="list-unstyled">
                    <li> <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                    <li> <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                    <li> <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="footer-widget">
                  <h6 class="widget-title">important links</h6>
                  <ul class="list-unstyled">
                    <li> <a href="javascript:void(0)">about us</a></li>
                    <li> <a href="javascript:void(0)">compare service</a></li>
                    <li> <a href="javascript:void(0)">our mission</a></li>
                    <li> <a href="javascript:void(0)">blog</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="footer-widget">
                  <h6 class="widget-title">learning lesson</h6>
                  <ul class="list-unstyled">
                    <li> <a href="javascript:void(0)">tutorials</a></li>
                    <li> <a href="javascript:void(0)">compare service</a></li>
                    <li> <a href="javascript:void(0)">how it works</a></li>
                    <li> <a href="javascript:void(0)">F.A.Q</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="footer-widget">
                  <h6 class="widget-title">our policy</h6>
                  <ul class="list-unstyled">
                    <li> <a href="javascript:void(0)">application security</a></li>
                    <li> <a href="javascript:void(0)">software principles</a></li>
                    <li> <a href="javascript:void(0)">responsible supply chain</a></li>
                    <li> <a href="javascript:void(0)">software policy</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
</main>
@endsection
