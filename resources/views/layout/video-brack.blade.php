<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('video')</title>
</head>
<body>
    <video autoplay muted loop class="video-background">
        <source src="{{asset('videos/guitar-background.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</body>
</html>
