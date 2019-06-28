<?php $__env->startSection('content'); ?>
<div class="container">	
<div class="row mt-5 justify-content-md-center ">	
	<?php if(Auth::user()): ?>
	
	
	
	 
	<div class="col-12">
		<h2 class="m-5">  Погода на <?php echo e($day); ?>, <?php echo e($date); ?> <?php echo e($month); ?> </h2>
		<div class="alert alert-warning"><?php echo e($daylight); ?> </div>
		<button class="btn btn-success btn-lg"><?php echo e($temp); ?> </button>
		
		<?php $k=0;$looper=0; $drop = true; ?>
	
		<?php $__currentLoopData = $weather; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($k==0): ?><div class="row mt-5"><?php endif; ?>
			
		<?php if($looper==0 && $drop): ?> <div class="col"></div> <?php $drop = false; ?> <?php endif; ?>
		<?php if($looper==1 && $drop): ?> <div class="col"></div> <?php $drop = false; ?> <?php endif; ?>
		<?php if($looper==2 && $drop): ?> <div class="col"></div> <?php $drop = false; ?> <?php endif; ?>
		<?php if($looper==3 && $drop): ?> <div class="col">Градус</div> <?php $drop = false; ?> <?php endif; ?>
		<?php if($looper==4 && $drop): ?> <div class="col">Ощущается</div> <?php $drop = false; ?> <?php endif; ?>
		<?php if($looper==5 && $drop): ?> <div class="col">Давление, мм</div> <?php $drop = false; ?> <?php endif; ?>
		<?php if($looper==6 && $drop): ?> <div class="col">Влажность</div> <?php $drop = false; ?> <?php endif; ?>
		<?php if($looper==7 && $drop): ?> <div class="col">Ветер</div> <?php $drop = false; ?> <?php endif; ?>
		<?php if($looper==8 && $drop): ?> <div class="col">Вероятность осадки, %</div> <?php $drop = false; ?> <?php endif; ?>
		
			<?php if($k==0): ?><div class="col">ночь</div> <?php $k++;  ?> <?php endif; ?>
			<?php if($k==2): ?><div class="col">утро</div> <?php $k++;  ?> <?php endif; ?>
			<?php if($k==4): ?><div class="col">день</div> <?php $k++;  ?> <?php endif; ?>
			<?php if($k==6): ?><div class="col">вечер</div> <?php $k++;  ?> <?php endif; ?>
			
			<div class="col"><?php echo e($w); ?></div>
		<?php $k++;  if($k%8==0) { echo '</div><div class="row mt-3">'; $looper++; $drop = true; } ?>
	
	
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	<?php else: ?>
		<div class="col-6">Для вас просмотр страницы запрещён </div>
	<?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/lavarel/laravelapp/resources/views/pogoda.blade.php ENDPATH**/ ?>