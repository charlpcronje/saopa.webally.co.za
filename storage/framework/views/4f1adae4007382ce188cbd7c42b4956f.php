
<div class="w-full max-w-md p-6 bg-white rounded">
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('alert-bar', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2719242510-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    <div class="login-title text-center">
        <h1 class="font-bold"><strong>SAPOA Awards</strong><span class="dashboard text-gray-700"> DASHBOARD</span></h1>
    </div>

    <form wire:submit.prevent="login" class="form-container">
        <div>
            <div class="mb-4 flex justify-center">
                <input id="email" type="text" wire:model.defer="email" required autofocus placeholder="Email" class="input-field" />
            </div>
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
            <div class="mb-6">
                <input id="password" type="password" wire:model.defer="password" required placeholder="Password" class="input-field" />
            </div>
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
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
</div><?php /**PATH /var/www/html/sapoa.webally.co.za/resources/views/livewire/login-form.blade.php ENDPATH**/ ?>