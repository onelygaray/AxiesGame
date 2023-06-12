<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/app.css')
</head>
<body class="relative">
    @include('partials.header')

    <main class="w-full h-[753px] bg-[#14141F] relative ">
        <div class="w-full h-full relative">
            <img class="h-full w-full relative" src="{{asset('images/Graphicbackground.svg')}}" alt="background">
            <div class="h[355px] text-white start-[255px] w-[633px] bottom-[201px] absolute ">
                <div class="w-full h-[263px] flex flex-col ">
                    <div class="h-[204px] w-full flex flex-col">
                        <span class="text-[56px] font-[700] leading-[68px]">Discover, and collect </span>
                        <span class="text-[56px] font-[700] leading-[68px]">extraordinary</span>
                        <span class="text-[56px] font-[700] leading-[68px]">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-600">Monster</span>
                            NFT</span>
                    </div>
                    <p class="text-[20px] mt-[29px] text-[#EBEBEB] leading-[30px]">Marketplace for monster character cllections non fungible token NFTs</p>
                </div>


                    <div class="flex gap-[16px] w-[310px] h-[56px] mt-[36px]">
                        <button class="flex items-center gap-[6px] justify-center w-[154px] h-[56px] rounded-[30px] border border-[#5142FC]">
                            <img src="{{asset('images/airnave.svg')}}" alt="">
                            <span>Explore</span>
                        </button>
                        <button class="flex items-center gap-[6px] justify-center w-[154px] h-[56px] rounded-[30px] border border-[#5142FC]">
                            <img src="{{asset('images/note.svg')}}" alt="">
                            <span>Create</span>
                        </button>
                    </div>
                </div>


            </div>
        </div>

    </main>
    <section class="h-[294px] w-full bg-[#14141F] flex justify-center pt-[28px]">
        <div class="w-[1400px] h-[186px] flex gap-[39px] ">
            <div class="h-[186px] w-[321px] flex items-center flex-col gap-[24px]">
                <button class="flex items-center justify-center bg-[#5142FC] h-[56px] w-[56px] rounded-[16px]">
                    <img src="{{asset('images/walletbt.svg')}}" alt="">
                </button>
                <div class="h-[106px] w-full flex flex-col items-center gap-[10] text-white">
                    <h2 class="text-[24px] font-[700] leading-[30px]">Set up your wallet</h2>
                    <p class="text-[14px] leading-[22px] text-center">Once you’ve set up your wallet of choice, connect it
                        to OpenSeaby clicking the NFT Marketplacein the
                        top right corner.
                    </p>
                </div>

            </div>
            <div class="h-[186px] w-[321px] flex items-center flex-col gap-[24px]">
                <button class="flex items-center justify-center bg-[#47A432] h-[56px] w-[56px] rounded-[16px]">
                    <img src="{{asset('images/category.svg')}}" alt="">
                </button>
                <div class="h-[106px] w-full flex flex-col items-center gap-[10] text-white">
                    <h2 class="text-[24px] font-[700] leading-[30px]">Create your collection</h2>
                    <p class="text-[14px] leading-[22px] text-center">Once you’ve set up your wallet of choice, connect it
                        to OpenSeaby clicking the NFT Marketplacein the
                        top right corner.
                    </p>
                </div>

            </div>
            <div class="h-[186px] w-[321px] flex items-center flex-col gap-[24px]">
                <button class="flex items-center justify-center bg-[#9835FB] h-[56px] w-[56px] rounded-[16px]">
                    <img src="{{asset('images/nft.svg')}}" alt="">
                </button>
                <div class="h-[106px] w-full flex flex-col items-center gap-[10] text-white">
                    <h2 class="text-[24px] font-[700] leading-[30px]">Add your NFTs</h2>
                    <p class="text-[14px] leading-[22px] text-center">Once you’ve set up your wallet of choice, connect it
                        to OpenSeaby clicking the NFT Marketplacein the
                        top right corner.
                    </p>
                </div>

            </div>
            <div class="h-[186px] w-[321px] flex items-center flex-col gap-[24px]">
                <button class="flex items-center justify-center bg-[#DF4949] h-[56px] w-[56px] rounded-[16px]">
                    <img src="{{asset('images/bookmark.svg')}}" alt="">
                </button>
                <div class="h-[106px] w-full flex flex-col items-center gap-[10] text-white">
                    <h2 class="text-[24px] font-[700] leading-[30px]">List them for sale</h2>
                    <p class="text-[14px] leading-[22px] text-center">Once you’ve set up your wallet of choice, connect it
                        to OpenSeaby clicking the NFT Marketplacein the
                        top right corner.
                    </p>
                </div>

            </div>

        </div>

    </section>
    <section class="flex flex-col items-center w-full h-[771px] bg-[#0D0D11] text-white">
        <div class="flex items-center w-[1410px] mt-[60px] h-[44px]">
            <h2 class="text-[36px] font-[700] leading-[44px]">Live Auction</h2>
            <div class="w-[118px] h-[25px] border-b border-[#9F50E5] flex justify-center ml-[1070px]">
                <a class="text-[14px] leading-[20px] font-[700] tracking-[1px]" href="#">EXPLORE MORE</a>
            </div>
        </div>
        <div class="w-full h-[519px] flex gap-[30px] mt-[40px] overflow-hidden">
            @foreach ($items as $item)
            <x-card :item="$item"/>

            @endforeach



        </div>


    </section>

</body>
</html>
