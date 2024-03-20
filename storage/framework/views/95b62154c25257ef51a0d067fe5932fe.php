
<div class="inline-flex items-center justify-between w-full user-profile-block">
    <div class="flex items-center">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('svg-icon', ['icon' => 'profile_circle','class' => 'w-8 h-8']);

$__html = app('livewire')->mount($__name, $__params, 'lw-232110960-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>
    <div class="flex flex-col">
        <div class="text-white font-bold text-xs padding-left-5">Administrator</div>
        <div class="flex items-center padding-left-5">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('svg-icon', ['icon' => 'green-dot','class' => 'w-2 h-2 mr-2']);

$__html = app('livewire')->mount($__name, $__params, 'lw-232110960-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <div class="text-white text-xs margin-left-5"> Online</div>
        </div>
    </div>
</div><?php /**PATH /var/www/html/sapoa.webally.co.za/resources/views/livewire/user-profile-block.blade.php ENDPATH**/ ?>