## Analysis Report

| No. | File | Lines | Words | AI Tokens |
| --- | ---- | ----- | ----- | --------- |
| 1 | ./SvgIcon.php | 46 | 96 | 211 |
| 2 | ./SearchButton.php | 21 | 32 | 55 |
| 3 | ./LeftNavButton.php | 35 | 88 | 161 |
| 4 | ./LeftNavSubButton.php | 25 | 57 | 100 |
| 5 | ./Sidebar.php | 15 | 23 | 36 |
| 6 | ./Headerbar.php | 14 | 20 | 31 |
| 7 | ./AlertBar.php | 39 | 104 | 194 |
| 8 | ./LoginForm.php | 39 | 77 | 209 |
| 9 | ./JudgeProfile.php | 14 | 20 | 31 |
| 10 | ./UserProfile.php | 13 | 20 | 38 |
| 11 | ./EntryTable.php | 16 | 26 | 62 |
| 12 | ./EntryDetails.php | 23 | 37 | 72 |
| 13 | ./RefurbishingEntryForm.php | 47 | 97 | 171 |
| 14 | ./InteriorDesignEntryForm.php | 47 | 96 | 170 |
| 15 | ./JudgeRegistrationForm.php | 57 | 120 | 277 |
| 16 | ./UserRegistrationForm.php | 39 | 74 | 159 |
| 17 | ./PaymentGateway.php | 58 | 127 | 278 |
| 18 | ./EntryCard.php | 22 | 34 | 57 |
| 19 | ./EntryRatingForm.php | 48 | 84 | 198 |
| 20 | ./FileUpload.php | 37 | 71 | 132 |
| 21 | ./PaymentForm.php | 60 | 141 | 280 |
| 22 | ./ProgressBar.php | 21 | 30 | 52 |
| 23 | ./CircularGraph.php | 21 | 30 | 52 |
| 24 | ./HeaderButton.php | 21 | 35 | 59 |
| 25 | ./HeaderDropdown.php | 27 | 49 | 86 |
| 26 | ./HeaderSeparator.php | 16 | 23 | 36 |
| 27 | ./UserProfileBlock.php | 14 | 20 | 31 |
| 28 | ./GoogleFont.php | 28 | 54 | 102 |
| 29 | ./Favicon.php | 15 | 27 | 38 |
| 30 | ./Judge/Dashboard.php | 28 | 45 | 110 |
| 31 | ./Admin/Dashboard.php | 46 | 100 | 273 |
| 32 | ./User/Dashboard.php | 34 | 66 | 293 |
| 33 | ./User/EntryIndex.php | 14 | 18 | 29 |
| 34 | ./User/EntryCreate.php | 14 | 18 | 29 |
| 35 | ./User/InvoiceIndex.php | 14 | 18 | 29 |
| 36 | ./User/InvoiceShow.php | 14 | 18 | 29 |
| 37 | ./User/Register.php | 47 | 94 | 266 |
| 38 | ./Entries/BuildingEntryForm.php | 114 | 267 | 677 |
| 39 | ./Auth/ForgotPassword.php | 14 | 18 | 29 |
| 40 | ./Auth/ResetPassword.php | 14 | 18 | 29 |
| 41 | ./Auth/VerifyEmail.php | 14 | 18 | 29 |
| 42 | ./Auth/VerifyEmailHandler.php | 14 | 18 | 29 |
| 43 | ./Auth/ResendVerificationEmail.php | 20 | 30 | 76 |
|  | Total | 1279 | 2458 | 5305 |


## Total Counts Across All Files. Tokenizer Used: NLTK's Punkt Tokenizer
- Total Lines: 1279
- Total Words: 2458
- Total AI Tokens: 5305

## File: SvgIcon.php
```php
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
```

## File: SearchButton.php
```php
<?php
// app/Livewire/SearchButton.php
namespace App\Livewire;

use Livewire\Component;

class SearchButton extends Component
{
    public $showSearchInput = false;

    public function toggleSearchInput()
    {
        $this->showSearchInput = !$this->showSearchInput;
    }

    public function render()
    {
        return view('livewire.search-button');
    }
}

```

