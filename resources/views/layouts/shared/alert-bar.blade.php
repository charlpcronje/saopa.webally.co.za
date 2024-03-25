{{-- resources/views/layouts/shared/alert-bar.blade.php --}}
<script>
    function alertBar() {
        return {
            show: false,
            type: 'info',
            message: '',
            sticky: false,
            showTime: 5000,
            init() {
                console.log('alertBar initialized');
                window.addEventListener('alert-bar-show', event => {
                    console.log('Event Listener triggered');
                    this.show = true;
                    this.type = event.detail.type;
                    this.message = event.detail.message;
                    this.sticky = event.detail.sticky;
                    this.showTime = event.detail.showTime;

                    if (!this.sticky) {
                        setTimeout(() => {
                            this.hide();
                        }, this.showTime);
                    }
                });
            },
            hide() {
                this.show = false;
            }
        };
    }
</script>

<!-- Alert Bar component -->
<div 
    x-data="alertBar()"
    x-show="show"
    x-transition:enter="transition ease-out duration-500"
    x-transition:leave="transition ease-in duration-500"
    :class="{
        'bg-blue-500': type === 'info',
        'bg-green-500': type === 'success',
        'bg-yellow-500': type === 'warning',
        'bg-red-500': type === 'error'
    }"
    class="fixed top-0 inset-x-0 px-4 py-2 text-sm font-medium text-white"
>
    <div class="flex justify-between items-center max-w-7xl mx-auto">
        <span x-text="message"></span>
        <button 
            x-show="sticky" 
            @click="hide()"
            aria-label="Close" 
            class="opacity-50 hover:opacity-75">
            &times;
        </button>
    </div>
</div>