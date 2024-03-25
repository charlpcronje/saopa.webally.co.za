{{-- resources/views/livewire/pagination.blade.php --}}
<div>
    <h3 class="text-lg font-semibold mb-4">Payment Details</h3>
    <form wire:submit.prevent="processPayment">
        <div class="mb-4">
            <label for="amount" class="block text-gray-700 font-bold mb-2">Amount</label>
            <input type="number" id="amount" wire:model="amount" class="form-input w-full" placeholder="Enter amount">
            @error('amount') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        
        <div class="mb-4">
            <label for="cardNumber" class="block text-gray-700 font-bold mb-2">Card Number</label>
            <input type="text" id="cardNumber" wire:model="cardNumber" class="form-input w-full" placeholder="Enter card number">
            @error('cardNumber') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        
        <div class="flex mb-4">
            <div class="w-1/2 mr-2">
                <label for="expiryMonth" class="block text-gray-700 font-bold mb-2">Expiry Month</label>
                <input type="text" id="expiryMonth" wire:model="expiryMonth" class="form-input w-full" placeholder="MM">
                @error('expiryMonth') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="w-1/2 ml-2">
                <label for="expiryYear" class="block text-gray-700 font-bold mb-2">Expiry Year</label>
                <input type="text" id="expiryYear" wire:model="expiryYear" class="form-input w-full" placeholder="YYYY">
                @error('expiryYear') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        </div>
        
        <div class="mb-4">
            <label for="cvv" class="block text-gray-700 font-bold mb-2">CVV</label>
            <input type="text" id="cvv" wire:model="cvv" class="form-input w-full" placeholder="Enter CVV">
            @error('cvv') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Pay Now
        </button>
    </form>
</div>