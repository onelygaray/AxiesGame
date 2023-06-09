<div class="flex flex-col gap-[18px] bg-[#343444] h-full w-[450px] rounded-[10px] p-[20px]">

   {{-- picturs of collection item --}}
    <div class="h-[272px] w-[410px] grid grid-cols-2 grid-rows-1 gap-[10px]">

        {{ $img }} 
        {{-- <div class="bg-[#7A798A] rounded-[10px]">
            <img src="" alt="">
        </div>
        <div class="bg-[#7A798A] rounded-[10px]">
            <img src="" alt="">
        </div>
    </div>
    <div class="h-[272px] w-[410px] grid grid-cols-3 gap-[10px]">
        <div class="bg-[#7A798A] rounded-[10px]">
            <img src="" alt="">
        </div>
        <div class="bg-[#7A798A] rounded-[10px]">
            <img src="" alt="">
        </div>
        <div class="bg-[#7A798A] rounded-[10px]">
            <img src="" alt="">
        </div> --}}
    </div>
    <div class="h-[64px] w-[410px] flex gap-[63px]">
        <div class="flex gap-[10px]">
            <div class="h-[64px] w-[64px] bg-[#7A798A] rounded-[21px]">
                {{ $media ?? '' }}
            </div>
            <div class="h-[50px] w-[209px]">
                <h2 class="text-[19px] font-[700] leading-[26px]">{{ $name ?? 'Creative Collection' }}</h2>
                <div class="flex items-center gap-[6px] w-[185px] h-[22px]" >
                    <span class="text-[13px] leading-[20px] text-[#8A8AA0]">create by</span>
                    <a class="text-[15px] font-[700] leading-[22px]" href="#">{{ $user_id ?? 'Ralph lorem' }}</a>
                </div>
            </div>

        </div>
            <form method="POST" action="{{ route('collection.like', ['collectionId' => $collectionId]) }}" >
                @csrf
                <input type="hidden" name="collectionId" value="{{ $collectionId }}">
                <button class="flex items-center justify-center gap-[5px] w-[64px] h-[28px] bg-[#14141F] rounded-[10px]">
                    <img id="like" src="{{ asset('images/heart.svg') }}" alt="" class="cursor-pointer hover:scale-100">
                    <span class="text-[14px] font-[700] leading-[24px]">{{ $countCollection }}</span>
                </button>

        </form>





    </div>
</div>
