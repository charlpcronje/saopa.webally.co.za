<?php
// app/Sapoa/Layout/Shared/Notice.php
namespace App\Sapoa\Layout\Shared;

use Livewire\Component;
use Livewire\Attributes\On;

class Notice extends Component
{
    private $defaultOptions = [
        "closeButton"       => true,
        "debug"             => false,
        "newestOnTop"       => true,
        "progressBar"       => true,
        "positionClass"     => "toast-top-right",
        "preventDuplicates" => true,
        "onclick"           => null,
        "showDuration"      => "300",
        "hideDuration"      => "1000",
        "extendedTimeOut"   => "1000",
        "showEasing"        => "swing",
        "hideEasing"        => "linear",
        "showMethod"        => "fadeIn",
        "hideMethod"        => "fadeOut" 
    ];

    public function notify($message,$title = 'Info',$timeout = 5000,$options = [])
    {
        $this->dispatch('notice', [
            'type' => 'info',
            'title' => $title,
            'message' => $message,
            'options' => [...$options,...$this->defaultOptions]+['timeOut' => $timeout]
        ]);
    }

    public function success($message,$title = 'Success',$timeout = 5000,$options = [])
    {
        $this->dispatch('notice', [
            'type' => 'success',
            'title' => $title,
            'message' => $message,
            'options' => [...$options,...$this->defaultOptions]+['timeOut' => $timeout]
        ]);
    }
    
    #[On('error')]
    public function error($message,$title = 'Error',$timeout = 5000,$options = [])
    {
        $this->dispatch('notice', [
            'type' => 'error',
            'title' => $title,
            'message' => $message,
            'options' => [...$options,...$this->defaultOptions]+['timeOut' => $timeout]
        ]);
    }

    public function warning($message,$title = 'Warning',$timeout = 5000,$options = [])
    {
        $this->dispatch('notice', [
            'type' => 'warning',
            'title' => $title,
            'message' => $message,
            'options' => [...$options,...$this->defaultOptions]+['timeOut' => $timeout]
        ]);
    }

    public function render()
    {
        return view('layouts.shared.notice');
    }
}