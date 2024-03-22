# Components

- [SvgIcon.php](../../app/Livewire/SvgIcon.php)
- [SearchButton.php](../../app/Livewire/SearchButton.php)
- [LeftNavButton.php](../../app/Livewire/LeftNavButton.php)
- [LeftNavSubButton.php](../../app/Livewire/LeftNavSubButton.php)
- [Sidebar.php](../../app/Livewire/Sidebar.php)
- [Headerbar.php](../../app/Livewire/Headerbar.php)
- [AlertBar.php](../../app/Livewire/AlertBar.php)
- [LoginForm.php](../../app/Livewire/LoginForm.php)
- [JudgeProfile.php](../../app/Livewire/JudgeProfile.php)
- [UserProfile.php](../../app/Livewire/UserProfile.php)
- [EntryTable.php](../../app/Livewire/EntryTable.php)
- [EntryDetails.php](../../app/Livewire/EntryDetails.php)
- [RefurbishingEntryForm.php](../../app/Livewire/RefurbishingEntryForm.php)
- [InteriorDesignEntryForm.php](../../app/Livewire/InteriorDesignEntryForm.php)
- [JudgeRegistrationForm.php](../../app/Livewire/JudgeRegistrationForm.php)
- [UserRegistrationForm.php](../../app/Livewire/UserRegistrationForm.php)
- [PaymentGateway.php](../../app/Livewire/PaymentGateway.php)
- [PageTitle.php](../../app/Livewire/PageTitle.php)
- [EntryCard.php](../../app/Livewire/EntryCard.php)
- [EntryRatingForm.php](../../app/Livewire/EntryRatingForm.php)
- [FileUpload.php](../../app/Livewire/FileUpload.php)
- [PaymentForm.php](../../app/Livewire/PaymentForm.php)
- [ProgressBar.php](../../app/Livewire/ProgressBar.php)
- [CircularGraph.php](../../app/Livewire/CircularGraph.php)
- [HeaderButton.php](../../app/Livewire/HeaderButton.php)
- [HeaderDropdown.php](../../app/Livewire/HeaderDropdown.php)
- [HeaderSeparator.php](../../app/Livewire/HeaderSeparator.php)
- [UserProfileBlock.php](../../app/Livewire/UserProfileBlock.php)
- [GoogleFont.php](../../app/Livewire/GoogleFont.php)
- [Favicon.php](../../app/Livewire/Favicon.php)
- **Judge/**
    - [Dashboard.php](../../app/Livewire/Judge/Dashboard.php)
- **Admin/**
    - [Dashboard.php](../../app/Livewire/Admin/Dashboard.php)
- **User/**
    - [Dashboard.php](../../app/Livewire/User/Dashboard.php)
    - [EntryIndex.php](../../app/Livewire/User/EntryIndex.php)
    - [EntryCreate.php](../../app/Livewire/User/EntryCreate.php)
    - [InvoiceIndex.php](../../app/Livewire/User/InvoiceIndex.php)
    - [InvoiceShow.php](../../app/Livewire/User/InvoiceShow.php)
    - [Register.php](../../app/Livewire/User/Register.php)
- **Entries/**
    - [BuildingEntryForm.php](../../app/Livewire/Entries/BuildingEntryForm.php)
- **Auth/**
    - [ForgotPassword.php](../../app/Livewire/Auth/ForgotPassword.php)
    - [ResetPassword.php](../../app/Livewire/Auth/ResetPassword.php)
    - [VerifyEmail.php](../../app/Livewire/Auth/VerifyEmail.php)
    - [VerifyEmailHandler.php](../../app/Livewire/Auth/VerifyEmailHandler.php)
    - [ResendVerificationEmail.php](../../app/Livewire/Auth/ResendVerificationEmail.php)


# Livewire Components Usage Instructions

This README provides usage instructions for the various Livewire components included in the project.

## Table of Contents

- [Components](#components)
- [Livewire Components Usage Instructions](#livewire-components-usage-instructions)
  - [Table of Contents](#table-of-contents)
    - [SvgIcon](#svgicon)
    - [SearchButton](#searchbutton)
    - [LeftNavButton](#leftnavbutton)
    - [LeftNavSubButton](#leftnavsubbutton)
    - [Sidebar](#sidebar)
    - [Headerbar](#headerbar)
    - [AlertBar](#alertbar)
  - [Alert Bar Component](#alert-bar-component)
    - [Blade Template](#blade-template)
    - [Class Code](#class-code)
    - [Usage](#usage)
    - [LoginForm](#loginform)
    - [JudgeProfile](#judgeprofile)
    - [UserProfile](#userprofile)
    - [EntryTable](#entrytable)
    - [EntryDetails](#entrydetails)
    - [RefurbishingEntryForm](#refurbishingentryform)
    - [InteriorDesignEntryForm](#interiordesignentryform)
    - [JudgeRegistrationForm](#judgeregistrationform)
    - [UserRegistrationForm](#userregistrationform)
    - [PaymentGateway](#paymentgateway)
    - [EntryCard](#entrycard)
    - [EntryRatingForm](#entryratingform)
    - [FileUpload](#fileupload)
    - [PaymentForm](#paymentform)
    - [ProgressBar](#progressbar)
    - [CircularGraph](#circulargraph)
    - [HeaderButton](#headerbutton)
    - [HeaderDropdown](#headerdropdown)
    - [HeaderSeparator](#headerseparator)
    - [UserProfileBlock](#userprofileblock)
    - [GoogleFont](#googlefont)
    - [Favicon](#favicon)
    - [Judge/Dashboard](#judgedashboard)
    - [Admin/Dashboard](#admindashboard)
    - [User/Dashboard](#userdashboard)
    - [User/EntryIndex](#userentryindex)
    - [User/EntryCreate](#userentrycreate)
    - [User/InvoiceIndex](#userinvoiceindex)
    - [User/InvoiceShow](#userinvoiceshow)
    - [User/Register](#userregister)
    - [Entries/BuildingEntryForm](#entriesbuildingentryform)
    - [Auth/ForgotPassword](#authforgotpassword)
    - [Auth/ResetPassword](#authresetpassword)
    - [Auth/VerifyEmail](#authverifyemail)
    - [Auth/VerifyEmailHandler](#authverifyemailhandler)
    - [Auth/ResendVerificationEmail](#authresendverificationemail)

### SvgIcon

The `SvgIcon` component is used to display SVG icons in the application. To use this component, simply include it in your Blade template and pass the required `icon` and optional `class` attributes.

```html
<livewire:svg-icon icon="bell" class="w-6 h-6" />
<livewire:svg-icon icon="chevron_down" class="w-4 h-4 ml-2" />
<livewire:svg-icon icon="search" class="w-5 h-5 mr-2" />
```

### SearchButton

The `SearchButton` component renders a search button that toggles the visibility of a search input field. To use this component, include it in your Blade template.

```html
<livewire:search-button />
```

### LeftNavButton

The `LeftNavButton` component represents a navigation button in the left sidebar. It can be used as a link or a button with sub-buttons. To use this component, include it in your Blade template and pass the required attributes.

```html
<livewire:left-nav-button icon="dashboard" text="Dashboard" link="/dashboard" />
<livewire:left-nav-button icon="users" text="Users" :has-sub-buttons="true">
    <!-- Sub-buttons -->
</livewire:left-nav-button>
```

### LeftNavSubButton

The `LeftNavSubButton` component represents a sub-button within a `LeftNavButton`. To use this component, include it inside a `LeftNavButton` component and pass the required attributes.

```html
<livewire:left-nav-button icon="users" text="Users" :has-sub-buttons="true">
    <livewire:left-nav-sub-button text="All Users" link="/users" />
    <livewire:left-nav-sub-button text="Add User" link="/users/create" />
</livewire:left-nav-button>
```

### Sidebar

The `Sidebar` component represents the left sidebar of the application. To use this component, include it in your Blade template.

```html
<livewire:sidebar />
```

### Headerbar

The `Headerbar` component represents the header bar of the application. To use this component, include it in your Blade template.

```html
<livewire:headerbar />
```

### AlertBar

The `AlertBar` component displays alert messages in the application. To use this component, include it in your Blade template and dispatch the `showAlert` event with the required parameters.


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

### Usage

To include the `AlertBar` component in your layout, use the following code:

```html
<livewire:alert-bar />
```

To show an alert bar, emit the `showAlert` event from any component or controller:

```php
$this->emit('showAlert', 'This is an info alert.');
$this->emit('showAlert', 'This is a success alert.', 'success');
$this->emit('showAlert', 'This is a sticky warning alert.', 'warning', true);
$this->emit('showAlert', 'This is an error alert with custom times.', 'error', false, 500, 500, 3000);
```

Generate the `AlertBar` component using the following Artisan command:

```bash
php artisan make:livewire AlertBar
```

```html
<livewire:alert-bar />

<script>
    window.livewire.emit('showAlert', 'Message', 'success', false, 1000, 1000, 5000);
</script>
```

### LoginForm

The `LoginForm` component represents the login form of the application. To use this component, include it in your Blade template.

```html
<livewire:login-form />
```

### JudgeProfile

The `JudgeProfile` component represents the profile page for judges. To use this component, include it in your Blade template.

```html
<livewire:judge-profile />
```

### UserProfile

The `UserProfile` component represents the profile page for users. To use this component, include it in your Blade template.

```html
<livewire:user-profile />
```

### EntryTable

The `EntryTable` component displays a table of entries. To use this component, include it in your Blade template.

```html
<livewire:entry-table />
```

### EntryDetails

The `EntryDetails` component displays the details of a specific entry. To use this component, include it in your Blade template and pass the required `entryId` parameter.

```html
<livewire:entry-details :entry-id="$entryId" />
```

### RefurbishingEntryForm

The `RefurbishingEntryForm` component represents the form for submitting a refurbishing entry. To use this component, include it in your Blade template.

```html
<livewire:refurbishing-entry-form />
```

### InteriorDesignEntryForm

The `InteriorDesignEntryForm` component represents the form for submitting an interior design entry. To use this component, include it in your Blade template.

```html
<livewire:interior-design-entry-form />
```

### JudgeRegistrationForm

The `JudgeRegistrationForm` component represents the registration form for judges. To use this component, include it in your Blade template.

```html
<livewire:judge-registration-form />
```

### UserRegistrationForm

The `UserRegistrationForm` component represents the registration form for users. To use this component, include it in your Blade template.

```html
<livewire:user-registration-form />
```

### PaymentGateway

The `PaymentGateway` component provides a payment gateway integration. To use this component, include it in your Blade template.

```html
<livewire:payment-gateway />
```

### EntryCard

The `EntryCard` component represents a card displaying entry information. To use this component, include it in your Blade template and pass the required `entry` parameter.

```html
<livewire:entry-card :entry="$entry" />
```

### EntryRatingForm

The `EntryRatingForm` component represents the form for rating an entry. To use this component, include it in your Blade template and pass the required `entry` parameter.

```html
<livewire:entry-rating-form :entry="$entry" />
```

### FileUpload

The `FileUpload` component provides a file upload functionality. To use this component, include it in your Blade template.

```html
<livewire:file-upload />
```

### PaymentForm

The `PaymentForm` component represents a payment form. To use this component, include it in your Blade template.

```html
<livewire:payment-form />
```

### ProgressBar

The `ProgressBar` component displays a progress bar. To use this component, include it in your Blade template and pass the required `progress` parameter.

```html
<livewire:progress-bar :progress="$progress" />
```

### CircularGraph

The `CircularGraph` component displays a circular graph. To use this component, include it in your Blade template and pass the required `percentage` parameter.

```html
<livewire:circular-graph :percentage="$percentage" />
```

### HeaderButton

The `HeaderButton` component represents a button in the header. To use this component, include it in your Blade template and pass the required `icon` parameter.

```html
<livewire:header-button icon="bell" />
```

### HeaderDropdown

The `HeaderDropdown` component represents a dropdown menu in the header. To use this component, include it in your Blade template and pass the required `icon` parameter.

```html
<livewire:header-dropdown icon="user" />
```

### HeaderSeparator

The `HeaderSeparator` component represents a separator in the header. To use this component, include it in your Blade template.

```html
<livewire:header-separator />
```

### UserProfileBlock

The `UserProfileBlock` component displays the user profile information in a block. To use this component, include it in your Blade template.

```html
<livewire:user-profile-block />
```

### GoogleFont

The `GoogleFont` component allows you to include Google Fonts in your application. To use this component, include it in your Blade template and pass the required `font` and `weights` parameters.

```html
<livewire:google-font font="Roboto" weights="400,700" />
```

### Favicon

The `Favicon` component allows you to include a favicon in your application. To use this component, include it in your Blade template.

```html
<livewire:favicon />
```

### Judge/Dashboard

The `Judge/Dashboard` component represents the dashboard for judges. To use this component, include it in your Blade template.

```html
<livewire:judge.dashboard />
```

### Admin/Dashboard

The `Admin/Dashboard` component represents the dashboard for administrators. To use this component, include it in your Blade template.

```html
<livewire:admin.dashboard />
```

### User/Dashboard

The `User/Dashboard` component represents the dashboard for users. To use this component, include it in your Blade template.

```html
<livewire:user.dashboard />
```

### User/EntryIndex

The `User/EntryIndex` component displays the index page for user entries. To use this component, include it in your Blade template.

```html
<livewire:user.entry-index />
```

### User/EntryCreate

The `User/EntryCreate` component represents the form for creating a new user entry. To use this component, include it in your Blade template.

```html
<livewire:user.entry-create />
```

### User/InvoiceIndex

The `User/InvoiceIndex` component displays the index page for user invoices. To use this component, include it in your Blade template.

```html
<livewire:user.invoice-index />
```

### User/InvoiceShow

The `User/InvoiceShow` component displays the details of a specific user invoice. To use this component, include it in your Blade template.

```html
<livewire:user.invoice-show />
```

### User/Register

The `User/Register` component represents the registration form for users. To use this component, include it in your Blade template.

```html
<livewire:user.register />
```

### Entries/BuildingEntryForm

The `Entries/BuildingEntryForm` component represents the form for submitting a building entry. To use this component, include it in your Blade template.

```html
<livewire:entries.building-entry-form />
```

### Auth/ForgotPassword

The `Auth/ForgotPassword` component represents the forgot password form. To use this component, include it in your Blade template.

```html
<livewire:auth.forgot-password />
```

### Auth/ResetPassword

The `Auth/ResetPassword` component represents the reset password form. To use this component, include it in your Blade template.

```html
<livewire:auth.reset-password />
```

### Auth/VerifyEmail

The `Auth/VerifyEmail` component represents the email verification page. To use this component, include it in your Blade template.

```html
<livewire:auth.verify-email />
```

### Auth/VerifyEmailHandler

The `Auth/VerifyEmailHandler` component handles the email verification process. To use this component, include it in your Blade template.

```html
<livewire:auth.verify-email-handler />
```

### Auth/ResendVerificationEmail

The `Auth/ResendVerificationEmail` component allows users to resend the email verification link. To use this component, include it in your Blade template.

```html
<livewire:auth.resend-verification-email />
```

These are the usage instructions for the Livewire components included in the project. Make sure to include the necessary component tags in your Blade templates and pass the required attributes as described in each component's usage instructions.
