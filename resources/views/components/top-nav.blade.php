{{-- resources/views/components/top-nav.blade.php --}}
{{-- /resources/views/components/top-nav.blade.php --}}
<div x-data="topNavComponent">
    <div class="top-nav">
        {{-- Profile Button --}}
        <div @click.away="profileDropdownOpen = false">
            <button @click="toggleProfileDropdown()">Profile</button>
            <div x-show="profileDropdownOpen">
                {{-- Profile dropdown items --}}
            </div>
        </div>

        {{-- Settings Button --}}
        <div @click.away="settingsDropdownOpen = false">
            <button @click="toggleSettingsDropdown()">Settings</button>
            <div x-show="settingsDropdownOpen">
                {{-- Settings dropdown items --}}
            </div>
        </div>
    </div>
</div>
