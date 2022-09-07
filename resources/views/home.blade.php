@extends("layouts.main")

@section("main-content")



        <div class="p-5 bg-black text-center position-relative ">

            <button class="ms-position btn btn-primary text-uppercase "> Current series</button>
              <div class="d-flex flex-wrap">
                @foreach ($comics as $comic)
                <div class="card">
    
                <div class="comic-img-container">
                    <img src="{{ $comic->image }}" alt="{{ $comic->title }}">
                </div>
                <h4>{{ $comic->title }}</h4>
    
                </div>       
            @endforeach
          </div>
      
          <button class="btn btn-primary btn-lg">Load more</button>
          </div>

    

@endsection