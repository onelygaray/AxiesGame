<header class="flex w-full h-[80px] z-[1] flex-col  bg-gray-900 bg-opacity-87 backdrop-filter backdrop-blur-md  text-white items-center border-b border-[#8A8AA0]">
    <div class="flex h-[80px] items-center justify-center">
        <a class="flex items-center justify-center gap-[10px] 
        mr-[239px] cursor-pointer hover:scale-125 ease-out duration-500
        " href="{{ route('')}}">
            
            <img src="{{asset('images/logo.svg')}}" alt="">
           
            <h1 class="text-[36px] font-bold ">Axies</h1>
        </a>

        <nav class="">
            <ul class="flex gap-[40px] items-center justify-center">
                <li><a class="text-[18px]" href="#">Home</a></li>
                <li><a class="text-[18px]" href="#">Explore</a></li>
                <li><a class="text-[18px]" href="">Activity</a></li>
                <li><a class="text-[18px]" href="#">Community</a></li>
                <li><a class="text-[18px]" href="#"></a></li>
                <li><a class="text-[18px]" href="#">Contact</a></li>


            </ul>
        </nav>

        <div class="w-[16px] h-[15px] flex items-center justify-center ml-[106px]">
            <img src="{{asset('images/search.svg')}}" alt="">
        </div>

        <button class="w-[198px] h-[48px] border flex items-center justify-center rounded-[24px] ml-[38px] gap-[9px] border-[#5142FC]">
            <img src="{{asset('images/wallet.svg')}}" alt="">
            wallet connect
        </button>

        {{-- Boton del header que redirige a la viste de crear un usuario --}}
        <a class="text-[18px] text-white ml-[50px]
        font-extrabold  hover:scale-125 ease-out duration-500" href="{{ route('register')}}">     Registrar   </a>

    </div>



</header>
