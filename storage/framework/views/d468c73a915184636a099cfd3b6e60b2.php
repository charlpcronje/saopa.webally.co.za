
<aside class="sidebar bg-gray-800 text-white w-64 min-h-screen">
    <div class="branding-block" style="background-color:#D33026; padding:18px">
        <!-- Branding block content -->
        <h2 class="font-bold" style="font-size:14px; font-weight:bold">SAPOA Awards <span class="text-sm" style="font-weight:100">DASHBOARD</span></h2>
    </div>
    <nav class="left-navigation p-4 space-y-2">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('left-nav-button', ['icon' => 'search','text' => 'Search']);

$__html = app('livewire')->mount($__name, $__params, 'lw-1941913655-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('left-nav-button', ['icon' => 'dashboard_white','text' => 'Dashboard','link' => '/dashboard']);

$__html = app('livewire')->mount($__name, $__params, 'lw-1941913655-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('left-nav-button', ['icon' => 'chevron_down','text' => 'Admin','hasSubButtons' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1941913655-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('left-nav-sub-button', ['text' => 'View Admins','link' => '/admins']);

$__html = app('livewire')->mount($__name, $__params, 'lw-1941913655-3', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('left-nav-sub-button', ['text' => 'Link Admins','link' => '/link-admins']);

$__html = app('livewire')->mount($__name, $__params, 'lw-1941913655-4', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('left-nav-sub-button', ['text' => 'Add Admin','link' => '/add-admin']);

$__html = app('livewire')->mount($__name, $__params, 'lw-1941913655-5', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </livewire:left-nav-button>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('left-nav-button', ['icon' => 'chevron_down','text' => 'Judges','hasSubButtons' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1941913655-6', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('left-nav-sub-button', ['text' => 'View Judges','link' => '/judges']);

$__html = app('livewire')->mount($__name, $__params, 'lw-1941913655-7', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('left-nav-sub-button', ['text' => 'Link Judges to Entries','link' => '/link-judges']);

$__html = app('livewire')->mount($__name, $__params, 'lw-1941913655-8', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('left-nav-sub-button', ['text' => 'Add Judge','link' => '/add-judge']);

$__html = app('livewire')->mount($__name, $__params, 'lw-1941913655-9', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </livewire:left-nav-button>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('left-nav-button', ['icon' => 'chevron_down','text' => 'Entries','hasSubButtons' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1941913655-10', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('left-nav-sub-button', ['text' => 'All Entries','link' => '/entries']);

$__html = app('livewire')->mount($__name, $__params, 'lw-1941913655-11', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('left-nav-sub-button', ['text' => 'Judge Entries','link' => '/judge-entries']);

$__html = app('livewire')->mount($__name, $__params, 'lw-1941913655-12', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('left-nav-sub-button', ['text' => 'Payments','link' => '/payments']);

$__html = app('livewire')->mount($__name, $__params, 'lw-1941913655-13', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </livewire:left-nav-button>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('left-nav-button', ['icon' => 'list','text' => 'List Users','link' => '/users']);

$__html = app('livewire')->mount($__name, $__params, 'lw-1941913655-14', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </nav>
</aside><?php /**PATH /var/www/html/sapoa.webally.co.za/resources/views/livewire/sidebar.blade.php ENDPATH**/ ?>