@extends("layout")

@section("title", "Home")

@section("content")
    <section class="section-display">
        <div class="grid grid-rows-2 grid-flow-col">
            <img src="{{ asset('img/infinix-gt-20-pro.png') }}" alt="infinix-gt-20-pro" class="max-w-full object-contain">
            <img src="{{ asset('img/Lenovo-LOQ-1.png')}}" alt="ipad_pro_2021" class="max-w-full object-contain">
            <div class="flex flex-col row-span-2 self-center">
                <h1 class="text-5xl font-bold text-center leading-normal">Biggest and Enthusiastic Gadget Electronic Shop</h1>
                <div class="p-4 flex flex-col justify-center gap-5">
                    <p class="text-center">"Hello! welcome to Super Gadget, the ultimate destination for the latest and most complete gadgets. We present a wide selection of smartphones, laptops, accessories, and other technology devices at the best prices and quality assurance. Discover the latest innovations and enjoy an easy, fast, and safe shopping experience with us!"</p>
                    <button type="button" class="border bg-fuchsia-500 text-white font-bold px-5 py-2 rounded-lg max-w-fit mr-auto ml-auto">Check it out!</button>
                </div>
            </div>
            <img src="{{ asset('img/apple_ipad_pro_2021_12.9-inci.png') }}" alt="laptop_lenovo_loq" class="max-w-full object-contain">
            <img src="{{ asset('img/apple_macbook_air_13_inci_m3_2024.png') }}" alt="apple_macbook_air_13_m3_2024" class="max-w-full object-contain">
        </div>
    </section>
@endsection