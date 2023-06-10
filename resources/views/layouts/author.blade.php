@extends('layouts.main')

@section('content')

<div class="w-full h-[1730px]  gap-[12px] flex flex-col items-center py-[80px] relative">
    <div class="w-[1410px] h-[354px]">
        <div class="h-[280px] w-full bg-[#313037] relative">
            <div class="w-[780px] h-[274px] absolute mt-[40px] ml-[40px] flex gap-[40px] ">
                <div class="h-[274px] w-[274px] bg-[#7A798A]  border-[2px] border-[#5142FC] rounded-[20px]">

                </div>
                <div class="w-[466px] h-[186] text-white mt-[20px]">
                    <h2 class="text-[18px] leading-[28px]">Author Profile</h2>
                    <h2 class="text-[36px] font-[700] leading-[44px] mt-[2px]">Trista Francis</h2>
                    <p class="text-[14px] leading-[22px] mt-[8px]">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati
                        dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.
                    </p>
                    <button class="bg-[#EBEBEB] h-[36px] w-[190px] rounded-[50px] mt-[24px] flex items-center justify-center gap-[13px]">
                        <span class="text-[13px] leading-[20px] text-[#7A798A]">DdzFFzCqrhshMSx....</span>
                        <img src="{{ asset('images/icon.svg') }}" alt="">

                    </button>


                </div>
            </div>

        </div>
        <div class="py-[24px] h-[74px] w-full bg-[#343444] relative text-white ">
            <ul class="flex items-center  justify-around ml-[414px] text-[20px] font-[700] ">
                <li><a href="#">All</a></li>
                <li><a href="#">Art</a></li>
                <li><a href="#">Music</a></li>
                <li><a href="#">Collectibles</a></li>
                <li><a href="#">Sport</a></li>

            </ul>

        </div>

    </div>
    <div class="w-[1410px] h-[1156px] mt-[60px]">
        <div class="bg-[#30303E] text-white rounded-[20px] px-[20px] pt-[20px] h-[511px] w-[330px]">
            <div class="bg-[#7A798A] w-[290px] h-[290px] rounded-[20px]">

            </div>
            <div class="w-[290px] h-[169px] mt-[21px]">
                <h3 class="text-[18px] font-[700] leading-[26px]">Hamlet Contemplates Yorick's...</h3>
                <div class="flex items-center mt-[17px]  w-[290px] h-[44px]">
                    <div class="flex gap-[12px] w-[146px] h-[44px]">
                        <div class="bg-[#7A798A] rounded-[15px] h-[44px] w-[44px]">

                        </div>
                        <div class="flex flex-col gap-[2px] h-[44px] w-[90px]">
                            <span class="text-[#8A8AA0] text-[13px] leading-[20px]">Creator</span>
                            <span class="text-[#EBEBEB] text-[15px] leading-[22px]">SalvadorDali</span>

                        </div>

                    </div>
                    <button class="bg-[#5142FC] text-white ml-[95px] text-[12px] font-[700] tracking-[2px] h-[24px] rounded-[8px] w-[49px]">
                        BSC
                    </button>

                </div>

                <hr class="w-[290px] border border-[#14141F] mt-[19px]">

                <div class="h-[48px] w-[290px] flex items-center">
                    <div>
                        <span class="text-[13px] leading-[20px] text-[#8A8AA0]">Current Bid</span>
                    <div class="w-[131px] h-[26px] flex items-center gap-[7px]">
                        <span class=" text-[16px] font-[700] leading-[26px]">4.89 ETH</span>
                        <span class="text-[13px] leading-[20px] text-[#8A8AA0]">=$12.246</span>
                    </div>

                    </div>

                    <div>
                        <img src="{{asset('images/reload.svg')}}" alt="">
                        <a href="#">View History</a>
                    </div>

                </div>


            </div>

        </div>

    </div>

    {{-- aqui llevas tu logica de lo que vas a poner --}}

</div>


@endsection
