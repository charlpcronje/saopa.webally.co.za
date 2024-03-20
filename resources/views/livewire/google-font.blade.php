{{-- G-L-GF-V1-A+ - View for the GoogleFont Livewire component --}}
<div>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- Dynamically constructs the Google Font URL using component properties --}}
    <link href="https://fonts.googleapis.com/css2?family={{ urlencode($font) }}:wght@<?php echo $weights; ?>&display=swap" rel="stylesheet">
</div>
