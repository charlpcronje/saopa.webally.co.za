{{-- resources/views/components/left-nav.blade.php --}}
{{-- /resources/views/components/left-nav.blade.php --}}
<div x-data="leftNavComponent" @click.away="activeMenu = ''">
    <ul class="nav-links">
        <li>
            <a href="#" @click="toggleSubMenu('dashboard')" :class="{'active': isActive('dashboard')}">Dashboard</a>
            <div x-show="isActive('dashboard')">
                {{-- Sub-menu items for Dashboard --}}
            </div>
        </li>
        <li>
            <a href="#" @click="toggleSubMenu('entries')" :class="{'active': isActive('entries')}">Entries</a>
            <div x-show="isActive('entries')">
                {{-- Sub-menu items for Entries --}}
            </div>
        </li>
        {{-- Repeat for other main menu items --}}
    </ul>
</div>