## File: LeftNavButton.php
```php
<?php
// app/Livewire/LeftNavButton.php

namespace App\Livewire;

use Livewire\Component;

class LeftNavButton extends Component
{
    public string $icon;
    public string $text;
    public string $link;
    public bool $hasSubButtons = false;
    public bool $isExpanded = false;
    public $subButtons = [];

    public function mount(string $text, string $link = '', bool $hasSubButtons = false, $subButtons = [], string $icon = '')
    {
        $this->icon = $icon;
        $this->text = $text;
        $this->link = $link;
        $this->hasSubButtons = $hasSubButtons;
        $this->subButtons = $subButtons;
    }

    public function toggleSubButtons(): void
    {
        $this->isExpanded = !$this->isExpanded;
    }

    public function render()
    {
        return view('livewire.left-nav-button');
    }
}
```

## File: LeftNavSubButton.php
```php
<?php
// app/Livewire/LeftNavSubButton.php
namespace App\Livewire;

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

## File: Sidebar.php
```php
<?php
// app/Livewire/Sidebar.php
namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class Sidebar extends Component
{
    public function render(): View
    {
        return view('livewire.sidebar');
    }
}

```

## File: Headerbar.php
```php
<?php
// app/Livewire/Headerbar.php
namespace App\Livewire;

use Livewire\Component;

class Headerbar extends Component
{
    public function render()
    {
        return view('livewire.headerbar');
    }
}

```

## File: AlertBar.php
```php
<?php
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
        $this->dispatch('alertShown');
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

## File: LoginForm.php
```php
<?php
// app/Livewire/LoginForm.php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Component
{
    public $email = "";
    public $password = "";
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $user = Auth::user();
            if ($user->hasRole('admin')) {
                $this->redirect(route('admin.dashboard'));
            } elseif ($user->hasRole('judge')) {
                $this->redirect(route('judge.dashboard'));
            } else {
                $this->redirect(route('user.dashboard'));
            }
        }
        $this->dispatch('showAlert', 'Invalid credentials', 'error');
    }

    public function render()
    {
        return view('livewire.login-form')->layout('layouts.guest');
    }
}
```

## File: JudgeProfile.php
```php
<?php
// app/Livewire/JudgeProfile.php
namespace App\Livewire;

use Livewire\Component;

class JudgeProfile extends Component
{
    public function render()
    {
        return view('livewire.judge-profile');
    }
}

```

## File: UserProfile.php
```php
<?php
// app/Livewire/UserProfile.php
namespace App\Livewire;

use Livewire\Component;

class UserProfile extends Component
{
    public function render()
    {
        return view('livewire.user-profile')->layout('layouts.app');
    }
}
```

## File: EntryTable.php
```php
<?php
// app/Livewire/EntryTable.php
namespace App\Http\Livewire\Entries;

use Livewire\Component;
use App\Models\Entry;

class EntryTable extends Component
{
    public function render()
    {
        $entries = Entry::with('user')->latest()->paginate(10);

        return view('livewire.entries.entry-table', compact('entries'));
    }
}
```

## File: EntryDetails.php
```php
<?php
// app/Livewire/EntryDetails.php
namespace App\Http\Livewire\Entries;

use Livewire\Component;
use App\Models\Entry;

class EntryDetails extends Component
{
    public $entryId;
    public $entry;

    public function mount($entryId)
    {
        $this->entryId = $entryId;
        $this->entry = Entry::findOrFail($entryId);
    }

    public function render()
    {
        return view('livewire.entries.entry-details');
    }
}
```

