@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }}
{!! $attributes->merge(['class' => 'form-control py-2 px-4 block w-full border-gray-200
rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700
dark:text-gray-400']) !!}>
