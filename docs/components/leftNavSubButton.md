
## Left Navigation Sub-Button Component

The `LeftNavSubButton` component represents a sub-button within a parent `LeftNavButton` component.

### Blade Template

```html
<!-- resources/views/livewire/left-nav-sub-button.blade.php -->
<a
    href="{{ $link }}"
    class="flex items-center px-4 py-2 text-gray-400 hover:text-white hover:bg-gray-700"
>
    <livewire:svg-icon :icon="$icon" class="w-2 h-2 mr-2" />
    <span>{{ $text }}</span>
</a>
```

### Class Code

```php
// app/Http/Livewire/LeftNavSubButton.php
namespace App\Http\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class LeftNavSubButton extends Component
{
    public string $icon;
    public string $text;
    public string $link;

    public function mount(string $icon = 'dot', string $text = '', string $link = '')
    {
        $this->icon = $icon;
        $this->text = $text;
        $this->link = $link;
    }

    public function render(): View
    {
        return view('livewire.left-nav-sub-button');
    }
}
```

### Usage

To include the `LeftNavSubButton` component within a `LeftNavButton` component, use the following code:

```html
<livewire:left-nav-sub-button text="Sub-button Text" link="/sub-button-link" />
```

Generate the `LeftNavSubButton` component using the following Artisan command:

```bash
php artisan make:livewire LeftNavSubButton
```