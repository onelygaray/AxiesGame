@extends('layouts.main')

@section('content')
    <x-subheader>
        <x-slot name="subtitle">
            Create Collection
        </x-slot>
        <x-slot name="liText">
            Pages
        </x-slot>
    </x-subheader>

    <section class="mt-10 mx-auto flex w-[800px] justify-between h-[800px] ">
        {{-- <div class="w-80 h-80 ">
            <img id="pictureShow" src="" alt="" class="w-full h-full object-cover">
        </div> --}}
        <div class="mx-auto w-[400px] h-][700px] flex  gap-10">
            <form id="form" action="{{ route('collection.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- <input id="picture"
                    class="ps-[20px] text-pink-50 py-[12px] text-sm mb-[24px] bg-transparent w-full h-[102px] rounded-lg border border-gray-300"
                    type="file" name="image" placeholder="PNG, JPG, GIF, WEBP or MP4 (Max 20mb)">
                @error('image')
                    {{ $message }}
                @enderror --}}
                <input name="name" class="text-pink-50 h-[48px] w-full bg-transparent rounded-[8px] border border-[#343444]"
                    type="text" placeholder="Insert Name collection">
                @error('name')
                    {{ $message }}
                @enderror


                <button type="submit" class="w-full mt-5 rounded-xl h-10 border border-white">Create</button>

            </form>
        </div>
    </section>
    @vite('resources/js/viewdata.js')
@endsection
