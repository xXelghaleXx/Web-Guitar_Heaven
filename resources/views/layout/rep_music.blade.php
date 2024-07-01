<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Musica')</title>
    <link rel="stylesheet" href="{{ asset('css/the_only_one.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div id="music-player-container" class="music-player-container">
        <div id="music-player" class="music-player">
            <button id="toggle-btn" class="music-toggle-btn"><i class="fa fa-chevron-up"></i></button>
            <div class="music-cover">
                <img id="cover" src="" alt="Cover">
            </div>
            <div class="music-details">
                <h3 id="title" class="scroll-title">Título de la canción</h3>
            </div>
            <div class="music-progress-container" id="progress-container">
                <span id="current-time">0:00</span>
                <div class="music-progress-bar" id="progress-bar">
                    <div class="music-progress" id="progress"></div>
                </div>
                <span id="duration">0:00</span>
            </div>
            <audio id="audio" src=""></audio>
            <br>
            <div class="music-controls">
                <button id="shuffle" class="music-btn"><i class="fa fa-random"></i></button>
                <button id="prev" class="music-btn"><i class="fa fa-step-backward"></i></button>
                <button id="play" class="music-btn"><i class="fa fa-play"></i></button>
                <button id="next" class="music-btn"><i class="fa fa-step-forward"></i></button>
                <button id="repeat" class="music-btn"><i class="fa fa-repeat"></i></button>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/reproductor.js') }}"></script>
</body>
</html>
