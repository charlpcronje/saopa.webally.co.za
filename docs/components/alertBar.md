
## Alert Bar Component

The `AlertBar` component is used to display notifications, errors, or warnings to the user. It supports different types (info, success, warning, error) and customizable options for styling and behavior.

### Blade Template
```html
<div>
    @if ($message)
        <div
            x-data="{show: false}"
            x-init="@this.on('alertShown', () => {
                show = true;
                setTimeout(() => {
                    if (!$wire.sticky) {
                        show = false;
                        $wire.dismiss();
                    }
                }, $wire.showTime);
            })"
            x-show="show"
            x-transition:enter="transition ease-out duration-{{ $fadeInTime }}"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-{{ $fadeOutTime }}"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90"
            class="fixed bottom-4 right-4 left-4 p-4 rounded-lg shadow-lg @if($type === 'info') bg-blue-500 border-blue-600 text-white @elseif($type === 'success') bg-green-500 border-green-600 text-white @elseif($type === 'warning') bg-yellow-500 border-yellow-600 text-black @elseif($type === 'error') bg-red-500 border-red-600 text-white @endif"
        >
            <div class="flex justify-between items-center">
                <span>{{ $message }}</span>
                @if ($sticky)
                    <button wire:click="dismiss" class="ml-4 text-white hover:text-gray-200 focus:outline-none">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                @endif
            </div>
        </div>
    @endif
</div>
```

### Class Code

```php
// app/Livewire/AlertBar.php
namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class AlertBar extends Component
{
    public string $message = '';
    public string $type = 'info';
    public bool $sticky = false;
    public int $fadeInTime = 1000;
    public int $fadeOutTime = 1000;
    public int $showTime = 5000;

    protected $listeners = ['showAlert'];

    public function showAlert($message, $type = 'info', $sticky = false, $fadeInTime = 1000, $fadeOutTime = 1000, $showTime = 5000)
    {
        $this->message = $message;
        $this->type = $type;
        $this->sticky = $sticky;
        $this->fadeInTime = $fadeInTime;
        $this->fadeOutTime = $fadeOutTime;
        $this->showTime = $showTime;
        $this->emit('alertShown');
    }

    public function dismiss()
    {
        $this->message = '';
    }

    public function render(): View
    {
        return view('livewire.alert-bar');
    }
}
```

## Usage
✖️To leverage the `AlertBar` component fully in your Livewire application, you can utilize its functionality in various contexts and scenarios. Here are comprehensive examples detailing different ways to use the `AlertBar` component to display alerts based on user actions, system events, or predefined conditions.

### Basic Usage

1. **Showing a Simple Alert**:
   Trigger a basic alert message from any Livewire component by calling the `showAlert` method and specifying only the message.
   ```php
   $this->emitTo('alert-bar', 'showAlert', 'Action completed successfully.');
   ```

### Customized Alert Types

2. **Displaying an Error Alert**:
   For error notifications, specify the type as `'error'`.
   ```php
   $this->emitTo('alert-bar', 'showAlert', 'An error occurred during the process.', 'error');
   ```

3. **Success Notification**:
   To indicate success, use the `'success'` type.
   ```php
   $this->emitTo('alert-bar', 'showAlert', 'Your settings have been saved successfully.', 'success');
   ```

4. **Warning Alert**:
   Highlight warnings with the `'warning'` type.
   ```php
   $this->emitTo('alert-bar', 'showAlert', 'This action will reset your data.', 'warning');
   ```

### Advanced Features

5. **Making an Alert Sticky**:
   For alerts that require user interaction to dismiss, set the `sticky` flag to `true`.
   ```php
   $this->emitTo('alert-bar', 'showAlert', 'You have unsaved changes.', 'warning', true);
   ```

6. **Customizing Duration**:
   Adjust the display duration (`showTime`), fade in (`fadeInTime`), and fade out (`fadeOutTime`) times in milliseconds.
   ```php
   $this->emitTo('alert-bar', 'showAlert', 'Reminder: Update your profile.', 'info', false, 1500, 1500, 10000);
   ```

