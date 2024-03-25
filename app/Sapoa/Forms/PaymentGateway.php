<?php
// app/Sapoa/Forms/PaymentGateway.php
namespace App\Sapoa\Forms;

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
        return view('forms.payments.payment-gateway');
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