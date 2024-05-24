<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="grid grid-cols-2 gap-5">

        @foreach ($posts as $post)
            <article class="p-5 shadow-md bg-white rounded-md">
                <a href="/posts/category/{{ $post->category->slug }}">
                    <div class="bg-blue-100 text-blue-500 px-3 py-1 rounded-sm text-xs mb-2 w-max uppercase">
                        {{ $post->category->name }}
                    </div>
                </a>
                <a href="/posts/{{ $post['slug'] }}">
                    <h2 class="text-3xl font-semibold cursor-pointer">{{ $post['title'] }}</h2>
                </a>
                <div class="text-gray-500 text-sm mt-1 cursor-pointer hover:text-gray-600">
                    <a href="/authors/{{ $post->author->id }}">{{ $post->author->name }}</a> |
                    {{ $post['created_at']->diffForHumans() }}
                </div>
                <p class="my-4 text-sm">
                    {{ Str::limit($post['body'], 150) }}
                </p>
                <a href="/posts/{{ $post['slug'] }}" class="text-sm text-blue-500 hover:underline">Read More &raquo;</a>
            </article>
        @endforeach
        
    </div>
</x-layout>
