{{-- resources/views/components/checkbox.blade.php --}}
<div>
    <input type="checkbox" id="{{ $id }}" {{ $attributes->merge(['class' => 'rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) }}>
    <label for="{{ $id }}" class="ml-2 block text-sm text-gray-600">{{ $label }}</label>
</div>