## File: RefurbishingEntryForm.php
```php
<?php
// app/Livewire/RefurbishingEntryForm.php
namespace App\Livewire\Entries;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Entry;

class RefurbishingEntryForm extends Component
{
    use WithFileUploads;

    // Declare properties for form fields
    public $firstName;
    public $surname;
    // ...

    protected $rules = [
        'firstName' => 'required',
        'surname' => 'required',
        // ...
    ];

    public function render()
    {
        return view('livewire.entries.refurbishing-entry-form');
    }

    public function submit()
    {
        $this->validate();

        // Process and store the entry data
        $entry = Entry::create([
            'first_name' => $this->firstName,
            'surname' => $this->surname,
            // ...
        ]);

        // Process and store the uploaded files
        // ...

        // Redirect or show success message
        session()->flash('success', 'Refurbishing entry submitted successfully.');
        $this->reset();
    }
}
```

## File: InteriorDesignEntryForm.php
```php
<?php

namespace App\Http\Livewire\Entries;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Entry;

class InteriorDesignEntryForm extends Component
{
    use WithFileUploads;

    // Declare properties for form fields
    public $firstName;
    public $surname;
    // ...

    protected $rules = [
        'firstName' => 'required',
        'surname' => 'required',
        // ...
    ];

    public function render()
    {
        return view('livewire.entries.interior-design-entry-form');
    }

    public function submit()
    {
        $this->validate();

        // Process and store the entry data
        $entry = Entry::create([
            'first_name' => $this->firstName,
            'surname' => $this->surname,
            // ...
        ]);

        // Process and store the uploaded files
        // ...

        // Redirect or show success message
        session()->flash('success', 'Interior design entry submitted successfully.');
        $this->reset();
    }
}
```

## File: JudgeRegistrationForm.php
```php
<?php

namespace App\Http\Livewire\Judges;

use Livewire\Component;
use App\Models\Judge;

class JudgeRegistrationForm extends Component
{
    public $email;
    public $password;
    public $confirmPassword;
    public $firstName;
    public $surname;
    public $company;
    public $workPhone;
    public $faxNumber;
    public $mobileNumber;

    protected $rules = [
        'email' => 'required|email|unique:judges',
        'password' => 'required|min:8',
        'confirmPassword' => 'required|same:password',
        'firstName' => 'required',
        'surname' => 'required',
        'company' => 'required',
        'workPhone' => 'required|numeric',
        'faxNumber' => 'nullable|numeric',
        'mobileNumber' => 'required|numeric',
    ];

    public function render()
    {
        return view('livewire.judges.judge-registration-form');
    }

    public function submit()
    {
        $this->validate();

        // Create the judge record
        $judge = Judge::create([
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'first_name' => $this->firstName,
            'surname' => $this->surname,
            'company' => $this->company,
            'work_phone' => $this->workPhone,
            'fax_number' => $this->faxNumber,
            'mobile_number' => $this->mobileNumber,
        ]);

        // Redirect or show success message
        session()->flash('success', 'Judge registered successfully.');
        $this->reset();
    }
}
```

## File: UserRegistrationForm.php
```php
<?php
// app/Livewire/UserRegistrationForm.php
namespace App\Http\Livewire\Users;

use Livewire\Component;
use App\Models\User;

class UserRegistrationForm extends Component
{
    public $email;
    public $password;
    public $confirmPassword;

    protected $rules = [
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
        'confirmPassword' => 'required|same:password',
    ];

    public function render()
    {
        return view('livewire.users.user-registration-form');
    }

    public function submit()
    {
        $this->validate();

        // Create the user record
        $user = User::create([
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        // Redirect or show success message
        session()->flash('success', 'User registered successfully.');
        $this->reset();
    }
}
```

