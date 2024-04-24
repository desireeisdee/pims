{{-- @props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}> --}}
@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'appearance-none block border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#063497] focus:border-[#063497] sm:text-sm']) !!}>

