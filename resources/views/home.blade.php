<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="">
    <v-app> {{--  Үүнийг нэмэхгүйгээр явсан бол таны vuetify бүрэн ажиллахгүй шүү...  --}}
        <app-home></app-home>
    </v-app>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
