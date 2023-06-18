const carrousel = document.getElementById('carrousel');

let maxScrollLeft = carrousel.scrollWidth - carrousel.clientWidth;

let invervalo = null;
let step = 1;

const start =() => {
    intervalo = setInterval(function() {
        if(carrousel.scrollLeft === maxScrollLeft){
            step = step * -1;
        }
        else if (carrousel.scrollLeft === 0){
            step = step * -1; 
        }
    },10);
}

const stop = () => {
    clearInterval(invervalo);
};

start();