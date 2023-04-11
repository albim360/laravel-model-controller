@foreach ($movies as $movie)
  <div class="col-4">
    <div class="card" style="width: 18rem;">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Titolo: {{ $movie->title }}</li>
        <li class="list-group-item">Nazionalità: {{ $movie->nationality }}</li>
        <li class="list-group-item">Voto: {{ $movie->vote }}</li>
      </ul>
    </div>
  </div>
@endforeach