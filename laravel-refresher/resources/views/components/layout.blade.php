<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 11 CC</title>

        <link rel="stylesheet" href="https://5173-codeanywhere-templates-p-vxalcsajsb.us1.codeanyapp.com/resources/css/app.css">
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        {{ $slot }}
    </body>
</html>
