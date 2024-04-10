<nav class="d-flex justify-content-around align-content-center p-4 ">
  <a class="text-decoration-none  fs-2 fw-bolder text-dark" href="/">
    <img src="<?php echo e(URL::to('images/shape-28.svg')); ?>" alt="" srcset=""> Agendle
  </a>
  <ul class="list-unstyled d-flex  gap-4">
    <li><a class="text-decoration-none nav-a <?php echo e(request()->routeIs('home') ? 'ative' : ''); ?>" href="/">Home</a></li>
    <li><a class="text-decoration-none nav-a <?php echo e(request()->routeIs('contact.*') ? 'ative' : ''); ?>"
        href="<?php echo e(route('contact.index')); ?>">Contacts</a></li>
    <li><a class="text-decoration-none nav-a <?php echo e(request()->routeIs('about') ? 'ative' : ''); ?>"
        href="http://localhost:8000/about">About</a></li>

    <?php if(!Session::has('loginSession')): ?>
    <li><a class="text-decoration-none nav-a <?php echo e(request()->routeIs('login') ? 'ative' : ''); ?>"
        href="http://localhost:8000/login">Login</a></li>
    <li><a class="text-decoration-none btn-register-home" href="http://localhost:8000/register">Register</a></li>
    <?php endif; ?>

    <?php if(Session::has('loginSession')): ?>
    <div class="dropdown m-0">
      <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="<?php echo e(URL::to('images/img-profile.jpg')); ?>" alt="profile-page-img" class="img-profile-page">
      </button>
      <ul class="dropdown-menu">
        <li class="dropdown-item">
          <?php echo e($userSession['username']); ?>

        </li>
        <li class="dropdown-item">
          <?php echo e($userSession['email']); ?>

        </li>
        <hr class="dropdown-divider">
        <li><a class="dropdown-item fw-bold" href="http://localhost:8000/logout">Logout</a></li>
      </ul>
    </div>
    <?php endif; ?>

  </ul>
</nav>
<?php /**PATH /home/kenny/Desktop/WWW/web-contact-registration/resources/views/components/nav.blade.php ENDPATH**/ ?>