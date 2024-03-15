
## Left Navigation Button Component

The `LeftNavButton` component represents a button in the left navigation of the sidebar. It can be used as a standalone button or as a parent button with sub-buttons.

### Blade Template

```html
<!-- resources/views/livewire/left-nav-button.blade.php -->
<div>
    @if ($link)
        <a
            href="{{ $link }}"
            class="flex items-center justify-between w-full px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none"
        >
            <div class="flex items-center">
                <livewire:svg-icon :icon="$icon" class="w-5 h-5 mr-2" />
                <span>{{ $text }}</span>
            </div>
        </a>
    @else
        <button
            wire:click="toggleSubButtons"
            class="flex items-center justify-between w-full px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none"
        >
            <div class="flex items-center">
                <livewire:svg-icon :icon="$icon" class="w-5 h-5 mr-2" />
                <span>{{ $text }}</span>
            </div>
            @if ($hasSubButtons)
                <livewire:svg-icon
                    icon="chevron_down"
                    class="w-4 h-4 ml-2 transition-transform duration-200 transform"
                    :class="{ 'rotate-180': $subButtonsVisible }"
                />
            @endif
        </button>

        @if ($hasSubButtons && $subButtonsVisible)
            <div class="ml-4 mt-1 space-y-1">
                {{ $slot }}
            </div>
        @endif
    @endif
</div>
```

### Class Code

```php
// app/Http/Livewire/LeftNavButton.php
namespace App\Http\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class LeftNavButton extends Component
{
    public string $icon;
    public string $text;
    public string $link;
    public bool $hasSubButtons = false;
    public bool $subButtonsVisible = false;
    public string $buttonId;

    public function mount(string $icon, string $text, string $link = '', bool $hasSubButtons = false)
    {
        $this->icon = $icon;
        $this->text = $text;
        $this->link = $link;
        $this->hasSubButtons = $hasSubButtons;
        $this->buttonId = uniqid('button_');
    }

    public function toggleSubButtons(): void
    {
        $this->subButtonsVisible = !$this->subButtonsVisible;
    }

    public function render(): View
    {
        return view('livewire.left-nav-button');
    }
}
```

### Usage

To include the `LeftNavButton` component in your sidebar, you can use it in the following ways:

1. Standalone button:
```html
<livewire:left-nav-button icon="icon-name" text="Button Text" link="/button-link" />
```

2. Button with sub-buttons:
```html
<livewire:left-nav-button icon="icon-name" text="Button Text" :has-sub-buttons="true">
    <livewire:left-nav-sub-button text="Sub-button Text" link="/sub-button-link" />
    <!-- Add more sub-buttons as needed -->
</livewire:left-nav-button>
```

Generate the `LeftNavButton` component using the following Artisan command:

```bash
php artisan make:livewire LeftNavButton
```