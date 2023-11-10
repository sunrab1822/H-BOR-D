<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="../{{$book["imageLink"]}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $book["title"] }}</h5>
          <p class="card-text">Authot: <a href="">{{ $book["author"] }}</a></p>
          <p class="card-text"><small class="text-body-secondary"><span class="fw-bold">Year:</span></small>{{ $book["year"] }}</p>
          <hr>
          <p class="card-text"><small class="text-body-secondary"><span class="fw-bold">Pages:</span></small>{{ $book["pages"] }}</p>
          <hr>
          <p class="card-text"><small class="text-body-secondary"><span class="fw-bold">Language:</span></small>{{ $book["language"] }}</p>
          <a  class="btn btn-primary" href="/books/{{ $book["title"] }}">Details...</a>
        </div>
      </div>
    </div>
  </div>
