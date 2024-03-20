<div>
    <form wire:submit.prevent="submit" class="space-y-4">
        <div>
            <label for="paymentAmount">Payment Amount</label>
            <input type="number" id="paymentAmount" wire:model="paymentAmount">
            @error('paymentAmount') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="cardNumber">Card Number</label>
            <input type="text" id="cardNumber" wire:model="cardNumber">
            @error('cardNumber') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="cardExpiry">Card Expiry</label>
            <input type="text" id="cardExpiry" wire:model="cardExpiry" placeholder="MM/YY">
            @error('cardExpiry') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="cardCvv">Card CVV</label>
            <input type="text" id="cardCvv" wire:model="cardCvv">
            @error('cardCvv') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Process Payment</button>
    </form>
</div>