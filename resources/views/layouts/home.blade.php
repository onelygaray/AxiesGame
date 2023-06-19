<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    @vite('resources/css/app.css')
</head>

<body class="relative">
    @include('partials.header')
    {{-- haeder --}}
    <main class="w-full h-[753px] bg-[#14141F] relative ">

        <div class="w-full h-full relative">
            <img class="h-full w-full relative" src="{{ asset('images/Graphicbackground.svg') }}" alt="background">
            <div class="h[355px] text-white start-[255px] w-[633px] bottom-[201px] absolute ">
                <div class="w-full h-[263px] flex flex-col ">
                    <div class="h-[204px] w-full flex flex-col">
                        <span class="text-[56px] font-[700] leading-[68px]">Discover, and collect </span>
                        <span class="text-[56px] font-[700] leading-[68px]">extraordinary</span>
                        <span class="text-[56px] font-[700] leading-[68px]">
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-600">Monster</span>
                            NFT</span>
                    </div>
                    <p class="text-[20px] mt-[29px] text-[#EBEBEB] leading-[30px]">Marketplace for monster character
                        cllections non fungible token NFTs</p>
                </div>


                <div class="flex gap-[16px] w-[310px] h-[56px] mt-[36px]">
                    <a
                        class="flex items-center gap-[6px] justify-center w-[154px] h-[56px] rounded-[30px] border border-[#5142FC]">
                        <img src="{{ asset('images/airnave.svg') }}" alt="">
                        <span>Explore</span>
                    </a>
                    <a
                        href="{{ route('create.index') }}" class="flex items-center gap-[6px] justify-center w-[154px] h-[56px] rounded-[30px] border border-[#5142FC]">
                        <img src="{{ asset('images/note.svg') }}" alt="">
                        <span>Create</span>
                    </a>
                </div>
            </div>


        </div>
        </div>


    </main>

    {{-- contenido principal --}}


    <section class="h-[294px] w-full bg-[#14141F] flex justify-center pt-[28px]">
        {{-- navbar and header --}}
        <div class="w-[1400px] h-[186px] flex gap-[39px] ">
            <div class="h-[186px] w-[321px] flex items-center flex-col gap-[24px]">
                <button class="flex items-center justify-center bg-[#5142FC] h-[56px] w-[56px] rounded-[16px]">
                    <img src="{{ asset('images/walletbt.svg') }}" alt="">
                </button>
                <div class="h-[106px] w-full flex flex-col items-center gap-[10] text-white">
                    <h2 class="text-[24px] font-[700] leading-[30px]">Set up your wallet</h2>
                    <p class="text-[14px] leading-[22px] text-center">Once you’ve set up your wallet of choice, connect
                        it
                        to OpenSeaby clicking the NFT Marketplacein the
                        top right corner.
                    </p>
                </div>

            </div>
            <div class="h-[186px] w-[321px] flex items-center flex-col gap-[24px]">
                <button class="flex items-center justify-center bg-[#47A432] h-[56px] w-[56px] rounded-[16px]">
                    <img src="{{ asset('images/category.svg') }}" alt="">
                </button>
                <div class="h-[106px] w-full flex flex-col items-center gap-[10] text-white">
                    <h2 class="text-[24px] font-[700] leading-[30px]">Create your collection</h2>
                    <p class="text-[14px] leading-[22px] text-center">Once you’ve set up your wallet of choice, connect
                        it
                        to OpenSeaby clicking the NFT Marketplacein the
                        top right corner.
                    </p>
                </div>

            </div>
            <div class="h-[186px] w-[321px] flex items-center flex-col gap-[24px]">
                <button class="flex items-center justify-center bg-[#9835FB] h-[56px] w-[56px] rounded-[16px]">
                    <img src="{{ asset('images/nft.svg') }}" alt="">
                </button>
                <div class="h-[106px] w-full flex flex-col items-center gap-[10] text-white">
                    <h2 class="text-[24px] font-[700] leading-[30px]">Add your NFTs</h2>
                    <p class="text-[14px] leading-[22px] text-center">Once you’ve set up your wallet of choice, connect
                        it
                        to OpenSeaby clicking the NFT Marketplacein the
                        top right corner.
                    </p>
                </div>

            </div>
            <div class="h-[186px] w-[321px] flex items-center flex-col gap-[24px]">
                <button class="flex items-center justify-center bg-[#DF4949] h-[56px] w-[56px] rounded-[16px]">
                    <img src="{{ asset('images/bookmark.svg') }}" alt="">
                </button>
                <div class="h-[106px] w-full flex flex-col items-center gap-[10] text-white">
                    <h2 class="text-[24px] font-[700] leading-[30px]">List them for sale</h2>
                    <p class="text-[14px] leading-[22px] text-center">Once you’ve set up your wallet of choice, connect
                        it
                        to OpenSeaby clicking the NFT Marketplacein the
                        top right corner.
                    </p>
                </div>

            </div>

        </div>

    </section>

    {{-- section of all cards --}}
    <section class="flex flex-col items-center w-full h-[771px] bg-[#0D0D11] text-white">
        <div class="flex items-center w-[1410px] mt-[60px] h-[44px]">
            <h2 class="text-[36px] font-[700] leading-[44px]">Live Auction</h2>
            <div class="w-[118px] h-[25px] border-b border-[#9F50E5] flex justify-center ml-[1070px]">
                <a class="text-[14px] leading-[20px] font-[700] tracking-[1px]" href="#">EXPLORE MORE</a>
            </div>
        </div>


        <div id="carrousel" class="h-auto w-auto">
            <div id="carrouselCards"
                class="overflow-x-hidden  overflow-y-hidden  flex gap-[30px] w-[1410px] h-[530px]  mt-[40px]">

                @foreach ($users as $user)
                    @foreach ($user->items as $item)
                        <x-card-view>

                            <x-slot name="itemId">
                                {{ $item->id }}
                            </x-slot>
                            <x-slot name="likeCount">
                                {{ $item->likes->count() }}
                            </x-slot>
                            <x-slot name="media">
                                <img class="w-full h-full" src="{{ $item->getFirstMediaUrl() }}">
                            </x-slot>
                            <x-slot name="title">
                                <a href="{{ route('itemDetail.show', ['id' => $item->id]) }}">{{ $item->title }}</a>
                            </x-slot>
                            <x-slot name="user">
                                {{ $user->name }}
                            </x-slot>
                            <x-slot name="price">
                                {{ $item->price }}
                            </x-slot>
                        </x-card-view>
                    @endforeach
                @endforeach

            </div>
        </div>
        <div class="h-[10px] w-[148px] flex items-center justify-center gap-[16px] mt-[32px]">

            <img src="{{ asset('images/arrow-left.svg') }}" alt="left" data-name="arrowleft">

            <button class="w-4 h-4 rounded-full border bg-white border-[#ffff]" data-name="dot"></button>
            <button class="w-2 h-2 rounded-full border border-[#ffff]" data-name="dot"></button>
            <button class="w-2 h-2 rounded-full border border-[#ffff]" data-name="dot"></button>
            <button class="w-2 h-2 rounded-full border border-[#ffff]" data-name="dot"></button>

            <img src="{{ asset('images/arrow-right.svg') }}" alt="right" data-name="arrowright">
        </div>

    </section>
    <!-- Populer collection -->
    <section
        class="bg-[#14141F] text-white flex flex-col items-center py-[80px] gap-[80px]  h-[2345px] w-full relative">
        <div class="flex flex-col gap-[38px] w-[1410px] h-[476px]">
            <div class="flex items-center  w-[1410px]  h-[44px]">
                <div>
                    <h2 class="text-[36px] font-[700] leading-[44px]">Popular Collection</h2>
                </div>
                <div class="w-[118px] h-[25px] border-b border-[#9F50E5] ml-[981px] flex justify-center">
                    <a class="text-[14px] leading-[20px] font-[700] tracking-[1px]" href="#">EXPLORE MORE</a>
                </div>
            </div>
            <div class="flex gap-[30px] h-[394px] w-full">
                @foreach ($collections as $collection)
                   @foreach ($collection->items as $item)
                    <x-collection-popular>

                        <x-slot name="img">
                            <img src="{{ $item->getFirstMediaUrl() }}">
                        </x-slot>

                        <x-slot name="collectionId">
                            {{ $collection->id }}
                        </x-slot>
                        <x-slot name="countCollection">
                            {{ $collection->likes->count() }}
                        </x-slot>

                        <x-slot name='name'>
                            {{ $collection->name }}
                        </x-slot>
                        <x-slot name='user_id'>
                            {{ $collection->user->name }}
                        </x-slot>
                    </x-collection-popular>
                    @endforeach
                @endforeach

            </div>
        </div>

        <div class="flex flex-col gap-[40px] h-[312px] w-[1410px]  text-white">
            <div>
                <h2 class="text-[36px] font-[700] leading-[44px]">Top Seller</h2>
            </div>
            <div class="w-full h-[228px] flex gap-[20px]">
                @foreach ($topSellers as $topseller)
                    <x-topseller>
                        <x-slot name='name'>
                            {{ $topseller->name }}
                        </x-slot>
                        <x-slot name='price'>
                            {{ $topseller->items_sum_price }}
                        </x-slot>
                    </x-topseller>
                @endforeach
            </div>
        </div>

        <div class="w-[1410px] h-[1237px] items-center flex flex-col">
            <div class="flex items-center  w-[1410px]  h-[44px]">
                <div>
                    <h2 class="text-[36px] font-[700] leading-[44px]">Today's Picker</h2>
                </div>
                <div class="w-[118px] h-[25px] border-b border-[#9F50E5] ml-[981px] flex justify-center">
                    <a class="text-[14px] leading-[20px] font-[700] tracking-[1px]" href="#">EXPLORE MORE</a>
                </div>
            </div>
            <div class="h-[1032px] mt-[40px] w-full flex flex-wrap gap-[30px]">
                @foreach ($cardstodays as $cardtoday)
                <x-card-view>
                    <x-slot name="itemId">
                        {{ $cardtoday->id }}
                    </x-slot>
                    <x-slot name="likeCount">
                        {{ $cardtoday->likes->count() }}
                    </x-slot>
                    <x-slot name="media">
                        <img class="w-full h-full" src="{{ $cardtoday->getFirstMediaUrl() }}">
                    </x-slot>
                    <x-slot name="title">
                        <a href="{{ route('itemDetail.show', ['id' => $cardtoday->id]) }}">{{ $cardtoday->title }}</a>
                    </x-slot>
                    <x-slot name="user">
                        {{ $cardtoday->user->name }}
                    </x-slot>
                    <x-slot name="price">
                        {{ $cardtoday->price }}
                    </x-slot>

                </x-card-view>


                @endforeach

            </div>
            <button class="w-[154px] h-[54px] mt-[37px] border border-[#FFFF] rounded-[30px] text-[15px]">
                Load More
            </button>

        </div>
    </section>

    @include('partials.footer')
    @vite('resources/js/carrousel.js')
</body>

</html>
