<?php
// app/View/Components/AuthCard.php
namespace App\View\Components;

use Illuminate\View\Component;

class AuthCard extends Component
{
    public function __construct()
    {
        // You can pass any variables you need to the component here
    }

    public function render()
    {
        return view('components.auth-card');
    }
}
