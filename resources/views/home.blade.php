@extends('layouts.app')

@section('content')
    <h1>
        Home page 
        <div class="container">
            <div class="row">
                @forelse ($films as $movie )
                    <div class="col">
                        <div class="card">
                            <img src="{{$movie->image}}" alt="">
                            <h3>
                                {{$movie->title}}
                            </h3>
                        </div>

                    </div>
                    
               
                    
                @endforelse

            </div>

        </div>

    </h1>
    
@endsection