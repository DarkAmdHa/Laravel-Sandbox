<x-layout>
    @foreach ($posts as $post)
        <article class="{{$loop->even ? 'mb-6' : ''}}">
            <h1>
                <a href="/posts/{{$post->slug}}">
                    {!! $post->title !!}

                </a>
            </h1>
            <p><a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach

</x-layout>
