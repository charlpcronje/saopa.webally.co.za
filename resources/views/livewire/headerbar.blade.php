{{-- resources/views/livewire/headerbar.blade.php --}}
<!-- resources/views/livewire/headerbar.blade.php -->
<header class="headerbar bg-gray-800 text-white p-4">
    <div class="flex justify-between items-center">
        <!-- Left Aligned Nav -->
        <nav class="left-nav">
            <livewire:header-button icon="hamburger" />
        </nav>

        <!-- Right Aligned Nav -->
        <nav class="right-nav space-x-4">
            <livewire:header-dropdown icon="cogwheel">
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Settings</a>
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Profile</a>
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Logout</a>
            </livewire:header-dropdown>

            <livewire:header-separator />

            <livewire:user-profile-block />

            <livewire:header-separator />

            <livewire:header-dropdown icon="flag">
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">English</a>
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Español</a>
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Français</a>
            </livewire:header-dropdown>

            <livewire:header-dropdown icon="bell">
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Notification 1</a>
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Notification 2</a>
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Notification 3</a>
            </livewire:header-dropdown>

            <livewire:header-dropdown icon="mail">
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Message 1</a>
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Message 2</a>
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Message 3</a>
            </livewire:header-dropdown>
        </nav>
    </div>
</header>