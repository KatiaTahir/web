console.log('Server run'); // test if the js runs along with the html
const cart = document.getElementById('Cart');
const finalPriceDiv = document.getElementById('finalPrice');

let jsFinalPrice = 0;
let basket = [];


function order(name, price){
 let item = name;
 let pricey = price;
 basket.push(item);
 console.log(basket); 
 let foodName = document.createElement('h1');
 let foodPrice = document.createElement('h1');
 let divy = document.createElement('div');
 foodName.innerHTML=(item);
 foodPrice.innerHTML=("Price:" +  pricey + "$");
 let firstH1 = cart.querySelector('h1'); 
 cart.insertBefore(divy, firstH1.nextSibling);
 divy.append(foodName);
 divy.append(foodPrice);
 let finalPriceText = document.getElementById('finalPriceText');
 jsFinalPrice = jsFinalPrice + pricey;
 let roundedPrice = jsFinalPrice.toFixed(2);
 finalPriceText.innerHTML=(roundedPrice + '$')
}