@props(['name', 'value', 'label', 'type' => 'text'])

<x-forms.label :name="$name">{{ $label ?? ucwords($name) }}</x-forms.label>
<input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name, $value ?? '') }}" class="border border-gray-200 bg-gray-100 text-gray-700 p-1 rounded-sm focus:outline-none focus:border-gray-300">
<x-forms.error name="{{ $name }}" />
