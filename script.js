let time = document.getElementById('current-time');
let date = document.getElementById('date');

setInterval(() => {
    let D = new Date();
    let hours = D.getHours();
    let minutes = D.getMinutes();
    let seconds = D.getSeconds();
    let current_date = D.toLocaleDateString();
    let d = hours + ':' + minutes + ':' + seconds;
    time.innerHTML = d;
    date.innerHTML = current_date;
},1000);