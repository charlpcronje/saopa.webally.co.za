{{-- resources/views/layouts/shared/notice.blade.php --}}
<div>
    <script>
        document.addEventListener('livewire:initialized',()=> {
            @this.on('notice',(event)=>{
                const opt = event[0];
                toastr[opt.type]("Test message", "Test title",opt.options)
            })
        });
    </script>
</div>
