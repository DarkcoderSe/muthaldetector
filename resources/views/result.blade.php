<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Muthal Detector v1.0</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container" style="margin-top: 40px;">
            <div class="row">
                @if ($totalMuths < 500)
                <div class="col-md-12 text-center">
                    <img src="{{ URL::to('images/sad.jpg') }}" alt="image" style="width: 320px;">
                    <h1 class="display-4">{{ $name }}, Thats not possible, You must be layin!!</h1>
                    <h1>You lost approx {{ number_format($totalSperms) }} sperms in approx {{ $totalMuths }} muths....</h1>
                    <br>
                    <a href="{{ URL::to('/get-info') }}">Back</a>
                </div>
                @else
                <div class="col-md-12 text-center">
                    <img src="{{ URL::to('images/boi.gif') }}" alt="image" style="width: 320px;">
                    <h1 class="display-4">{{ $name }}, You are very naughty boi!!</h1>
                    <h1>You lost approx {{ number_format($totalSperms) }} sperms in approx {{ $totalMuths }} muths....</h1>
                    <br>
                    <a href="{{ URL::to('/get-info') }}">Back</a>
                </div>
                @endif
            </div>
        </div>
    </body>
</html>
