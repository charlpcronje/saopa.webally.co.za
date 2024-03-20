
<div class="inline-flex relative">
    <button class="text-white focus:outline-none" wire:click="toggleDropdown">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('svg-icon', ['icon' => $icon,'class' => 'w-6 h-6']);

$__html = app('livewire')->mount($__name, $__params, 'lw-720841415-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </button>

    <!--[if BLOCK]><![endif]--><?php if($isOpen): ?>
        <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10">
            <!-- Dropdown menu items -->
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Option 1</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Option 2</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Option 3</a>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div><?php /**PATH /var/www/html/sapoa.webally.co.za/resources/views/livewire/header-dropdown.blade.php ENDPATH**/ ?>