const songs = [
    { title: "Come as you are - Nirvana", src: "./musica/Come as you are - Nirvana.mp3", cover: "https://i.scdn.co/image/ab67616d0000b2739aa37e5baca62ca6cc98d056" },
    { title: "Everlong - Foo Fighters", src: "./musica/Everlong - Foo Fighters.mp3", cover: "https://i.scdn.co/image/ab67616d0000b2730389027010b78a5e7dce426b" },
    { title: "Under Pressure - Queen", src: "./musica/Under Pressure - Queen.mp3", cover: "https://i.scdn.co/image/ab67616d0000b273d254ca497999ae980a5a38c5" },
    { title: "Shadow of day - Linkin park", src: "./musica/shadow of day - Linkin park.mp3", cover: "https://m.media-amazon.com/images/I/71zibYlETiL._UF1000,1000_QL80_.jpg" },
    { title: "Something - the beatles", src: "./musica/Something - the beatles.mp3", cover: "https://www.beatlesbible.com/wp/media/something_new-960x960.jpg" },
    { title: "Another one bite the dust - Queen", src: "./musica/Another one bite the dust.mp3", cover: "https://vinilos.pe/wp-content/uploads/2020/02/710XKXHIeNL._UF8941000_QL80_.jpg" },
    { title: "I Was Made For Lovin' You - Kiss", src: "./musica/I Was Made For Lovin' You - Kiss.mp3", cover: "https://i.scdn.co/image/ab67616d0000b2736e5689a9d09ac1fc2cba2ab0" },
];

let currentSongIndex = 0;
let isPlaying = false;
let isShuffle = false;
let isRepeat = false;
let isCollapsed = false;

const playerContainer = document.getElementById('player-container');
const player = document.getElementById('player');
const audioElement = document.getElementById('audio');
const titleElement = document.getElementById('title');
const coverElement = document.getElementById('cover');
const playButton = document.getElementById('play');
const prevButton = document.getElementById('prev');
const nextButton = document.getElementById('next');
const shuffleButton = document.getElementById('shuffle');
const repeatButton = document.getElementById('repeat');
const progressBar = document.getElementById('progress-bar');
const progressElement = document.getElementById('progress');
const currentTimeElement = document.getElementById('current-time');
const durationElement = document.getElementById('duration');
const toggleBtn = document.getElementById('toggle-btn');

function loadSong(song) {
    titleElement.textContent = song.title;
    audioElement.src = song.src;
    coverElement.src = song.cover;

    audioElement.addEventListener('loadedmetadata', () => {
        const duration = audioElement.duration;
        const durationMinutes = Math.floor(duration / 60);
        const durationSeconds = Math.floor(duration % 60);
        durationElement.textContent = `${durationMinutes}:${durationSeconds < 10 ? '0' : ''}${durationSeconds}`;
    });
}

function playSong() {
    audioElement.play();
    playButton.style.backgroundImage = "url('/imagenes/icons/pause.png')";
    isPlaying = true;
}

function pauseSong() {
    audioElement.pause();
    playButton.style.backgroundImage = "url('/imagenes/icons/play.png')";
    isPlaying = false;
}

function togglePlayPause() {
    if (isPlaying) {
        pauseSong();
    } else {
        playSong();
    }
}

function prevSong() {
    currentSongIndex = (currentSongIndex - 1 + songs.length) % songs.length;
    loadSong(songs[currentSongIndex]);
    playSong();
}

function nextSong() {
    if (isShuffle) {
        currentSongIndex = Math.floor(Math.random() * songs.length);
    } else {
        currentSongIndex = (currentSongIndex + 1) % songs.length;
    }
    loadSong(songs[currentSongIndex]);
    playSong();
}

function updateProgress() {
    const { duration, currentTime } = audioElement;
    if (!isNaN(duration)) {
        const progressPercent = (currentTime / duration) * 100;
        progressElement.style.width = `${progressPercent}%`;

        const currentMinutes = Math.floor(currentTime / 60);
        const currentSeconds = Math.floor(currentTime % 60);
        currentTimeElement.textContent = `${currentMinutes}:${currentSeconds < 10 ? '0' : ''}${currentSeconds}`;

        const durationMinutes = Math.floor(duration / 60);
        const durationSeconds = Math.floor(duration % 60);
        durationElement.textContent = `${durationMinutes}:${durationSeconds < 10 ? '0' : ''}${durationSeconds}`;
    }
}

function setProgress(e) {
    const width = this.clientWidth;
    const clickX = e.offsetX;
    const duration = audioElement.duration;
    if (!isNaN(duration)) {
        audioElement.currentTime = (clickX / width) * duration;
    }
}

function toggleShuffle() {
    isShuffle = !isShuffle;
    shuffleButton.classList.toggle('active', isShuffle);
}

function toggleRepeat() {
    isRepeat = !isRepeat;
    repeatButton.classList.toggle('active', isRepeat);
}

function handleEnded() {
    if (isRepeat) {
        playSong();
    } else {
        nextSong();
    }
}

function togglePlayer() {
    isCollapsed = !isCollapsed;
    if (isCollapsed) {
        player.classList.add('player-collapsed');
        toggleBtn.style.backgroundImage = "url('/imagenes/icons/down.png')";
    } else {
        player.classList.remove('player-collapsed');
        toggleBtn.style.backgroundImage = "url('/imagenes/icons/up.png')";
    }
}

playButton.addEventListener('click', togglePlayPause);
prevButton.addEventListener('click', prevSong);
nextButton.addEventListener('click', nextSong);
shuffleButton.addEventListener('click', toggleShuffle);
repeatButton.addEventListener('click', toggleRepeat);
audioElement.addEventListener('timeupdate', updateProgress);
progressBar.addEventListener('click', setProgress);
audioElement.addEventListener('ended', handleEnded);
toggleBtn.addEventListener('click', togglePlayer);

loadSong(songs[currentSongIndex]);
