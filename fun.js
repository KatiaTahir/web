console.log('Server run'); // test if the js runs along with the html
let orderCounter = 0;
let menuHolder = document.getElementById('menuHolder')
const cart = document.getElementById('Cart');
const finalPriceDiv = document.getElementById('finalPrice');
let jsFinalPrice = 0;
let finalPriceTextForm = document.getElementById('finalPriceTextForm')



function order(name, price){
 let item = name;
 let pricey = price
 if(orderCounter >= 3){pricey = price/2;}
 let foodName = document.createElement('h1');
 let foodPrice = document.createElement('h1');
 let divy = document.createElement('div');
 foodName.innerHTML=(item);
 foodPrice.innerHTML=("Price:" +  pricey + "$");
 let firstH1 = cart.querySelector('h1'); 
 cart.insertBefore(divy, firstH1.nextSibling); //append the div after the h1 but before the final price 
 divy.append(foodName);
 divy.append(foodPrice);
 let finalPriceText = document.getElementById('finalPriceText');
 jsFinalPrice = jsFinalPrice + pricey; // update he final price by adding the new item price upon the other
 let roundedPrice = jsFinalPrice.toFixed(2); //to avoid really big ingter floating point like 0.000000000000000000001
 finalPriceText.innerHTML=(roundedPrice + '$');
 finalPriceTextForm.innerHTML=(roundedPrice + '$')
 divy.addEventListener('click', function() {
    divy.remove(); 
    
    jsFinalPrice = jsFinalPrice - pricey;
    
    // Update the displayed final price
    let roundedPrice = jsFinalPrice.toFixed(2);
    finalPriceText.innerHTML = (roundedPrice + '$');
    finalPriceTextForm.innerHTML = (roundedPrice + '$');});
}
 ////////////////////////////////////
 let orderScreen = document.getElementById('orderScreen');
let FinalOrderButton = document.getElementById('FinalOrderButton');
FinalOrderButton.addEventListener ('click', popUp);
function popUp() { 
    if(jsFinalPrice >0){orderScreen.style.display="flex"}
    else {alert('please add some item to your cart before ordering')}

 }
let submitButton = document.getElementById('submitButton');
let successOrder = document.getElementById('successOrder');
submitButton.addEventListener('click', submit);
function submit(){
    event.preventDefault();
    orderScreen.style.display="none"
    successOrder.style.display="flex"

}
let OK = document.getElementById('OK');
OK.addEventListener('click', closeUp);
let firstH3 = menuHolder.querySelector('h1'); 
let notify = document.createElement('h1');
menuHolder.insertBefore(notify, firstH3.nextSibling);
function closeUp (){
    successOrder.style.display="none"
    orderCounter++
    console.log(orderCounter)
    if (orderCounter >= 3){
    notify.innerHTML="Your Next order will be 50% off"
    notify.className='header1'
    notify.style.color='red'

    
       
    }
    
}

