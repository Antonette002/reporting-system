<!-- resources/views/welcome.blade.php -->
<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b = $attributes; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\GuestLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="sm:justify-center sm:pt-0">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800">Welcome to ReportIt</h1>
            <p class="mt-4 text-lg text-gray-600">
                Report issues. Improve communities. Empower change.
            </p>

            <div class="mt-6">
                <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(url('/dashboard')); ?>" class="text-blue-600 underline">Go to Dashboard</a>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="text-blue-600 underline">Log in</a>
                    <span class="mx-2">|</span>
                    <a href="<?php echo e(route('register')); ?>" class="text-blue-600 underline">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\reportit\resources\views/welcome.blade.php ENDPATH**/ ?>