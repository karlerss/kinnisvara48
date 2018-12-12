<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kinnisvara48</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .object {
            margin-bottom: 1rem;
        }

        .object__image {
            width: 30%;
            height: 200px;
            -webkit-background-size: cover;
            background-size: cover;
        }

        main {
            padding: 5rem 0;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Kinnisvara48</a>

</nav>

<main role="main" id="app">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Test</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <form class="form-inline mb-4">
                <div class="form-group">
                    <input type="number" class="form-control" name="m2_price_min" placeholder="Min price per m2">
                    &nbsp;
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="m2_price_max" placeholder="Max price per m2">
                    &nbsp;
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>
    <section class="container">
        <div class="row object" v-for="i in listings.data">
            <div class="col-3 object__image" style="background-image: url(https://picsum.photos/600/400);"></div>
            <div class="col-6">
                <h2>Kuuse 66, Mustamäe linnaosa</h2>
                <div>Area: 37 m<sup>2</sup></div>
                <div>Images count: 13</div>
            </div>
            <div class="col-3 text-right">
                <h2 class="text-info">65000 €</h2>
                <h4>1756 €/m<sup>2</sup></h4>
            </div>
        </div>
    </section>
</main>
@include('footer')
<script src="{{asset('/js/app.js')}}"></script>
</body>
</html>
