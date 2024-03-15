<?php
// app/Livewire/SvgIcon.php
namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class SvgIcon extends Component
{
    public string $icon;
    public string $class;

    protected $validIcons = [
        'bell',
        'chevron_down',
        'cogwheel',
        'dashboard_olive',
        'dashboard_white',
        'flag',
        'green-dot',
        'hamburger',
        'list',
        'mail',
        'profile_circle',
        'search',
        'separator',
    ];

    public function mount(string $icon, string $class = '')
    {
        $this->icon = $icon;
        $this->class = $class;
    }

    public function render(): View
    {
        $icon = in_array($this->icon, $this->validIcons) ? $this->icon : 'default';
        return view('livewire.svg-icon', compact('icon'));
    }
}

/** Usage 
 * <livewire:svg-icon icon="bell" class="w-6 h-6" />
 * <livewire:svg-icon icon="chevron_down" class="w-4 h-4 ml-2" />
 * <livewire:svg-icon icon="search" class="w-5 h-5 mr-2" />
 * */