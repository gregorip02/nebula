@props(['field', 'item' => null])

<x-nebula::form-row :field="$field">

    <div class="space-y-2">

        <textarea class="block w-full border border-gray-300 rounded-lg shadow-sm sm:text-sm form-textarea"
            placeholder="{{ $field->getPlaceholder() }}" {{ $field->getRequired() ? 'required' : '' }}
            id="{{ $field->getName() }}"
            name="{{ $field->getName() }}">{{ old($field->getName()) ?? (Arr::get($item, $field->getName()) ?? $field->getValue()) }}</textarea>

        <x-nebula::error :for="$field" />
        <x-nebula::helper-text :for="$field" />

    </div>

</x-nebula::form-row>
