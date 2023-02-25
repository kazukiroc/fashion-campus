<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="bg-white shadow-md sticky top-0">
        <div class="m-auto max-w-6xl flex justify-between items-center">
            <div class="py-5">
                <img src="{{ Vite::asset('resources/icons/logo.svg') }}">
            </div>
            <div class="flex items-center gap-x-10">
                <ul class="flex gap-x-8">
                    <li>
                        <a href="#">MEN</a>
                    </li>
                    <li>
                        <a href="#">WOMEN</a>
                    </li>
                    <li>
                        <a href="#">KIDS</a>
                    </li>
                    <li>
                        <a href="#">UNISEX</a>
                    </li>
                </ul>
                <div class="relative w-96">
                    <input type="text" name="search" id="search" class="w-full rounded-xl border-gray-400 pl-5 pr-12 focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm" placeholder="Find your own fashion">
                    <div class="absolute inset-y-0 right-3 flex items-center">
                        <span>
                            <img src="{{ Vite::asset('resources/icons/search.svg') }}">
                        </span>
                    </div>
                </div>
                <ul class="flex gap-x-6">
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/icons/user.svg') }}">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/icons/message.svg') }}">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/icons/wishlist.svg') }}">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/icons/cart.svg') }}">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="absolute -z-50">
        <img src="{{ Vite::asset('public/banners/background.svg') }}">
    </div>

    <section class="m-auto mt-7">
        <div class="flex justify-center items-center">
            <a href="#">
                <img class="h-100 hover:opacity-80" src="{{ Vite::asset('public/banners/banner1-1.svg') }}">
            </a>
            <div class="grid grid-rows-2 gap-3 ml-5">
                <a href="#">
                    <img class="h-52 hover:opacity-80" src="{{ Vite::asset('public/banners/banner1-2.svg') }}">
                </a>
                <a href="#">
                    <img class="h-52 hover:opacity-80" src="{{ Vite::asset('public/banners/banner1-3.svg') }}">
                </a>
            </div>
        </div>
    </section>

    <section class="m-auto mt-16 max-w-6xl">
        <h1 class="font-semibold text-2xl">Top Categories</h1>
        <div class="mt-6">
            <ul class="flex justify-between items-center">
                <li class="border rounded-xl px-7 py-5 shadow-md hover:border-2 hover:border-yellow-500">
                    <a href="#">
                        <img src="{{ Vite::asset('resources/categories/topwear.png') }}">
                        <h2 class="text-xl text-center">Topwear</h2>
                    </a>
                </li>
                <li class="border rounded-xl px-7 py-5 shadow-md hover:border-2 hover:border-yellow-500">
                    <a href="#">
                        <img src="{{ Vite::asset('resources/categories/footwear.png') }}">
                        <h2 class="text-xl text-center">Footwear</h2>
                    </a>
                </li>
                <li class="border rounded-xl px-7 py-5 shadow-md hover:border-2 hover:border-yellow-500">
                    <a href="#">
                        <img src="{{ Vite::asset('resources/categories/bag.png') }}">
                        <h2 class="text-xl text-center">Bag</h2>
                    </a>
                </li>
                <li class="border rounded-xl px-7 py-5 shadow-md hover:border-2 hover:border-yellow-500">
                    <a href="#">
                        <img src="{{ Vite::asset('resources/categories/bottomwear.png') }}">
                        <h2 class="text-xl text-center">Bottomwear</h2>
                    </a>
                </li>
                <li class="border rounded-xl px-7 py-5 shadow-md hover:border-2 hover:border-yellow-500">
                    <a href="#">
                        <img src="{{ Vite::asset('resources/categories/watches.png') }}">
                        <h2 class="text-xl text-center">Watches</h2>
                    </a>
                </li>
                <li class="border rounded-xl px-7 py-5 shadow-md hover:border-2 hover:border-yellow-500">
                    <a href="#">
                        <img src="{{ Vite::asset('resources/categories/jewellery.png') }}">
                        <h2 class="text-xl text-center">Jewellery</h2>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section class="m-auto mt-24 max-w-6xl">
        <h1 class="font-semibold text-2xl">Trending Products</h1>
    </section>
</body>

</html>