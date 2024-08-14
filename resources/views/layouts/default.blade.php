<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @section('title')
            Thi thử
        @endsection
    </title>
    <link href="{{ asset('bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            @include('layouts.sidebar')
            <div class="col-9 offset-3 p-0 position-relative">
                @include('layouts.header')

                @yield('content')


                @include('layouts.footer')
            </div>
        </div>
    </div>


    <script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>
    @stack('scripts')
</body>

</html>
