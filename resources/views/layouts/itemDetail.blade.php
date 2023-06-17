@extends('layouts.main')

@section('content')
<x-subheader>
    <x-slot name="subtitle">
        Item Details
    </x-slot>
    <x-slot name="liText">
        Pages
    </x-slot>
</x-subheader>

<x-detailItem :items="$items"/>


@endsection






