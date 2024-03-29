<?php $__env->startSection('username'); ?>
<?php $__env->startSection('content'); ?>
<main>

  <section class="s1 d-flex justify-content-around align-items-center">
    <div>
      <h1 class="text-big lh-sm"> Manage your schedule<br> everywhere online</h1>
      <p class="text-justified text-muted fs-5">
        Managing your schedule has never been easier. With our<br>
        intuitive platform, you have full control of your<br>
        appointments, contacts and tasks anywhere<br>
        and at any time.
      </p>
      <form action="#" method="" class="d-flex align-items-center">
        <input type="email" name="email" class="form-control input-form-call-action fs-5"
          placeholder="email@example.com">
        <button type="submit" class="btn input-group btn-form-call-action text-white fw-medium fs-5">Register
          now</button>
      </form>
    </div>
    <div class="floating-image-container">
      <img class="img-schedule" src="<?php echo e(URL::to('images/schedule.svg')); ?>" alt="" srcset="">
    </div>
  </section>
  <section>
    <div class="container pt-5 pb-5">
      <h2 class="text-center mt-4 mb-4 fs-1">How to use it </h2>
      <div class="mb-5 pb-4  mt-5 d-flex justify-content-around align-items-center">

        <div class="process-panel d-flex flex-column justify-content-center align-item-around">
          <div class="process-panel-text-step">
            <p class="">step 1</p>
          </div>
          <h2 class="fs-3">start your campaign </h2>
          <p class="text-center">Highly targeted landing pages landing pages landing pages will increase your results,
            and with A/B testing takes you the next level cost per cost per acquisition. little more about your product
            or.</p>
        </div>

        <div class="process-panel d-flex flex-column justify-content-center align-item-around">
          <div class="process-panel-text-step">
            <p class="">step 2</p>
          </div>
          <h2 class="process-name">engage new users</h2>
          <p class="process-desc">Stop wasting money on more traffi. Get more leads on your existing traffic instead. At
            the end, this improves your ROI significantly. convince them to use your game</p>
        </div>
        <div class="process-panel d-flex flex-column justify-content-center align-item-around">
          <div class="process-panel-text-step">
            <p>step 3</p>
          </div>
          <h2 class="">claim your reward </h2>
          <p class="">Higher conversion rates means you get more business from your cur in rent traffic and reduce cost
            peple cost per acquisition.this improves your ROI significantly.</p>
        </div>
      </div>
    </div>
  </section>
</main>
<?php $__env->startComponent('components.footer'); ?>
<?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', ['username' => $username], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kenny/Desktop/WWW/web-contact-registration/resources/views/index.blade.php ENDPATH**/ ?>