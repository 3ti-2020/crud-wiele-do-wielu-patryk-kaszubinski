const form = document.getElementById("form");
const btn = document.getElementById("btn");
const zal = document.getElementById("zal");
const wylog = document.getElementById("wylog");

let zmian = 0;

btn.addEventListener('click', function(){
    if(zmian===0){
        form.style.display = "block";
        zal.style.display = "none";
        zmian++;
    }
});

wylog.addEventListener('click', function(){
    if(zmian===1){
        form.style.display = "none";
        zal.style.display = "block";
        zmian--;
    }
});
