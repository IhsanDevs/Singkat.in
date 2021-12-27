<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <title>{{ isset($title) ? $title . ' | ' . config('stisla.long_brand') : config('stisla.long_brand') }}
    </title>
    @include('partials.styles')
</head>
