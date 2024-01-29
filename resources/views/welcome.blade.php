<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Template</title>

    @vite('resources/js/app.js')
</head>

<body>
    <div class="container py-5">
        <h1 class="text-center">Laravel Model-Controller</h1>
        <div class="row py-5">
            @foreach ($movies as $movie)
                <div class="col-4 mb-4"> <!-- Adjust the col-* value based on your preference -->
                    <div class="card mc_card" style="width: 100%;">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $movie['title'] }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $movie['original_title'] }}</h6>
                            <p class="card-text">{{ $movie['vote'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    {{-- Insert code images <img src="{{ Vite::asset('resources/img/logo.png') }}" alt=""> --}}
</body>

</html>
