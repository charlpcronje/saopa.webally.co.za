<div>
    <form wire:submit.prevent="submit" class="space-y-4">
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" wire:model="email">
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" wire:model="password">
            @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" id="confirmPassword" wire:model="confirmPassword">
            @error('confirmPassword') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Register</button>
    </form>
</div>