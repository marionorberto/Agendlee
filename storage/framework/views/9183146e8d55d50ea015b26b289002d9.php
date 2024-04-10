<?php $__env->startSection('content'); ?>

<?php if(@count($contacts)<= 0): ?> <div class="alert alert-warning opacity-75 text-center me-auto ms-auto">create new contacts
  so manage your schedule
  properly.
  </div>
  <?php endif; ?>
  <h3 class="text-center mt-5 fw-light fs-1">Contacts on your schedule</h3>

  <table class="table table-hover table-responsive">
    <thead>
      <tr class="bg-white">
        <th>
          <a href="<?php echo e(route('contact.create')); ?>" class="btn btn-dark fw-light fs-6 rounded-1">create
            contact
          </a>
        </th>
        <th>
        </th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <th class="ps-4">cod</th>
        <th>name</th>
        <th>nickname</th>
        <th>email</th>
        <th>birthday</th>
        <th>phone number</th>
        <th>address</th>
        <th>actions</th>
      </tr>
    </thead>
    <tbody>
      <?php if(@count($contacts)<= 0): ?> <tr>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        </tr>
        <?php else: ?>
        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td class="ps-4">
            <?php echo e($contact['id']); ?>

          </td>
          <td>
            <?php echo e($contact['name'] ? $contact['name'] : '--'); ?>

          </td>
          <td>
            <?php echo e($contact['nickname'] ? $contact['nickname'] : '--'); ?>

          </td>
          <td>
            <?php echo e($contact['email'] ? $contact['email'] : '--'); ?>

          </td>
          <td>
            <?php echo e($contact['birthday'] ? $contact['birthday'] : '--'); ?>

          </td>
          <td>
            <?php echo e($contact['phone'] ? $contact['phone'] : '--'); ?>

          </td>
          <td>
            <?php echo e($contact['address'] ? $contact['address'] : '--'); ?>

          </td>
          <td class="d-flex gap-2">
            <a href="<?php echo e(route('contact.show', $contact['id'])); ?>" class="btn btn-primary btn-sm fw-medium">view</a>
            <form action="<?php echo e(route('contact.destroy', $contact['id'])); ?>" method="post">
              <?php echo method_field('DELETE'); ?>
              <?php echo csrf_field(); ?>
              <button type="submit" class="btn btn-danger btn-sm fw-medium">delete</button>
            </form>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
  </table>
  <hr class="w-50 d-flex me-auto ms-auto">
  <h5 class="text-center fw-lighter fs-6 mb-5 pb-5 "><?php echo e(@count($contacts)); ?> contacts in your schedule</h5>

  <?php $__env->startComponent('components.footer'); ?>
  <?php echo $__env->renderComponent(); ?>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kenny/Desktop/WWW/web-contact-registration/resources/views/contact/index.blade.php ENDPATH**/ ?>