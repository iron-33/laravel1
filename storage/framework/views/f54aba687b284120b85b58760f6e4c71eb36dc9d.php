<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
<body class="text-center">
	<?php if(Auth::user()): ?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">LARA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if($menu=='home'): ?> active <?php endif; ?>">
        <a class="nav-link" href="<?php echo e(route('home')); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php if($menu=='pogoda'): ?> active <?php endif; ?>">
        <a class="nav-link" href="<?php echo e(route('pogoda')); ?>">Погода</a>
      </li>
      <li class="nav-item <?php if($menu=='feedback'): ?> active <?php endif; ?>">
        <a class="nav-link" href="<?php echo e(route('feedback')); ?>">Фидбэк</a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="<?php echo e(route('logout')); ?>"
	   onclick="event.preventDefault();
					 document.getElementById('logout-form').submit();">
		<?php echo e(__('Logout')); ?>

		</a>
		<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
		<?php echo csrf_field(); ?>
	</form>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0 text-white">
      Юзер: <b><?php echo e(Auth::user()->name); ?></b>
    </form>
  </div>
</nav>
<?php endif; ?>
	<?php echo $__env->yieldContent('content'); ?>

</body>
</html>
<?php /**PATH /var/www/html/lavarel/laravelapp/resources/views/layouts/app.blade.php ENDPATH**/ ?>