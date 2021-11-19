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
                <div class="col-md-12 text-center">
                    <img src="{{ URL::to('images/tom.jpg') }}" alt="image" style="width: 320px;">
                    <h1 class="display-2">Muthal Detector</h1>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ URL::to('get-info') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Date of Birth</label>
                                <input type="date" name="dob" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Date of Firth Muth</label>
                                <input type="date" name="firthMuth" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Muth Frequency / Week</label>
                                <select name="muthFrequency" id="" class="custom-select">
                                    @for ($i = 1; $i < 21; $i++)
                                    <option value="{{$i}}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Email (optional)</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Facebook Profile Link (optional)</label>
                                <input type="text" name="facebookProfile" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">
                            Go >> 
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
