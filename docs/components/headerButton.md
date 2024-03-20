## Header Button Component

The `HeaderButton` component represents a button in the header bar of the application.

### Blade Template

```html
<!-- resources/views/livewire/header-button.blade.php -->
<button class="text-white focus:outline-none">
    <livewire:svg-icon :icon="$icon" class="w-6 h-6" />
</button>
```

### Class Code

```php
// app/Livewire/HeaderButton.php
namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class HeaderButton extends Component
{
    public string $icon;

    public function mount(string $icon)
    {
        $this->icon = $icon;
    }

    public function render(): View
    {
        return view('livewire.header-button');
    }
}
```

### Usage

To include the `HeaderButton` component in your header bar, use the following code:

```html
<livewire:header-button icon="icon-name" />
```

Generate the `HeaderButton` component using the following Artisan command:

```bash
php artisan make:livewire HeaderButton
```