## File: PaymentGateway.php
```php
<?php
// app/Livewire/PaymentGateway.php
namespace App\Livewire\Payments;

use Livewire\Component;
use App\Models\Payment;
use App\Services\PeachPaymentsService;

class PaymentGateway extends Component
{
    public $paymentAmount;
    public $cardNumber;
    public $cardExpiry;
    public $cardCvv;

    protected $rules = [
        'paymentAmount' => 'required|numeric',
        'cardNumber' => 'required|numeric',
        'cardExpiry' => 'required|date_format:m/y',
        'cardCvv' => 'required|numeric|digits:3',
    ];

    public function render()
    {
        return view('livewire.payments.payment-gateway');
    }

    public function submit()
    {
        $this->validate();

        // Process the payment using Peach Payments API
        $peachPayments = new PeachPaymentsService();
        $paymentResponse = $peachPayments->processPayment(
            $this->paymentAmount,
            $this->cardNumber,
            $this->cardExpiry,
            $this->cardCvv
        );

        if ($paymentResponse->isSuccessful()) {
            // Create the payment record
            $payment = Payment::create([
                'entry_id' => session('entryId'),
                'payment_amount' => $this->paymentAmount,
                'payment_status' => 'paid',
                'transaction_id' => $paymentResponse->getTransactionId(),
                'payment_date' => now(),
            ]);

            // Redirect or show success message
            session()->flash('success', 'Payment processed successfully.');
            $this->reset();
        } else {
            // Handle payment failuresession()->flash('error', 'Payment processing failed. Please try again.');
        }
    }
}
```

## File: EntryCard.php
```php
<?php
// app/Livewire/EntryCard.php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Entry;

class EntryCard extends Component
{
    public Entry $entry;

    public function mount(Entry $entry)
    {
        $this->entry = $entry;
    }

    public function render()
    {
        return view('livewire.entry-card');
    }
}
```

## File: EntryRatingForm.php
```php
<?php
// app/Livewire/EntryRatingForm.php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Entry;
use App\Models\Criteria;
use App\Models\Rating;

class EntryRatingForm extends Component
{
    public Entry $entry;
    public $ratings = [];

    protected $rules = [
        'ratings.*' => 'required|integer|between:1,10',
    ];

    public function mount(Entry $entry)
    {
        $this->entry = $entry;
    }

    public function submitRating()
    {
        $this->validate();

        foreach ($this->ratings as $criterionId => $score) {
            Rating::create([
                'entry_id' => $this->entry->id,
                'criterion_id' => $criterionId,
                'score' => $score,
                'judge_id' => auth()->user()->id,
            ]);
        }

        $this->reset('ratings');

        $this->emit('ratingSubmitted');
    }

    public function render()
    {
        $criteria = Criteria::all();
        return view('livewire.entry-rating-form', compact('criteria'));
    }
}
```

## File: FileUpload.php
```php
<?php
// app/Livewire/FileUpload.php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FileUpload extends Component
{
    use WithFileUploads;

    public $file;

    protected $rules = [
        'file' => 'required|file|max:10240', // Max file size of 10MB
    ];

    public function upload()
    {
        $this->validate();

        // Move the uploaded file to the desired location
        $path = $this->file->store('uploads');

        // Perform any additional actions or database operations

        session()->flash('success', 'File uploaded successfully.');

        $this->reset('file');
    }

    public function render()
    {
        return view('livewire.file-upload');
    }
}
```

## File: PaymentForm.php
```php
<?php
// app/Livewire/PaymentForm.php

namespace App\Livewire;

use Livewire\Component;
use App\Services\PaymentGateway;

class PaymentForm extends Component
{
    public $amount;
    public $cardNumber;
    public $expiryMonth;
    public $expiryYear;
    public $cvv;

    protected $rules = [
        'amount' => 'required|numeric|min:0',
        'cardNumber' => 'required|string',
        'expiryMonth' => 'required|string|size:2',
        'expiryYear' => 'required|string|size:4',
        'cvv' => 'required|string|size:3',
    ];

    public function processPayment()
    {
        $this->validate();

        // Create an instance of the payment gateway service
        $paymentGateway = new PaymentGateway();

        // Prepare the payment data
        $paymentData = [
            'amount' => $this->amount,
            'cardNumber' => $this->cardNumber,
            'expiryMonth' => $this->expiryMonth,
            'expiryYear' => $this->expiryYear,
            'cvv' => $this->cvv,
        ];

        // Process the payment through the payment gateway
        $response = $paymentGateway->processPayment($paymentData);

        if ($response->isSuccessful()) {
            // Payment successful, perform any additional actions or database operations

            session()->flash('success', 'Payment processed successfully.');

            $this->reset();
        } else {
            // Payment failed, display error message
            session()->flash('error', 'Payment processing failed. Please try again.');
        }
    }

    public function render()
    {
        return view('livewire.payment-form');
    }
}
```

