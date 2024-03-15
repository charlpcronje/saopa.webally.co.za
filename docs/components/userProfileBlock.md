## User Profile Block Component

The `UserProfileBlock` component displays the user profile information in the header bar of the application.

### Blade Template

```html
<!-- resources/views/livewire/user-profile-block.blade.php -->
<div class="flex items-center">
    <livewire:svg-icon icon="profile_circle" class="w-8 h-8 mr-2" />
    <span class="text-white">Administrator</span>
    <livewire:svg-icon icon="green-dot" class="w-2 h-2 ml-2" />
    <span class="text-white">Online</span>
</div>
```

### Class Code

```php
// app/Http/Livewire/UserProfileBlock.php
namespace App\Http\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class UserProfileBlock extends Component
{
    public function render(): View
    {
        return view('livewire.user-profile-block');
    }
}
```

### Usage

To include the `UserProfileBlock` component in your header bar, use the following code:

```html
<livewire:user-profile-block />
```

Generate the `UserProfileBlock` component using the following Artisan command:

```bash
php artisan make:livewire UserProfileBlock
```