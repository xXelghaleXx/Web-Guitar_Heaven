<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('musica')</title>
    <link rel="stylesheet" href="{{ asset('css/the_only_one.css') }}">
</head>
<body>
    <div id="player-container" class="player-container">
        <div id="player" class="player">
            <button id="toggle-btn" class="toggle-btn"></button>
            <div class="cover">
                <img id="cover" src="" alt="Cover">
            </div>
            <div class="details">
                <h3 id="title">Título de la canción</h3>
            </div>
            <div class="progress-container">
                <span id="current-time">0:00</span>
                <div class="progress-bar" id="progress-bar">
                    <div class="progress" id="progress"></div>
                </div>
                <span id="duration">0:00</span>
            </div>
            <audio id="audio" src=""></audio>
            <br>
            <div class="controls">
                <button id="shuffle" class="btn"></button>
                <button id="prev" class="btn"></button>
                <button id="play" class="btn"></button>
                <button id="next" class="btn"></button>
                <button id="repeat" class="btn"></button>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/reproductor.js') }}"></script>
</body>
</html>
