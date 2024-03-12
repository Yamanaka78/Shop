{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')

@include('common.header')
@section('content')
<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">
    <section class="bg-white py-8">
        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
            <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
                    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">
                    ITEMS
                    </a>
                    <div class="flex items-center" id="store-nav-content">

                        <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                            製品一覧
                        </a>
                    </div>
              </div>
            </nav>
            @foreach ($productList as $product)
            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="{{ asset('/storage/images/' . $product->images[0]->image) }}">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">{{ $product->name }}</p>
                    </div>
                    <p class="pt-1 text-gray-900">¥{{ $product->price }}</p>
                    <p class="pt-1 text-gray-900">{{ $product->description }}</p>
                </a>
            </div>
            @endforeach
    </section>
</body>
</html>
@endsection
@include('common.footer')