## File: ProgressBar.php
```php
<?php
// app/Livewire/ProgressBar.php

namespace App\Livewire;

use Livewire\Component;

class ProgressBar extends Component
{
    public $progress;

    public function mount($progress)
    {
        $this->progress = $progress;
    }

    public function render()
    {
        return view('livewire.progress-bar');
    }
}
```

## File: CircularGraph.php
```php
<?php
// app/Livewire/CircularGraph.php

namespace App\Livewire;

use Livewire\Component;

class CircularGraph extends Component
{
    public $percentage;

    public function mount($percentage)
    {
        $this->percentage = $percentage;
    }

    public function render()
    {
        return view('livewire.circular-graph');
    }
}
```

## File: HeaderButton.php
```php
<?php
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

## File: HeaderDropdown.php
```php
<?php
// app/Livewire/HeaderDropdown.php
namespace App\Livewire;

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

## File: HeaderSeparator.php
```php
<?php

// app/Livewire/HeaderSeparator.php
namespace App\Livewire;

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

## File: UserProfileBlock.php
```php
<?php
// app/Livewire/UserProfileBlock.php
namespace App\Livewire;

use Livewire\Component;

class UserProfileBlock extends Component
{
    public function render()
    {
        return view('livewire.user-profile-block');
    }
}

```

## File: GoogleFont.php
```php
<?php
// app/Livewire/GoogleFont.php
namespace App\Livewire;

use Livewire\Component;
use Illuminate\Validation\ValidationException;

class GoogleFont extends Component
{
    public $font;
    public $weights;

    public function mount()
    {
        if (empty($this->font) || empty($this->weights)) {
            throw ValidationException::withMessages([
                'font' => 'The font property is required.',
                'weights' => 'The weights property is required.',
            ]);
        }
    }

    public function render()
    {
        return view('livewire.google-font');
    }
}

```

## File: Favicon.php
```php
<?php
// app/Livewire/Favicon.php
namespace App\Livewire;

use Livewire\Component;

class Favicon extends Component
{
    // Render method to return the view
    public function render()
    {
        return view('livewire.favicon');
    }
}

```

## File: Judge/Dashboard.php
```php
<?php
// app/Livewire/Judge/Dashboard.php

namespace App\Livewire\Judge;

use Livewire\Component;
use App\Models\Entry;
use App\Models\Criteria;

class Dashboard extends Component
{
    public $assignedEntries;
    public $ratingCriteria;

    public function mount()
    {
        $this->assignedEntries = Entry::whereHas('judges', function ($query) {
            $query->where('user_id', auth()->user()->id);
        })->get();
        
        $this->ratingCriteria = Criteria::all();
    }

    public function render()
    {
        return view('livewire.judge.dashboard');
    }
}
```

## File: Admin/Dashboard.php
```php
<?php
// app/Livewire/Admin/Dashboard.php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Entry;
use App\Models\Invoice;
use App\Models\Judge;
use App\Models\User;

class Dashboard extends Component
{
    public $totalEntries;
    public $entriesPercentage;
    public $totalInvoices;
    public $invoicesPercentage;
    public $totalJudges;
    public $judgesPercentage;
    public $totalUsers;
    public $usersPercentage;
    public $recentEntries;

    public function mount()
    {
        $this->totalEntries = Entry::count();
        $this->entriesPercentage = $this->calculatePercentage($this->totalEntries, Entry::count());
        $this->totalInvoices = Invoice::count();
        $this->invoicesPercentage = $this->calculatePercentage($this->totalInvoices, Invoice::count());
        $this->totalJudges = Judge::count();
        $this->judgesPercentage = $this->calculatePercentage($this->totalJudges, Judge::count());
        $this->totalUsers = User::count();
        $this->usersPercentage = $this->calculatePercentage($this->totalUsers, User::count());
        $this->recentEntries = Entry::latest()->take(5)->get();
    }

