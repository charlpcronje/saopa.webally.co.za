<?php
// app/Http/Livewire/PaymentForm.php

namespace App\Http\Livewire;

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