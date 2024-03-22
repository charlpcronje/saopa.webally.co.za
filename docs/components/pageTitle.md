# Page Title

### Artisan Command
To generate the Livewire component `PageTitle`, run the following command in your Laravel project's root directory:

```bash
php artisan make:livewire PageTitle
```

This command will create two files:
- A PHP class file at `app/Http/Livewire/PageTitle.php`
- A Blade file at `resources/views/livewire/page-title.blade.php`

### PHP Class Code

**File:** `app/Http/Livewire/PageTitle.php`

```php
<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PageTitle extends Component
{
    // H-L-PageTitle-C1-1-A+
    public $title = 'Default Title'; // Default title value

    public function mount($title = null)
    {
        if ($title) {
            $this->title = $title;
        }
    }

    public function render()
    {
        return view('livewire.page-title');
    }
}
```

### Blade File Code

**File:** `resources/views/livewire/page-title.blade.php`

```blade
<title>{{ $title }}</title>
```

### Usage Instructions (For Documentation)

#### Adding the `PageTitle` Component to a Layout

To include the `PageTitle` component in your application layout (e.g., `layouts/app.blade.php`), add the following Livewire tag within the `<head>` section:

```blade
<livewire:page-title :title="$title ?? 'Home'" />
```

This tag dynamically sets the page title based on the provided `$title` variable. If `$title` is not set, it defaults to "Home".

#### Dynamically Changing the Page Title from a Livewire Component

To dynamically update the page title from another Livewire component, you can emit an event to the `PageTitle` component. First, ensure the `PageTitle` component is included in your layout or parent component. Then, use the following approach in your Livewire component:

```php
$this->emitTo('page-title', 'mount', 'Your New Page Title');
```

This code emits an event specifically targeting the `PageTitle` component, invoking its `mount` method with a new title value.

#### Summary

The `PageTitle` Livewire component offers a flexible and dynamic approach to managing page titles in a Laravel application. By integrating this component into your layouts, you can easily adjust page titles on a per-page basis or dynamically update them in response to application events, enhancing the user experience and SEO.

Let me know if there's anything else you need!