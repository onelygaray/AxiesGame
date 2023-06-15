@extends('layouts.main')
    
@section('content')
<x-subheader>
    <x-slot name="subtitle">
        Create item
    </x-slot>
    <x-slot name="liText">
        Pages
    </x-slot>
</x-subheader>
    <section class=" bg-[#14141F] text-white font-[Urbanist] m-auto h-[922px]">
        <div class="w-[1440px] flex mx-auto gap-x-20 pt-20">

            {{-- card --}}
            <div>
                <p class="font-semibold ">Preview Item</p>
                <div class="relative mt-5 pt-5 w-[330px] h-[504px] bg-[#343444] rounded-[20px] ">
                    <div class=" w-[290px] h-[290px] rounded-3xl bg-gray-500 mx-auto overflow-hidden">

                        <div
                            class="flex justify-center items-center gap-x-1 end-8 top-8 absolute bg-black w-16 h-7 rounded-[10px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14"
                                fill="none">
                                <path
                                    d="M14.7145 1.64672C12.9744 -0.092941 10.1436 -0.092941 8.40393 1.64672L7.99986 2.05055L7.59603 1.64672C5.85637 -0.0931764 3.02531 -0.0931764 1.28565 1.64672C-0.418689 3.35105 -0.429756 6.05261 1.25998 7.93096C2.80114 9.64354 7.34643 13.3435 7.53928 13.5001C7.6702 13.6065 7.82773 13.6583 7.98432 13.6583C7.9895 13.6583 7.99468 13.6583 7.99963 13.6581C8.16163 13.6656 8.32481 13.61 8.45997 13.5001C8.65282 13.3435 13.1986 9.64354 14.7402 7.93072C16.4297 6.05261 16.4186 3.35105 14.7145 1.64672ZM13.69 6.98578C12.4884 8.32066 9.18546 11.0738 7.99963 12.0508C6.8138 11.074 3.51155 8.32114 2.31018 6.98602C1.13142 5.67586 1.12035 3.80999 2.28452 2.64582C2.87908 2.05149 3.6599 1.75409 4.44072 1.75409C5.22154 1.75409 6.00236 2.05126 6.59693 2.64582L7.48512 3.53401C7.59085 3.63974 7.72412 3.70285 7.86399 3.72498C8.09099 3.77372 8.33729 3.71038 8.51389 3.53425L9.40256 2.64582C10.5919 1.45693 12.5266 1.45716 13.7152 2.64582C14.8794 3.80999 14.8683 5.67586 13.69 6.98578Z"
                                    fill="white" />
                            </svg>
                            <p class="font-Semibold">100</p>
                        </div>
                        <img id="pictureShow" src="" alt="" class="w-full h-full object-cover">
                    </div>

                    <div class="flex justify-between w-[290px] mx-auto mt-5">
                        <div class="start-[20px] w-[200px] h-8">
                            <p id="titleShow" class="text-lg font-semibold"></p>
                            <p class="font-semibold "></p>
                        </div>

                        <div class="pt-[5px] w-[50px] h-6 bg-[#5142FC] rounded-[10px]">
                            <p class="font-semibold text-xs text-center">BSC</p>
                        </div>
                    </div>

                    {{-- segunda columna --}}
                    <div class="flex mx-auto w-[290px] mt-5">
                        <div class="w-11 h-11 rounded-xl bg-[#7A798A] mr-3">
                            <img src="" alt="">
                        </div>
                        <div class="w-32 h-11 ">
                            <p class="text-[#8A8AA0]">Owned by</p>
                            <p id="userShow" class="font-semibold ">lorem Ipsum</p>
                        </div>

                        <div class="w-32 h-11  ">
                            <p class="text-[#8A8AA0]">Current bid</p>
                            <div class="flex">
                                <p id="priceShow" class="font-semibold "> </p>
                                <p class="font-semibold"> ETH</p>
                            </div>
                        </div>
                    </div>
                    {{-- tercera columna --}}
                    
                    
                    {{--  --}}
                    <div class="flex justify-between mx-auto w-[290px] mt-5">
                        <div
                            class="flex justify-center items-center gap-x-3 border border-[#5142FC] rounded-[30px] w-[141px] h-[46px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.8761 4.39199H13.0558C15.4172 4.39199 17.3337 6.26699 17.3337 8.56699V13.167C17.3337 15.467 15.4172 17.3337 13.0558 17.3337H4.94488C2.58349 17.3337 0.666992 15.467 0.666992 13.167V8.56699C0.666992 6.26699 2.58349 4.39199 4.94488 4.39199H5.12456C5.14167 3.39199 5.54379 2.45866 6.27103 1.75866C7.00683 1.05033 7.94797 0.691992 9.00888 0.666992C11.1307 0.666992 12.8504 2.33366 12.8761 4.39199ZM7.1694 2.65033C6.69028 3.11699 6.42505 3.73366 6.40794 4.39199H11.5927C11.5671 3.02533 10.4206 1.91699 9.00889 1.91699C8.3501 1.91699 7.66564 2.17533 7.1694 2.65033ZM12.2515 7.60032C12.6108 7.60032 12.8932 7.31699 12.8932 6.97532V6.00866C12.8932 5.66699 12.6108 5.38366 12.2515 5.38366C11.9007 5.38366 11.6098 5.66699 11.6098 6.00866V6.97532C11.6098 7.31699 11.9007 7.60032 12.2515 7.60032ZM6.31379 6.97532C6.31379 7.31699 6.03145 7.60032 5.6721 7.60032C5.32132 7.60032 5.03042 7.31699 5.03042 6.97532V6.00866C5.03042 5.66699 5.32132 5.38366 5.6721 5.38366C6.03145 5.38366 6.31379 5.66699 6.31379 6.00866V6.97532Z"
                                    fill="white" />
                            </svg>
                            <p class="font-Semibold">Place Bid</p>
                        </div>

                        <div class="flex justify-center items-center gap-x-3 rounded-[30px] w-[141px] h-[46px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path
                                    d="M16.7803 11.9928C16.5493 11.8892 16.2866 11.8815 16.05 11.9715C15.8134 12.0614 15.6222 12.2417 15.5185 12.4727C15.0503 13.5167 14.2956 14.4065 13.3419 15.0387C12.3882 15.6709 11.2747 16.0195 10.1308 16.0442C8.98687 16.0689 7.85941 15.7686 6.87935 15.1781C5.89929 14.5876 5.10685 13.7312 4.59405 12.7083L5.13468 12.949C5.36596 13.052 5.62867 13.0589 5.86503 12.9682C6.10138 12.8774 6.29202 12.6965 6.39499 12.4653C6.49796 12.234 6.50484 11.9713 6.41411 11.7349C6.32339 11.4986 6.14248 11.3079 5.9112 11.205L3.39889 10.0864C3.28438 10.0354 3.16093 10.0075 3.03562 10.0042C2.91031 10.001 2.78557 10.0224 2.66854 10.0673C2.55151 10.1122 2.44447 10.1798 2.35354 10.2661C2.26261 10.3523 2.18957 10.4557 2.13858 10.5702L1.02003 13.0824C0.917054 13.3137 0.910175 13.5764 1.0009 13.8128C1.09163 14.0492 1.27253 14.2398 1.50382 14.3428C1.7351 14.4457 1.99781 14.4526 2.23417 14.3619C2.47052 14.2712 2.66116 14.0903 2.76413 13.859L2.89171 13.5724C3.55406 14.8898 4.56946 15.9972 5.8246 16.7711C7.07975 17.5449 8.52524 17.9547 9.99975 17.9548C10.0459 17.9548 10.0923 17.9544 10.1385 17.9536C11.6492 17.9275 13.1213 17.4717 14.3825 16.6395C15.6437 15.8074 16.6418 14.6333 17.2601 13.2547C17.3638 13.0237 17.3715 12.761 17.2815 12.5244C17.1915 12.2877 17.0112 12.0965 16.7803 11.9928Z"
                                    fill="white" />
                                <path
                                    d="M18.4955 5.65724C18.2642 5.55428 18.0015 5.5474 17.7652 5.63813C17.5288 5.72886 17.3382 5.90976 17.2352 6.14103L17.1076 6.42756C16.4345 5.08867 15.397 3.9671 14.1144 3.19197C12.8319 2.41684 11.3566 2.01966 9.85824 2.04617C8.35991 2.07267 6.89953 2.52178 5.64522 3.3418C4.39092 4.16181 3.3937 5.31937 2.76836 6.68123C2.71584 6.79515 2.68629 6.9183 2.68139 7.04365C2.6765 7.169 2.69635 7.29408 2.73983 7.41175C2.78331 7.52941 2.84955 7.63736 2.93478 7.72941C3.02 7.82146 3.12253 7.89581 3.2365 7.94821C3.35048 8.0006 3.47366 8.03002 3.59902 8.03478C3.72437 8.03954 3.84943 8.01955 3.96705 7.97594C4.08467 7.93234 4.19255 7.86598 4.2845 7.78065C4.37646 7.69533 4.4507 7.59272 4.50297 7.47869C4.97849 6.44299 5.73697 5.56272 6.69101 4.93934C7.64506 4.31596 8.75582 3.97484 9.8953 3.9553C11.0348 3.93575 12.1566 4.23857 13.1315 4.82886C14.1063 5.41914 14.8946 6.27287 15.4053 7.29166L14.8647 7.05095C14.6337 6.94955 14.3719 6.94373 14.1366 7.03477C13.9013 7.12581 13.7116 7.30631 13.6089 7.5368C13.5063 7.7673 13.4991 8.02905 13.5889 8.26483C13.6787 8.50062 13.8582 8.69126 14.0882 8.7951L16.5932 9.91025L16.5977 9.91228C16.7123 9.96372 16.8359 9.99203 16.9614 9.99561C17.087 9.99919 17.212 9.97796 17.3293 9.93314C17.4466 9.88831 17.5539 9.82078 17.6451 9.7344C17.7363 9.64803 17.8095 9.54451 17.8606 9.42978L18.9791 6.91756C19.0821 6.68629 19.089 6.42359 18.9983 6.18724C18.9076 5.95089 18.7268 5.76024 18.4955 5.65724Z"
                                    fill="white" />
                            </svg>

                            <p class="font-Semibold text-[#8A8AA0] ">View History</p>

                        </div>
                    </div>
                </div>
            </div>

            {{-- formulario de la card --}}
            <div>
                <form id="form" method="POST" action="{{ route('create.store') }}" enctype="multipart/form-data">
                    @csrf
                    <p class="font-semibold ">Upload File</p>
                    <input id="picture"
                        class="ps-[20px] py-[12px] text-sm mt-[20px] mb-[24px] bg-transparent w-[1000px] h-[102px] rounded-lg border border-gray-300"
                        type="file" name="image" placeholder="PNG, JPG, GIF, WEBP or MP4 (Max 200mb)">
                    @error('file')
                        {{ $message }}
                    @enderror


                


                    <p class="font-semibold ">Price</p>
                    <input id="price"
                        class="ps-[20px] py-[12px] text-sm mt-[20px] mb-[24px] bg-transparent w-[1000px] h-[46px] rounded-lg border border-gray-300"
                        type="text" name="price" placeholder="Enter Price for one item(ETH)">
                    @error('price')
                        {{ $message }}
                    @enderror

                    <p class=" font-semibold ">Title</p>
                    <input id="title" maxlength="15"
                        class=" ps-[20px] py-[12px] text-sm mt-[20px] mb-[24px] bg-transparent w-[1000px] h-[46px] rounded-lg border border-gray-300"
                        type="text" name="title" placeholder="Item Name">
                    @error('title')
                        {{ $message }}
                    @enderror

                    <p class="font-semibold ">Description</p>
                    <input
                        class="ps-[20px] py-[12px] text-sm mt-[20px] mb-[24px] bg-transparent w-[1000px] h-[80px] rounded-lg border border-gray-300"
                        type="text" name="description" placeholder="Ej. This is a very limited item">
                    @error('description')
                        {{ $message }}
                    @enderror

                    <div class="flex gap-x-5">
                        <div>
                            <p class="font-semibold ">Royalties</p>
                            <input id="royalties"
                                class="ps-[20px] py-[12px] text-sm mt-[20px] mb-[24px] bg-transparent w-[320px] h-[46px] rounded-lg border border-gray-300"
                                type="text" name="royalties" placeholder="Royalties">
                            @error('royalties')
                                {{ $message }}
                            @enderror
                        </div>

                        <div>
                            <p class="font-semibold ">Size</p>
                            <input
                                class="ps-[20px] py-[12px] text-sm mt-[20px] mb-[24px] bg-transparent w-[320px] h-[46px] rounded-lg border border-gray-300"
                                type="text" name="size" placeholder="e.g. 'size' ">
                            @error('royalties')
                                {{ $message }}
                            @enderror

                        </div>

                        <div>
                            <p class="font-semibold ">Collection</p>
                            {{-- <input type="text" name="size" placeholder="e.g. 'size' ">
                    --}}
                    
                            <select
                                class="ps-[20px] py-[12px] text-sm mt-[20px] mb-[24px] bg-transparent w-[320px] h-[46px] rounded-lg border border-gray-300"
                                name="collection_id" id="">
                               
                                @foreach ($collections as $collection)
                                <option value="{{$collection->id}}">{{$collection->name}}</option>

                                @endforeach

                            </select>
                            @error('royalties')
                                {{ $message }}
                            @enderror

                        </div>


                    </div>
                    <button type="submit" class="w-[200px] rounded-xl h-10 border border-white">submit</button>
                </form>
            </div>

        </div>
        {{-- script de la card --}}
 
        @vite('resources/js/viewdata.js')
        <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    </section>

    @endsection
