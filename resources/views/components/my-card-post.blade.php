@props(['post'])

<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
    @if($post->image)
        <img class="w-full h-72 object-cover object-centerc" src="{{Storage::url($post->image->url)}}" alt="">
    @else
        <img class="w-full h-72 object-cover object-centerc" src="https://cdn.pixabay.com/photo/2023/12/17/09/47/door-8453898_1280.jpg" alt="">
    @endif
    <div class="px-6 py-4">
        <h1 class="font-bold text-xl mb-2">
            <a href="{{route('posts.show', $post)}}">{{$post->name}}</a>
            <div class="text-gray-700 text-base">
                {!! $post->extract !!}
            </div>
            <div class="px-6 pt-4 pb-2">
                @foreach($post->tags as $tag)
                    <a href="{{route('posts.tag',$tag)}}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">{{$tag->name}}</a>
                @endforeach
            </div>
        </h1>
    </div>
</article>