    private function calculatePercentage($value, $total)
    {
        return $total > 0 ? round(($value / $total) * 100) : 0;
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
```

## File: User/Dashboard.php
```php
<?php
// app/Livewire/User/Dashboard.php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Entry;
use App\Models\Invoice;


class Dashboard extends Component
{
    
    public $entries;
    public $invoices;
    public $paymentHistory;

    public function mount()
    {
        $this->entries = Entry::where('user_id', auth()->user()->id)->latest()->take(5)->get();
        $this->invoices = Invoice::where('user_id', auth()->user()->id)->latest()->take(5)->get();
    }

    #[Layout('layouts.dashboard')]
    public function render()
    {
        $totalEntries = Entry::where('user_id', auth()->user()->id)->count();
        $completedEntries = Entry::where('user_id', auth()->user()->id)->where('status', 'completed')->count();
        $totalInvoices = Invoice::where('user_id', auth()->user()->id)->count();
        $paidInvoices = Invoice::where('user_id', auth()->user()->id)->where('status', 'paid')->count();

        return view('livewire.user.dashboard', compact('totalEntries', 'completedEntries', 'totalInvoices', 'paidInvoices'));
    }
}
```

## File: User/EntryIndex.php
```php
<?php

namespace App\Livewire\User;

use Livewire\Component;

class EntryIndex extends Component
{
    public function render()
    {
        return view('livewire.entry-index');
    }
}

```

## File: User/EntryCreate.php
```php
<?php

namespace App\Livewire\User;

use Livewire\Component;

class EntryCreate extends Component
{
    public function render()
    {
        return view('livewire.entry-create');
    }
}

```

## File: User/InvoiceIndex.php
```php
<?php

namespace App\Livewire\User;

use Livewire\Component;

class InvoiceIndex extends Component
{
    public function render()
    {
        return view('livewire.invoice-index');
    }
}

```

## File: User/InvoiceShow.php
```php
<?php

namespace App\Livewire\User;

use Livewire\Component;

class InvoiceShow extends Component
{
    public function render()
    {
        return view('livewire.invoice-show');
    }
}

```

## File: User/Register.php
```php
<?php
// app/Livewire/User/Register.php
namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class Register extends Component
{
    public $name, $surname, $email, $password, $password_confirmation;

    protected $rules = [
        'name' => ['required', 'string', 'max:255'],
        'surname' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'min:8', 'confirmed'],
    ];

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'surname' => $this->surname,
            'email' => strtolower($this->email),
            'password' => Hash::make($this->password),
            'role_id' => Role::where('name', 'user')->first()->id,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.user.register')->layout('components.layouts.blank');
    }
}

```

## File: Entries/BuildingEntryForm.php
```php
<?php

namespace App\Livewire\Entries;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Entry;

class BuildingEntryForm extends Component
{
    use WithFileUploads;

    public $firstName;
    public $surname;
    public $company;
    public $phoneNumber;
    public $email;
    public $entryTitle;
    public $projectCategory;
    public $ownerClientCompany;
    public $developerName;
    public $completionDate;
    public $capitalInvestment;
    public $economicReturn;
    public $streetAddress;
    public $architecturalDrawings;
    public $generalImages;
    public $otherImages;
    public $beforeImages;
    public $beeStatus;
    public $tenantProfile;
    public $overallImpact;
    public $designConcept;
    public $tenantConvenience;
    public $functionality;
    public $facilities;
    public $environmentalSustainability;
    public $socialTransformation;

