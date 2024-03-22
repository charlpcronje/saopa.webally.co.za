{{-- resources/views/livewire/interior-design-entry-form.blade.php --}}
<div>
    <form wire:submit.prevent="submit" class="space-y-4">
        <!-- Entry Basic Details Section -->
        <div>
            <h2>Entry Basic Details</h2>
            <div>
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" wire:model="firstName">
                @error('firstName') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <!-- Add more fields for Entry Basic Details section -->
        </div>

        <!-- General Information Section -->
        <div>
            <h2>General Information</h2>
            <div>
                <label for="ownerClientCompany">Owner/Client/Company Name</label>
                <input type="text" id="ownerClientCompany" wire:model="ownerClientCompany">
                @error('ownerClientCompany') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <!-- Add more fields for General Information section -->
        </div>

        <!-- Team Section -->
        <div>
            <h2>The Team</h2>
            <div>
                <label for="architects">Architects</label>
                <input type="text" id="architects" wire:model="architects">
                @error('architects') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <!-- Add more fields for Team section -->
        </div>

        <!-- File Uploads Section -->
        <div>
            <h2>File Uploads</h2>
            <div>
                <label for="generalImages">General Images</label>
                <input type="file" id="generalImages" wire:model="generalImages" multiple>
                @error('generalImages') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <!-- Add more fields for File Uploads section -->
        </div>

        <!-- Descriptions Section -->
        <div>
            <h2>Descriptions</h2>
            <div>
                <label for="overallImpact">Overall Impact</label>
                <textarea id="overallImpact" wire:model="overallImpact"></textarea>
                @error('overallImpact') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <!-- Add more fields for Descriptions section -->
        </div>

        <button type="submit">Submit</button>
    </form>
</div>