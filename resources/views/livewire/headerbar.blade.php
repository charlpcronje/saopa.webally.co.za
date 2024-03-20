{{-- resources/views/livewire/headerbar.blade.php --}}
<header class="bg-gray-800 text-white flex justify-between items-center py-2 px-4" style="height:58px">
    <div>
        <livewire:header-button icon="hamburger" />
    </div>

    <div class="flex items-center space-x-3">
        <div class="header-bar-icon-button">
            <livewire:header-button icon="flag"/>
        </div>
        <div class="header-bar-icon-button">
            <livewire:header-button icon="bell" />
        </div>
        <div class="header-bar-icon-button">
            <livewire:header-button icon="mail" />
        </div>
        <div class="header-bar-icon-button padding-top-15">
            <livewire:svg-icon icon="separator"/>
        </div>
        <div class="padding-top--5 margin-right-10">
            <livewire:user-profile-block />
        </div>
        <div class="header-bar-icon-button" style="padding-top:15px">
            <livewire:svg-icon icon="separator"/>
        </div>
        <div>
            <livewire:header-dropdown icon="cogwheel" />
        </div>
    </div>
</header>