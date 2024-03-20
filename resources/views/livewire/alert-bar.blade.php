{{-- resources/views/livewire/alert-bar.blade.php --}}
<div>
    @if ($message)
        <div
            x-data="{show: false}"
            x-init="@this.on('alertShown', () => {
                show = true;
                setTimeout(() => {
                    if (!$wire.sticky) {
                        show = false;
                        $wire.dismiss();
                    }
                }, $wire.showTime);
            })"
            x-show="show"
            x-transition:enter="transition ease-out duration-{{ $fadeInTime }}"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-{{ $fadeOutTime }}"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90"
            class="fixed bottom-4 right-4 left-4 p-4 rounded-lg shadow-lg @if($type === 'info') bg-blue-500 border-blue-600 text-white @elseif($type === 'success') bg-green-500 border-green-600 text-white @elseif($type === 'warning') bg-yellow-500 border-yellow-600 text-black @elseif($type === 'error') bg-red-500 border-red-600 text-white @endif">
            <div class="flex justify-between items-center">
                <span>{{ $message }}</span>
                @if ($sticky)
                    <button wire:click="dismiss" class="ml-4 text-white hover:text-gray-200 focus:outline-none">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                @endif
            </div>
        </div>
    @endif
</div>