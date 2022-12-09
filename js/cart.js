const price = document.querySelectorAll('.pretul-produsului');
const cantitatea = document.querySelectorAll('.input-qty');

console.log(price);

let sum = 0;
let sumQuanty = 0;
let pattern = /[^0-9.]/g;

cantitatea.forEach(element => {
    sumQuanty = element.getAttribute('value');
});

k=0;
price.forEach(element => {
    sum += parseInt(element.textContent.replace(pattern,'')) * cantitatea[k].getAttribute('value');
    k++;
});

const subTotal = document.querySelector('.price-sub-total');
subTotal.innerHTML = '$'+sum;

if(price.length >=2 || price.length == 0 || sumQuanty >= 2){
    document.querySelector('.livrarea').innerHTML = '$0';
}else{
    document.querySelector('.livrarea').innerHTML = '$50';
}

const priceFinal = document.querySelector('.pretul-final').innerHTML =  
'$' + (parseInt(document.querySelector('.price-sub-total').textContent.replace(pattern,'')) + parseInt(document.querySelector('.livrarea').textContent.replace(pattern,'')));
