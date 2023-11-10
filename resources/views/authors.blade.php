<x-layout>
    <h1>Authors</h1>
    @foreach ($authors as $author)
    <a href="/authors/{{$author}}" class="btn btn-primary m-1">{{ $author }}</a>
    @endforeach
</x-layout>


