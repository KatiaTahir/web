console.log('Server run'); // test if the js runs along with the html
const orderScreen = document.getElementById('orderScreen')
function order(name){
 console.log(name)
     orderScreen.style.display='flex'
     var food = document.forms['myForm']['food'];
    food.value = name;
}
