const songs = [
    { title: "Come as you are - Nirvana", src: "/musica/Come_as_you_are_Nirvana.mp3", cover: "https://i.scdn.co/image/ab67616d0000b2739aa37e5baca62ca6cc98d056" },
    { title: "Everlong - Foo Fighters", src: "/musica/Everlong_Foo_Fighters.mp3", cover: "https://i.scdn.co/image/ab67616d0000b2730389027010b78a5e7dce426b" },
    { title: "Under Pressure - Queen", src: "/musica/Under_Pressure_Queen.mp3", cover: "https://i.scdn.co/image/ab67616d0000b273d254ca497999ae980a5a38c5" },
    { title: "Shadow of day - Linkin park", src: "/musica/Shadow_of_day_Linkin_park.mp3", cover: "https://m.media-amazon.com/images/I/71zibYlETiL._UF1000,1000_QL80_.jpg" },
    { title: "Something - the beatles", src: "/musica/Something_the_beatles.mp3", cover: "https://www.beatlesbible.com/wp/media/something_new-960x960.jpg" },
];

let currentSongIndex = 0;
let isPlaying = false;
let isShuffle = false;
let isRepeat = false;
let isCollapsed = false;

const playerContainer = document.getElementById('music-player-container');
const player = document.getElementById('music-player');
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
const progressContainer = document.getElementById('progress-container');
const toggleBtn = document.getElementById('toggle-btn');

function loadSong(song) {
    console.log(`Loading song: ${song.title}`);
    titleElement.textContent = song.title;
    titleElement.classList.add('scroll-title');
    audioElement.src = song.src;
    coverElement.src = song.cover;

    audioElement.addEventListener('loadedmetadata', () => {
        console.log(`Audio metadata loaded: ${song.title}`);
        const duration = audioElement.duration;
        const durationMinutes = Math.floor(duration / 60);
        const durationSeconds = Math.floor(duration % 60);
        durationElement.textContent = `${durationMinutes}:${durationSeconds < 10 ? '0' : ''}${durationSeconds}`;
    });

    audioElement.addEventListener('error', (e) => {
        console.error(`Error loading audio: ${audioElement.error.code}`);
    });
}

function playSong() {
    console.log(`Playing song: ${songs[currentSongIndex].title}`);
    audioElement.play().then(() => {
        playButton.innerHTML = '<i class="fa fa-pause"></i>';
        isPlaying = true;
    }).catch(error => console.log(`Error playing audio: ${error.message}`));
}

function pauseSong() {
    console.log(`Pausing song: ${songs[currentSongIndex].title}`);
    audioElement.pause();
    playButton.innerHTML = '<i class="fa fa-play"></i>';
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
    const width = progressContainer.clientWidth;
    const clickX = e.offsetX;
    const duration = audioElement.duration;
    if (!isNaN(duration)) {
        const newTime = (clickX / width) * duration;
        audioElement.currentTime = newTime;
        updateProgress();
    }
}

function throttle(fn, delay) {
    let timeoutId = null;
    return function(...args) {
        if (timeoutId) {
            clearTimeout(timeoutId);
        }
        timeoutId = setTimeout(() => {
            fn(...args);
        }, delay);
    };
}

const updateProgressThrottled = throttle(updateProgress, 100); // 100ms throttle

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
        player.classList.add('music-player-collapsed');
        toggleBtn.innerHTML = '<i class="fa fa-chevron-down"></i>';
        titleElement.classList.remove('scroll-title');
        titleElement.style.fontSize = "0.8em";
    } else {
        player.classList.remove('music-player-collapsed');
        toggleBtn.innerHTML = '<i class="fa fa-chevron-up"></i>';
        titleElement.classList.add('scroll-title');
        titleElement.style.fontSize = "1em";
    }
    titleElement.textContent = songs[currentSongIndex].title;
}

playButton.addEventListener('click', togglePlayPause);
prevButton.addEventListener('click', prevSong);
nextButton.addEventListener('click', nextSong);
shuffleButton.addEventListener('click', toggleShuffle);
repeatButton.addEventListener('click', toggleRepeat);
audioElement.addEventListener('timeupdate', updateProgressThrottled);
audioElement.addEventListener('ended', handleEnded);
progressContainer.addEventListener('click', setProgress);
toggleBtn.addEventListener('click', togglePlayer);

loadSong(songs[currentSongIndex]);
