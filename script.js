function Czas(){
    let date = new Date();
    let hours = date.getHours();
    let minutes = date.getMinutes();
    let seconds = date.getSeconds();
    
    let formatHours = convertFormat(hours);

    hours = checktime(hours);

    hours = addZero(hours);
    minutes = addZero(minutes);
    seconds = addZero(seconds);
    document.getElementById('clock').innerHTML = `<h2>${hours} : ${minutes} : ${seconds} : ${formatHours}</h2>`;

    
};

function convertFormat(time){
    let format = 'AM';
    if (time>=12){
        format = 'PM'
    };
    return format;
}

function checktime(time){
    if(time>12){
        time = time - 12;
    };
    if (time === 0){
        time = 12;
    };
    return time;
}

function addZero(time){
    if(time<10){
        time="0" +time
    };
    return time;
}

Czas();
setInterval(Czas, 1000);