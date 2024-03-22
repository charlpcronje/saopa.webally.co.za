{{-- resources/views/livewire/entry-details.blade.php --}}
<div>
    <h1>{{ $entry->title }}</h1>

    <div>
        <h2>Property Category</h2>
        <p>{{ $entry->property_category }}</p>
    </div>

    <div>
        <h2>Description</h2>
        <p>{{ $entry->description }}</p>
    </div>

    <div>
        <h2>General Images</h2>
        @foreach ($entry->generalImages as $image)
            <img src="{{ $image->url }}" alt="General Image">
        @endforeach
    </div>

    <div>
        <h2>Architectural Drawings</h2>
        @foreach ($entry->architecturalDrawings as $drawing)
            <img src="{{ $drawing->url }}" alt="Architectural Drawing">
        @endforeach
    </div>

    <!-- Add more sections for displaying entry details -->

</div>