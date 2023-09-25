@php
    $comics = config('comics');
@endphp
<div class="card-wrapper">
    @foreach ( $comics as $comic)
        
   
    <div class="card">
        <div class="img-container">
            <img src="{{$comic['thumb']}}" alt="">
        </div>
        <div class="series">
           <h1>{{$comic['title']}}</h1>
        </div>
    </div>
    @endforeach
    <button class="load-button"><strong>LOAD MORE</strong></button>
</div>

