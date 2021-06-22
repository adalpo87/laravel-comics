@extends('layouts.main')

@section('content')

        {{-- codice html --}}

        <main>
            <div class="wrapper">
                <div class="container">
                    <span class="cur-series">
                        CURRENT SERIES
                    </span>
                </div>
            </div>
            <div class="series">
                
                    <ul>
                        @foreach ($comics as $comic)
                        <li>
                            <div class="img-dc">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['type'] }}">
                            </div>
                            <a href="">{{ $comic['series'] }}</a>
                            
                        </li>
                        @endforeach
                        
                    </ul>
                  <button>LOAD MORE</button>
            </div>
            
        </main>

@endsection