
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(config('app.name', 'SAPOA Awards')); ?></title>
    
    <!-- Fonts -->
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('google-font', ['font' => 'Inter','weights' => '100..900']);

$__html = app('livewire')->mount($__name, $__params, 'lw-3484688487-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    <!-- Styles and Script -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">
</head>
<body>
    <div class="flex">
        <!-- Sidebar -->
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('sidebar', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3484688487-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        
        <div class="flex-1">
            <!-- Header Bar -->
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('headerbar', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3484688487-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    
            <!-- Main Content -->
            <main class="main-content p-4">
                <?php echo e($slot); ?>

            </main>
        </div>
    </div>    
</body>
</html><?php /**PATH /var/www/html/sapoa.webally.co.za/resources/views/components/layouts/app.blade.php ENDPATH**/ ?>