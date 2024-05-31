@props(['employer','width' => 90])
@php
    $logoUrl = asset($employer->logo);
    if(substr($employer->logo, 0, 4) != 'http'){
        $logoUrl = url('/storage/' . substr($logoUrl, strpos($logoUrl, 'logos')));
    }
@endphp

<img src="{{ $logoUrl }}" alt="" class="rounded-xl" width="{{$width}}">