    protected $rules = [
        'firstName' => 'required',
        'surname' => 'required',
        'company' => 'required',
        'phoneNumber' => 'required|numeric',
        'email' => 'required|email',
        'entryTitle' => 'required',
        'projectCategory' => 'required',
        'ownerClientCompany' => 'required',
        'developerName' => 'required',
        'completionDate' => 'required|date',
        'capitalInvestment' => 'required|numeric',
        'economicReturn' => 'required|numeric',
        'streetAddress' => 'required',
        'architecturalDrawings' => 'required|mimes:pdf,dwg|max:10240',
        'generalImages' => 'required|image|max:5120',
        'otherImages.*' => 'nullable|image|max:5120',
        'beforeImages.*' => 'nullable|image|max:5120',
        'beeStatus' => 'required|mimes:pdf|max:5120',
        'tenantProfile' => 'required|mimes:pdf|max:5120',
        'overallImpact' => 'required',
        'designConcept' => 'required',
        'tenantConvenience' => 'required',
        'functionality' => 'required',
        'facilities' => 'required',
        'environmentalSustainability' => 'required',
        'socialTransformation' => 'required',
    ];

    public function render()
    {
        return view('livewire.entries.building-entry-form');
    }

    public function submit()
    {
        $this->validate();

        // Process and store the entry data
        $entry = Entry::create([
            'first_name' => $this->firstName,
            'surname' => $this->surname,
            'company' => $this->company,
            'phone_number' => $this->phoneNumber,
            'email' => $this->email,
            'entry_title' => $this->entryTitle,
            'project_category' => $this->projectCategory,
            'owner_client_company' => $this->ownerClientCompany,
            'developer_name' => $this->developerName,
            'completion_date' => $this->completionDate,
            'capital_investment' => $this->capitalInvestment,
            'economic_return' => $this->economicReturn,
            'street_address' => $this->streetAddress,
            'overall_impact' => $this->overallImpact,
            'design_concept' => $this->designConcept,
            'tenant_convenience' => $this->tenantConvenience,
            'functionality' => $this->functionality,
            'facilities' => $this->facilities,
            'environmental_sustainability' => $this->environmentalSustainability,
            'social_transformation' => $this->socialTransformation,
        ]);

        // Process and store the uploaded files
        $this->architecturalDrawings->store('architectural-drawings', 'public');
        $this->generalImages->store('general-images', 'public');
        $this->otherImages->store('other-images', 'public');
        $this->beforeImages->store('before-images', 'public');
        $this->beeStatus->store('bee-status', 'public');
        $this->tenantProfile->store('tenant-profile', 'public');

        // Redirect or show success message
        session()->flash('success', 'Building entry submitted successfully.');
        $this->reset();
    }
}
```

## File: Auth/ForgotPassword.php
```php
<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class ForgotPassword extends Component
{
    public function render()
    {
        return view('livewire.auth.forgot-password');
    }
}

```

## File: Auth/ResetPassword.php
```php
<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class ResetPassword extends Component
{
    public function render()
    {
        return view('livewire.auth.reset-password');
    }
}

```

## File: Auth/VerifyEmail.php
```php
<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class VerifyEmail extends Component
{
    public function render()
    {
        return view('livewire.auth.verify-email');
    }
}

```

## File: Auth/VerifyEmailHandler.php
```php
<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class VerifyEmailHandler extends Component
{
    public function render()
    {
        return view('livewire.auth.verify-email-handler');
    }
}

```

## File: Auth/ResendVerificationEmail.php
```php
<?php
// app/Livewire/Auth/ResendVerificationEmail.php
namespace App\Livewire\Auth;

use Livewire\Component;

class ResendVerificationEmail extends Component
{
    public function resend() {
        auth()->user()->sendEmailVerificationNotification();
        session()->flash('message', 'Verification link sent!');
    }

    public function render()
    {
        return view('livewire.auth.resend-verification-email')->layout('components.layouts.app');
    }
}


```



<p id="hidden_comment">
    This is a hidden comment. It explains that the following style tag is meant to 
    style HTML content if this Markdown is converted to HTML. This comment should 
    not be visible in most Markdown renderers.
</p>
<style>
    #hidden_comment {
        display: none;
    }
    table {
        width: 100%;
    }
    table tr:first-child {
        font-weight: bold;
    }
    table tr:last-child {
        font-style: italic;
    }
</style>
