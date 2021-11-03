const startingMinutes = 5;
let time = startingMinutes * 60;
setInterval(updateCountdown, 1000);

const countdownEl = document.getElementById('countdown');
function updateCountdown() {
    const minutes = Math.floor(time / 60);
    let seconds = time %60;
    countdownEl.innerHTML = `${minutes}: ${seconds}`;
    time--;
}
