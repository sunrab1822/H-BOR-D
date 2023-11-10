<x-layout>

    <h1>Books</h1>

    <div class="row">
        @foreach ($books as $book)
            <div class="col-md-4">
                <x-card :book="$book"></x-card>
            </div>
        @endforeach
    </div>

</x-layout>
