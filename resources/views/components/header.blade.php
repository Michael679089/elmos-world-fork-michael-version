<div class="px-15 py-7 grid grid-cols-4 items-center">
    <a class="col-span-1 font-semibold text-green-700 text-2xl cursor-pointer" href="{{route('landing')}}">Think Finance!</a>
    <div class="col-span-2 font-semibold text-lg flex gap-15 justify-center">
        <a class="cursor-pointer" href="{{route('landing')}}">Home</a>
        <a class="cursor-pointer" href="{{route('posts.index')}}">Blogs</a>
        <a class="cursor-pointer" href="{{route('posts.create')}}">Create</a>
    </div>
    <div class="col-span-1 font-semibold text-lg flex gap-2 justify-end">

        @auth
            <form method="POST" action="{{route('logout')}}">
                @csrf
                <button type="submit" class="bg-green-700 rounded-2xl text-white px-5 py-2 cursor-pointer">Logout</button>
            </form>
        @else
            <a class="bg-green-700 rounded-2xl text-white px-5 py-2 cursor-pointer" href={{route('login')}}>Login</a>
        @endauth
    
    </div>
</div>
