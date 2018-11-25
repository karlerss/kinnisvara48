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
    @include('components/filters')

    <section class="container">
            {{ $listings->links() }}
        @foreach($listings as $listing)
            @include('components/listingItem')
        @endforeach
            {{ $listings->links() }}
    </section>
</main>
@include('components/footer')
<script src="{{asset('/js/app.js')}}"></script>

</body>
</html>
