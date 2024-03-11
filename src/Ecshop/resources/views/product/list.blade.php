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

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1555982105-d25af4182e4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Product Name</p>
                    </div>
                    <p class="pt-1 text-gray-900">¥10,000</p>
                    <p class="pt-1 text-gray-900">商品説明</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1508423134147-addf71308178?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Product Name</p>
                    </div>
                    <p class="pt-1 text-gray-900">¥10,000</p>
                    <p class="pt-1 text-gray-900">商品説明</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1449247709967-d4461a6a6103?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Product Name</p>
                    </div>
                    <p class="pt-1 text-gray-900">¥10,000</p>
                    <p class="pt-1 text-gray-900">商品説明</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/reserve/LJIZlzHgQ7WPSh5KVTCB_Typewriter.jpg?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Product Name</p>
                    </div>
                    <p class="pt-1 text-gray-900">¥10,000</p>
                    <p class="pt-1 text-gray-900">商品説明</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1467949576168-6ce8e2df4e13?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Product Name</p>
                    </div>
                    <p class="pt-1 text-gray-900">¥10,000</p>
                    <p class="pt-1 text-gray-900">商品説明</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1544787219-7f47ccb76574?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Product Name</p>
                    </div>
                    <p class="pt-1 text-gray-900">¥10,000</p>
                    <p class="pt-1 text-gray-900">商品説明</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1550837368-6594235de85c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Product Name</p>
                    </div>
                    <p class="pt-1 text-gray-900">¥10,000</p>
                    <p class="pt-1 text-gray-900">商品説明</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1551431009-a802eeec77b1?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Product Name</p>
                    </div>
                    <p class="pt-1 text-gray-900">¥10,000</p>
                    <p class="pt-1 text-gray-900">商品説明</p>
                </a>
            </div>
            </div>
    </section>
</body>
</html>
@endsection
@include('common.footer')
