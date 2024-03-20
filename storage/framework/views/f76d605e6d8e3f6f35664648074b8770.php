
<div>
    
    <!--[if BLOCK]><![endif]--><?php if($link): ?>
        
        <a href="<?php echo e($link); ?>" class="flex items-center justify-between w-full px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none">
            <div class="flex items-center">
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('svg-icon', ['icon' => $icon,'class' => 'w-5 h-5 mr-2']);

$__html = app('livewire')->mount($__name, $__params, 'lw-3814794967-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                <span><?php echo e($text); ?></span>
            </div>
        </a>
    <?php else: ?>
        
        <button 
            wire:click="toggleSubButtons"
            aria-expanded="<?php echo e($subButtonsVisible ? 'true' : 'false'); ?>"
            class="flex items-center justify-between w-full px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none"
        >
            <div class="flex items-center">
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('svg-icon', ['icon' => $icon,'class' => 'w-5 h-5 mr-2']);

$__html = app('livewire')->mount($__name, $__params, 'lw-3814794967-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                <span><?php echo e($text); ?></span>
            </div>
            
            <!--[if BLOCK]><![endif]--><?php if($hasSubButtons): ?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('svg-icon', ['icon' => 'chevron_down','class' => 'w-4 h-4 ml-2 transition-transform duration-200 transform '.e($subButtonsVisible ? 'rotate-180' : '').'']);

$__html = app('livewire')->mount($__name, $__params, 'lw-3814794967-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </button>
        
        <!--[if BLOCK]><![endif]--><?php if($hasSubButtons && $subButtonsVisible): ?>
            <div class="ml-4 mt-1 space-y-1">
                <?php echo e($slot); ?> 
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH /var/www/html/sapoa.webally.co.za/resources/views/livewire/left-nav-button.blade.php ENDPATH**/ ?>