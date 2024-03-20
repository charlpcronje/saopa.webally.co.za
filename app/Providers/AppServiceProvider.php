<?php
// app/Providers/AppServiceProvider.php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Livewire::component('entry-card', \App\Livewire\EntryCard::class);
        Livewire::component('entry-rating-form', \App\Livewire\EntryRatingForm::class);
        Livewire::component('file-upload', \App\Livewire\FileUpload::class);
        Livewire::component('payment-form', \App\Livewire\PaymentForm::class);
        Livewire::component('progress-bar', \App\Livewire\ProgressBar::class);
        Livewire::component('circular-graph', \App\Livewire\CircularGraph::class);
        Livewire::component('admin.dashboard', \App\Livewire\Admin\Dashboard::class);
        Livewire::component('judge.dashboard', \App\Livewire\Judge\Dashboard::class);
        Livewire::component('user.dashboard', \App\Livewire\User\Dashboard::class);
        Livewire::component('pagination', \App\Livewire\Pagination::class);
        Livewire::component('filter', \App\Livewire\Filter::class);
        Livewire::component('sorting', \App\Livewire\Sorting::class);
        Livewire::component('dashboard-statistic-card', \App\Livewire\DashboardStatisticCard::class);
        Livewire::component('notification', \App\Livewire\Notification::class);
        Livewire::component('confirmation-modal', \App\Livewire\ConfirmationModal::class);
    }
}
