<x-layout>
    <div class="row">
        <div class="col">
            <img src="../{{$book["imageLink"]}}" class="w-100">
        </div>
        <div class="col">
            <h1>{{ $book["title"] }}</h1>
            <h1>Author:{{ $book["author"] }}</h1>
            <p><span class="fw-bold">Year:</span>{{ $book["year"] }}</p>
            <p><span class="fw-bold">Country:</span>{{ $book["country"] }}</p>
            <p><span class="fw-bold">Pages:</span>{{ $book["pages"] }}</p>
            <p><span class="fw-bold">Language:</span>{{ $book["language"] }}</p>
            <a href="{{$book["link"]}}" class="btn btn-primary">Wikipedia Link...</a>
        </div>
    </div>
</x-layout>
