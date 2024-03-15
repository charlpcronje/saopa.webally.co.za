
## Header Dropdown Component

The `HeaderDropdown` component represents a dropdown menu in the header bar of the application.

### Blade Template

```html
<!-- resources/views/livewire/header-dropdown.blade.php -->
<div class="relative">
    <button class="text-white focus:outline-none" wire:click="toggleDropdown">
        <livewire:svg-icon :icon="$icon" class="w-6 h-6" />
    </button>

    @if ($isOpen)
        <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10">
            <!-- Dropdown menu items -->
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Option 1</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Option 2</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Option 3</a>
        </div>
    @endif
</div>
```

### Class Code

```php
// app/Http/Livewire/HeaderDropdown.php
namespace App\Http\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class HeaderDropdown extends Component
{
    public string $icon;
    public bool $isOpen = false;

    public function mount(string $icon)
    {
        $this->icon = $icon;
    }

    public function toggleDropdown(): void
    {
        $this->isOpen = !$this->isOpen;
    }

    public function render(): View
    {
        return view('livewire.header-dropdown');
    }
}
```

### Usage

To include the `HeaderDropdown` component in your header bar, use the following code:

```html
<livewire:header-dropdown icon="icon-name" />
```

Generate the `HeaderDropdown` component using the following Artisan command:

```bash
php artisan make:livewire HeaderDropdown
```