<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body class="bg-[#14141F]">

    <header class="flex w-full h-[296px] flex-col text-white">
        <div class="flex pl-[255px] pr-[268px] h-[80px] items-center justify-center">
            <div class="flex items-center justify-center gap-[10px]">
                <img src="{{asset('images/logo.svg')}}" alt="">
                <h1 class="text-[36px] font-bold ">Axies</h1>
            </div>

            <nav class="">
                <ul class="flex gap-[40px] items-center justify-center">
                    <li><a class="text-[18px]" href="#">Home</a></li>
                    <li><a class="text-[18px]" href="#">Explore</a></li>
                    <li><a class="text-[18px]" href="">Activity</a></li>
                    <li><a class="text-[18px]" href="#">Community</a></li>
                    <li><a class="text-[18px]" href="#">Pages</a></li>
                    <li><a class="text-[18px]" href="#">Contact</a></li>
                </ul>
            </nav>

            <div class="w-[16px] h-[15px]">
                <img src="{{asset('images/search.svg')}}" alt="">
            </div>

        </div>
        <div>
            <h1>Login</h1>
        </div>



    </header>

    @yield('login')


</body>
</html>
