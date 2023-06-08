<div class="flex flex-col items-center justify-center h-[216px] w-full text-center text-white ">
    <h1 class="text-5xl font-bold">{{$subtitle ?? 'Nothing'}}</h1>

    <ul class="flex gap-x-3">
        <li><a href="#">Home</a></li>
        <li>/</li>
        <li><a href="#">{{ $liText ?? 'Nothing'}}</a></li>
        <li>/</li>
        <li><a href="#">{{ $subtitle ?? 'Nothing'}}</a></li>
    </ul>

</div>
