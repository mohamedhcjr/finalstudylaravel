@props(['active'=>false])
@php
    $current = "bg-cyan-900 text-white";
    $defaut = "text-gray-300 hover:bg-white/5 hover:text-white";
@endphp
<a {{ $attributes }}  class="block rounded-md px-3 py-2 text-base font-medium {{ $active?$current:$defaut}}">{{ $slot }}</a>
