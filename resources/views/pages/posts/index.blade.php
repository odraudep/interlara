@extends('layouts.main')

@section('title', 'Blog')

@section('content')

    <div class="container">
        <h1>Blog</h1>

        <ul class="grid justify-items-center gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($posts as $post)
                <li class="flex w-full max-w-[23rem] flex-col shadow-lg">
                    <div class="relative h-48 w-full overflow-hidden">
                        <img
                            src="/img/post.jpg"
                            alt="Post image"
                            class="h-full w-full object-cover transition-transform hover:scale-105"
                        >
                        <a
                            href="/blog/category/#"
                            class="absolute right-2 top-2 rounded border-2 border-primary bg-white/80 px-2 py-1 text-sm font-medium tracking-wide text-black outline-none transition-colors hover:bg-primary hover:text-white focus:bg-primary focus:text-white"
                            aria-label="Post category page"
                        >
                            Category
                        </a>
                    </div>

                    <div class="flex flex-1 flex-col p-4 text-center">
                        <span class="mb-3 text-sm">September 25 2023</span>
                        <h4 class="mb-4 font-roboto_serif text-2xl font-medium tracking-wide">{{ $post['title'] }}</h4>
                        <p class="mb-4">{{ $post['description'] }}</p>
                        <a
                            href="/blog/1"
                            class="mt-auto inline-block text-lg uppercase tracking-wider outline-none transition-colors hover:text-primary focus:text-primary"
                            arial-label="Post page"
                        >
                            Read more
                        </a>
                    </div>

                    <div class="flex items-center gap-4 border-t-2 px-4 py-2 text-zinc-400">
                        <div class="flex items-center gap-1">
                            @svg('user')
                            <a
                                href="/blog/author/#"
                                class="text-sm outline-none hover:text-primary focus:text-primary"
                                aria-label="Author page"
                            >Author Name</a>
                        </div>
                        <button
                            type="button"
                            aria-label="Like post"
                            class="outline-none hover:text-primary focus:text-primary"
                        >
                            @svg('heart-outline')
                            {{-- @svg('heart', ['class' => 'text-primary']) --}}
                        </button>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
