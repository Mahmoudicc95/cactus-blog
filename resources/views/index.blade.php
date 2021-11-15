@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase fount-bold text-shadow-md pd-14">
                Do you want to know more about cactus? </h1>
            <a href="/blog" class="text-center bg-gray-50 text-gray-700 font-bold text-xl uppercase">
                Read More
            </a>

        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2016/11/18/14/00/cacti-1834749_960_720.jpg" width="600" alt="">
    </div>
    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">
            How to take care of your cactus
        </h2>
        <p class="py-8 text-gray-500 text-s">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
        </p>
        <p class="font-extrabold text-gray-600 text-s pb-9">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis qui sequi, molestias quidem optio at.
            Labore totam rem aperiam earum ratione.
        </p>
        <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">Find Out More </a>
    </div>
</div>

<div class="text-center py-15">
    <span class="uppercase text-s text-gray-400">
        Blog
    </span>
    <h2 class="text-4xl font-bold py-10">
        Recent Posts
    </h2>
    <p class="m-auto w-4/5 text-gray-500">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit enim magni, voluptas,
        ipsam ipsum cupiditate fugit a reiciendis aliquam, velit repellat.
        Debitis labore doloribus magni adipisci alias voluptate dignissimos rem?
    </p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-green-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">
                Cactus
            </span>
            <h3 class="text-xl font-bold py-10">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Vitae inventore laborum optio, doloribus quasi reiciendis labore dicta recusandae?
            </h3>
            <a href="" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>
    <div>
        <img src="https://cdn.pixabay.com/photo/2016/11/18/14/00/cacti-1834749_960_720.jpg" width="600" alt="">
    </div>
</div>


@endsection