### Integration with Button Clicks or Other Events

7. **From Button Click in Blade View**:
   Directly trigger an alert on a button click using `wire:click`.
   ```blade
   <button wire:click="$emitTo('alert-bar', 'showAlert', 'Button clicked!', 'info')">Click Me</button>
   ```

### Conditional Alerts

8. **Displaying Alerts Based on Conditions**:
   Use conditional logic within your components to show alerts based on specific application states or user actions.
   ```php
   if ($user->balance < 0) {
       $this->emitTo('alert-bar', 'showAlert', 'Your account balance is negative.', 'error');
   }
   ```

### Using Alerts for Debugging

9. **Debug Information**:
   Temporarily use the alert bar to display debug information during development.
   ```php
   $debugInfo = json_encode(['user_id' => $userId, 'timestamp' => now()]);
   $this->emitTo('alert-bar', 'showAlert', "Debug: {$debugInfo}", 'info');
   ```

### Listening for Alerts in JavaScript

10. **JavaScript Integration**:
    If you have specific JavaScript functions that should be triggered in response to an alert (for example, logging or analytics), you can listen for the `alertShown` event in your component's frontend JavaScript.
    ```javascript
    document.addEventListener('alertShown', function (event) {
        console.log('Alert shown:', event.detail.message);
        // Additional JavaScript actions
    });
    ```

These examples showcase the flexibility and various ways the `AlertBar` component can be used within a Livewire application to communicate information to users effectively. The component can be tailored to fit numerous scenarios, from simple notifications to complex, interactive alerts requiring user acknowledgment.

### Javascript Activation

✖️To trigger the `AlertBar` Livewire component from JavaScript, you can dispatch a browser event that the Livewire component listens for. This involves using the `Livewire.emit` or `Livewire.emitTo` methods from your JavaScript code. Here’s how you can set it up:

### 1. Dispatching a Livewire Event from JavaScript

If you want to trigger the alert from anywhere in your application using JavaScript, you can directly emit an event that the Livewire `AlertBar` component is listening for.

Assuming you have the `showAlert` method in your `AlertBar` component that handles the displaying of the alert, you can emit an event to this method as follows:

```javascript
// Example of emitting an event to the AlertBar component from JavaScript
Livewire.emitTo('alert-bar', 'showAlert', 'Message from JavaScript', 'info', false);
```

This JavaScript code uses `Livewire.emitTo` to target the `AlertBar` component specifically by its name (ensure you're using the correct name as registered in Livewire). It calls the `showAlert` method on that component with the arguments for the message, type, and other parameters your method might accept.

### 2. Using Alpine.js for Integration

If your application uses Alpine.js alongside Livewire, which is common due to their complementary nature, you can also trigger the Livewire event from an Alpine.js component. This can be particularly useful if you're managing some interactive UI elements with Alpine.js and want to trigger an alert based on an action:

```html
<button x-data="{}" @click="$wire.emitTo('alert-bar', 'showAlert', 'Message from Alpine.js', 'success', false)">
    Click Me
</button>
```

In this example, when the button is clicked, the `@click` directive tells Alpine.js to emit an event to the Livewire `AlertBar` component, similar to how you would with pure JavaScript but integrated within an Alpine.js context.

### Note:

- Ensure the Livewire component name used in `emitTo` matches the actual component name or alias.
- The parameters passed in the `emitTo` call should match the expected parameters of your `showAlert` method in the Livewire component.
- For this approach to work seamlessly, Livewire and Alpine.js (if used) should be correctly set up in your application, and the Livewire scripts must be loaded on the page where you're attempting to emit the event from JavaScript.

This method of triggering Livewire components from JavaScript provides a powerful way to bridge client-side actions with server-side Livewire components, enabling dynamic, interactive applications.