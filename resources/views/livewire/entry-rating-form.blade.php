<div>
    <h3 class="text-lg font-semibold mb-4">Rate Entry</h3>
    <form wire:submit.prevent="submitRating">
        @foreach ($criteria as $criterion)
            <div class="mb-4">
                <label for="rating_{{ $criterion->id }}" class="block text-gray-700 font-bold mb-2">
                    {{ $criterion->name }}
                </label>
                <div class="flex items-center">
                    @for ($i = 1; $i <= 10; $i++)
                        <label class="inline-flex items-center mr-4">
                            <input type="radio" class="form-radio" name="rating_{{ $criterion->id }}" value="{{ $i }}" wire:model="ratings.{{ $criterion->id }}">
                            <span class="ml-2">{{ $i }}</span>
                        </label>
                    @endfor
                </div>
                @error('ratings.' . $criterion->id) <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        @endforeach
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Submit Rating
        </button>
    </form>
</div>
