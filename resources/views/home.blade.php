@extends('layout.main')


@section('content')
    <h1>Welcome to MY APP</h1>

    <section>
        <h2>Our Travels</h2>
        @foreach ( $travels as $travel )
            <article>
                <div><strong>City:</strong>{{$travel->city}}</div>
                <div><strong>Hotel:</strong>{{$travel->hotel}}</div>
                <div><strong>Adults:</strong>{{$travel->adults}}</div>
                <div><strong>Price:</strong>{{$travel->price}}</div>
                <div><strong>Day:</strong>{{$travel->day}}</div>
                <div><strong>Available:</strong>{{$travel->is_available}}</div>

                @if (! $loop->last)
                    <hr>
                @endif

            </article>
        @endforeach
    </section>
@endsection