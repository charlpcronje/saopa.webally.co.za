
<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b = $attributes; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md p-6 bg-white rounded">
            <div class="login-title text-center">
                <h1 class="font-bold"><strong>SAPOA Awards</strong><span class="dashboard text-gray-700"> DASHBOARD</span></h1>
            </div>

            <form method="POST" action="<?php echo e(route('login')); ?>" class="form-container">
                <?php echo csrf_field(); ?>
                <div>
                    <div class="mb-4 flex justify-center">
                        <input id="email" type="text" name="email" required autofocus placeholder="Email" class="input-field" />
                    </div>
                    <div class="mb-6">
                        <input id="password" type="password" name="password" required placeholder="Password" class="input-field" />
                    </div>
                </div>
                <div class="mb-6">
                    <?php if (isset($component)) { $__componentOriginal738438d805b9baf2d1402d7b79c4fcbf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal738438d805b9baf2d1402d7b79c4fcbf = $attributes; } ?>
<?php $component = App\View\Components\PrimaryButton::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('primary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PrimaryButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full red-button-class']); ?>
                        <?php echo e(__('Sign In')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal738438d805b9baf2d1402d7b79c4fcbf)): ?>
<?php $attributes = $__attributesOriginal738438d805b9baf2d1402d7b79c4fcbf; ?>
<?php unset($__attributesOriginal738438d805b9baf2d1402d7b79c4fcbf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal738438d805b9baf2d1402d7b79c4fcbf)): ?>
<?php $component = $__componentOriginal738438d805b9baf2d1402d7b79c4fcbf; ?>
<?php unset($__componentOriginal738438d805b9baf2d1402d7b79c4fcbf); ?>
<?php endif; ?>
                </div>
                <div class="flex flex-col items-start text-sm">
                    <a href="<?php echo e(route('password.request')); ?>" class="link-forgot-password font-semibold hover:underline mb-2"><?php echo e(__('Forgot Password')); ?></a>
                    <a href="<?php echo e(route('register')); ?>" class="link-register font-semibold hover:underline"><?php echo e(__('Register New Membership')); ?></a>
                </div>
            </form>
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
<?php /**PATH /var/www/html/sapoa.webally.co.za/resources/views/auth/login.blade.php ENDPATH**/ ?>