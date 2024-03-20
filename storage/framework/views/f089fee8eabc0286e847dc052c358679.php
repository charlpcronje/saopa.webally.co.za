
<a
    href="<?php echo e($link); ?>"
    class="flex items-center px-4 py-2 text-gray-400 hover:text-white hover:bg-gray-700"
>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('svg-icon', ['icon' => $icon,'class' => 'w-2 h-2 mr-2']);

$__html = app('livewire')->mount($__name, $__params, 'lw-2320425010-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <span><?php echo e($text); ?></span>
</a><?php /**PATH /var/www/html/sapoa.webally.co.za/resources/views/livewire/left-nav-sub-button.blade.php ENDPATH**/ ?>