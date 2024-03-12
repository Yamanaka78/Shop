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
              </div>
            </nav>
    </section>
</body>
</html>
@endsection
@include('common.footer')
