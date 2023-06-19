<div class=" flex flex-col bg-[#30303E] rounded-[20px] ps-[20px] pt-5 pb-[11px] h-[511px] w-[330px]">
    <div class="w-[290px] h-[290px] bg-[#7A798A] rounded-[20px] relative">
        <div class="absolute top-[14px] right-3">
            {{-- <form action="{{ route('items.like', ['itemId' => $itemId]) }}" method="POST">
                @csrf
                <input type="hidden" name="itemId" value="{{ $itemId }}">
                <button class="flex items-center justify-center gap-[5px] bg-[#14141F] w-[64px] h-[28px] rounded-[8px] " type="submit">
                    <img id="like" src="{{ asset('images/heart.svg') }}" alt="" class="cursor-pointer hover:scale-100">
                    <span class="text-[14px] font-[700] leading-[24px]">{{ $likeCount }}</span>
                </button>
            </form> --}}
        </div>
    </div>
    <div class="w-[290px] h-[169px] flex flex-col mt-[21px]">
        <h4 class="text-white font-bold text-18px leading-[26px]">"Crypto Egg Stamp #5”</h4>
    <div class="flex gap-3 items-center mt-[17px]">
        <div class="bg-[#7A798A] w-11 h-11 rounded-[15px]">
        </div>
        <div>
            <h5 class="text-[#8A8AA0] text-[13px] leading-5 font-normal">Creator</h5>
            <h4 class="text-white text-15px leading-[22px] font-bold">{{$user ?? 'Salvador Dhali'}}</h4>
        </div>
    </div>
    <div>
        <hr class="w-[290px] border border-[#14141F] mt-[19px]">
        <div class="flex items-center justify-between w-[290px] mt-[15px]">
            <div>
                <h5 class="text-[#8A8AA0] text-[13px] leading-5 font-normal">Price</h5>
                <h4 class="text-white text-18px leading-[26px] font-bold"><span>{{--{{$price}}--}}</span> ETH</h4>
            </div>
        </div>
    </div>

    </div>
</div>
