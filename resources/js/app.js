require('./bootstrap');

const musicContainer = document.getElementById('music-container');
const playBtn = document.getElementById('play');
const prevBtn = document.getElementById('prev');
const nextBtn = document.getElementById('next');

const audio = document.getElementById('audio');
const progress = document.getElementById('progress');
const progressContainer = document.getElementById('progress-container');
const title = document.getElementById('title');
const cover = document.getElementById('cover');
const currTime = document.querySelector('#currTime');
const durTime = document.querySelector('#durTime');

//const tl = gsap.timeline({ defaults: { ease: "power1.out" } });

// Song titles
const songs = [
 'Full-Speed',
 'Hydra-Stage',
 'Voices'
];

// Keep track of song
let songIndex = 2;

// Initially load song details into DOM
loadSong(songs[songIndex]);

// Update song details
function loadSong(songs) {
 title.innerText = songs;
 audio.src = `music/${songs}.mp3`;
 cover.src = `img/${songs}.jpg`;
}

// Play song
function playSong() {
 musicContainer.classList.add('play');
 playBtn.querySelector('i.fas').classList.remove('fa-play');
 playBtn.querySelector('i.fas').classList.add('fa-pause');
 
 audio.play();
}

// Pause song
function pauseSong() {
 musicContainer.classList.remove('play');
 playBtn.querySelector('i.fas').classList.add('fa-play');
 playBtn.querySelector('i.fas').classList.remove('fa-pause');
 
 audio.pause();
}

// Previous song
function prevSong() {
 songIndex--;
 
 if (songIndex < 0) {
    songIndex = songs.length - 1;
   }
   
   loadSong(songs[songIndex]);
   
   playSong();
}

// Next song
function nextSong() {
 songIndex++;
 
 if (songIndex > songs.length - 1) {
  songIndex = 0;
 }
 
 loadSong(songs[songIndex]);
 
 playSong();
}

// Update progress bar
function updateProgress(e) {
 const { duration, currentTime } = e.srcElement;
 const progressPercent = (currentTime / duration) * 100;
 progress.style.width = `${progressPercent}%`;
}

// Set progress bar
function setProgress(e) {
 const width = this.clientWidth;
 const clickX = e.offsetX;
 const duration = audio.duration;
 
 audio.currentTime = (clickX / width) * duration;
}

// Event listeners
playBtn.addEventListener('click', () => {
 const isPlaying = musicContainer.classList.contains('play');
 
 if (isPlaying) {
  pauseSong();
 } else {
  playSong();
 }
});

// Change song
prevBtn.addEventListener('click', prevSong);
nextBtn.addEventListener('click', nextSong);

// Time/song update
audio.addEventListener('timeupdate', updateProgress);

// Click on progress bar
progressContainer.addEventListener('click', setProgress);

// Song ends
audio.addEventListener('ended', nextSong);

// Time of song
audio.addEventListener('timeupdate',durTime);

//landing animation gsap

// tl.to(".text", { y: "0%", duration: 1, stagger: 0.25 });
// tl.to(".slider", { y: "-100%", duration: 1.5, delay: 0.5 });
// tl.to(".intro", { y: "-100%", duration: 1 }, "-=1");
// tl.fromTo("nav", { opacity: 0 }, { opacity: 1, duration: 1 });
