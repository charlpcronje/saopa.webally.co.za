
## Header Separator Component

The `HeaderSeparator` component represents a separator between elements in the header bar of the application.

### Blade Template

```html
<!-- resources/views/livewire/header-separator.blade.php -->
<div class="border-l border-gray-600 h-6 mx-2"></div>
```

### Class Code

```php
// app/Http/Livewire/HeaderSeparator.php
namespace App\Http\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class HeaderSeparator extends Component
{
    public function render(): View
    {
        return view('livewire.header-separator');
    }
}
```

### Usage

To include the `HeaderSeparator` component in your header bar, use the following code:

```html
<livewire:header-separator />
```

Generate the `HeaderSeparator` component using the following Artisan command:

```bash
php artisan make:livewire HeaderSeparator
```