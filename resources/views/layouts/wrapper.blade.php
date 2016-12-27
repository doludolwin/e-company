
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
            e-company
        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
        {{-- profile --}}
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet" type="text/css" /> --}}
        {{-- end --}}
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="body-wrapper">

            @include("partials.navbar")
            @yield("content")
            @include('partials.footer')
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.js" charset="utf-8"></script>
        <script src="js/app.js" charset="utf-8"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js" charset="utf-8"></script> --}}
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" charset="utf-8"></script>
        {{-- profile --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script> --}}
        {{-- end --}}

    </body>
</html>
