<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <title>Menu</title>
</head>
<body> 
    <!-- order screen pop up -->
    <div id="orderScreen">
        <div>
            <h1>please fill the information below</h1>
            <form id="orderForm" name="myForm">
                <input name="firstName" type="text" placeholder="First name" required>  
                <input name="lastName" type="text" placeholder="Last name" required>
                <input name="phoneNumber" type="number" placeholder="Phone Number" required>
                <input name="adress1" type="text" placeholder="Number of Street" required>
                <input name="adress1" type="text" placeholder="Number of House" required>
                <label for="">Total:</label><p id="finalPriceTextForm"></p>
                <input id="submitButton" type="submit">
            </form>
        </div>
    </div>

  <!-- end of orderscreen -->
   <!-- success pop up -->
    <div id="successOrder">
        <img style="height: 7vh;margin-bottom: 2vh; margin-top: 0px;" src="success-svgrepo-com.svg" alt="">
        <h1>sucessfully submited,<br> the order will arive as soon as possible</h1>
        <button id="OK">Ok</button>
    </div>
    <header class="titles">
        <h1>Whisker Restaurant</h1>
        <p>ORDER NOW</p>
    </header>
                                                   <!-- nav buttons -->
    <div class="nav-buttons">
    

        <a href="index.html" class="navs">Home</a>

        <a href="Customer.html" class="navs">Customer info</a>    
    </div>
<br>

<div class="bodybody">
<div class="menu-navigation">
<a href="#sides">sides</a>
<a href="#main">main</a>
<a href="#beverages">beverages</a>

</div>

<br>
<br>
<div  id="menuHolder" class="menuHolder">
            <div id="sides"></div>
            <h1 class="header1">Sides <br></h1>
    
        <br>
                                                        <!-- menu items -->
                                                            <!-- side items -->
            <div class="menu-item">
                <img  class="item-image" src="fries.jpeg" alt="fries">
                
                <div class="item-info">
                    <h3>French Fries</h3>
                    <p class="item-description">Crispy golden fries, perfectly seasoned and served hot.</p>
                    
                    <div class="size-select">
                        <label>Price:</label>
                        <select  name="size">
                           
                            <option value="medium" selected>$4.99</option>
                     
                        </select>
                    </div>
                    <button class="order-btn" type="submit" onclick="order('frenchFries', 4.99)">Add to Cart</button>
                </div>
            </div>
            


            <div class="menu-item">
                <img  class="item-image" src="onion.jpeg" alt="onion rings">
                
                <div class="item-info">
                    <h3>Onion Rings</h3>
                    <p class="item-description">Crunchy, golden onion rings fried to perfection—crispy on the outside, tender on the inside.</p>
                    
                    <div class="size-select">
                        <label >Price:</label>
                        <select  name="size">
                        
                            <option value="medium" selected>$5.99</option>
                     
                        </select>
                    </div>
                    <button class="order-btn" type="submit"  onclick="order('onionRing', 5.99)">Add to Cart</button>
                </div>
            </div>
            

            <div class="menu-item">
                <img  class="item-image" src="nuggets.jpeg" alt="chicken nuggets">
                
                <div class="item-info">
                    <h3>chicken nuggets</h3>
                    <p class="item-description">Golden, crispy chicken nuggets with tender, juicy meat inside.</p>
                    
                    <div class="size-select">
                        <label >Price:</label>
                        <select  name="size">
                          
                            <option value="medium" selected>$7.99</option>
                     
                        </select>
                    </div>
                    <button class="order-btn" type="submit" onclick="order('chickenNugget', 7.99)" >Add to Cart</button>
                </div>
            </div>
    
                                                    <!-- main items -->
    <div id="main">
        <h1 class="header1"> main</h1>




        <div class="menu-item">
            <img  class="item-image" src="buffalo wings.jpeg" alt="buffalo wings">
            
            <div class="item-info">
                <h3>buffalo wings</h3>
                <p class="item-description">Crispy chicken wings tossed in a tangy buffalo sauce, served with a side of creamy ranch or blue cheese dip.</p>
                
                <div class="size-select">
                    <label >Price:</label>
                    <select  name="size">
                      
                        <option value="medium" selected>$9.99</option>
                 
                    </select>
                </div>
                <button class="order-btn" type="submit" onclick="order('buffaloWings', 9.99)">Add to Cart</button>
            </div>
        </div>
        <div class="menu-item">
            <img  class="item-image" src="bbq.jpeg" alt="bbq wings">
            
            <div class="item-info">
                <h3>barbecue  wings</h3>
                <p class="item-description">Tender chicken wings glazed with smoky BBQ sauce, delivering the perfect balance of sweet and savory, served with dipping sauce on the side.</p>
                
                <div class="size-select">
                    <label >Price:</label>
                    <select  name="size">
                      
                        <option value="medium" selected>$9.99</option>
                    
                    </select>
                </div>
                <button class="order-btn" type="submit" onclick="order('barbecueWings', 9.99)">Add to Cart</button>
            </div>
        </div>




        
            <div class="menu-item">
                <img  class="item-image" src="cheese burger.jpeg" alt="cheese burger">
                
                <div class="item-info">
                    <h3>cheese burger</h3>
                    <p class="item-description">A juicy beef patty topped with melted cheddar, fresh lettuce, tomato, pickles, and our special sauce, all nestled in a soft, toasted bun.</p>
                    
                    <div class="size-select">
                        <label >Price:</label>
                        <select  name="size">
                            <option value="small">$6.99</option>
                            
                         
                        </select>
                    </div>
                    <button class="order-btn" type="submit" onclick="order('cheeseBurger', 6.99)">Add to Cart</button>
                </div>
            </div>



            <div class="menu-item">
                <img  class="item-image" src="mush burg.jpeg" alt="mushroom burger">
                
                <div class="item-info">
                    <h3>mushroom burger</h3>
                    <p class="item-description">A savory beef patty layered with sautéed mushrooms, melted Swiss cheese, crisp lettuce, and garlic aioli on a toasted bun.</p>
                    
                    <div class="size-select">
                        <label >Price:</label>
                        <select  name="size">
                            <option value="small">$7.99</option>
                            
                    
                        </select>
                    </div>
                    <button class="order-btn" type="submit" onclick="order('mushroomBurger', 7.99)">Add to Cart</button>
                </div>
            </div>



            <div class="menu-item">
                <img  class="item-image" src="pepperoni pizza.jpeg" alt="pepperoni pizza">
                
                <div class="item-info">
                    <h3>pepperoni pizza</h3>
                    <p class="item-description">Classic hand-tossed crust topped with rich tomato sauce, mozzarella cheese, and generous slices of spicy pepperoni.</p>
                    
                    <div class="size-select">
                        <label >Price:</label>
                        <select  name="size">
                    
                            <option value="medium" selected>$12.99</option>
                           
                        </select>
                    </div>
                    <button class="order-btn" type="submit" onclick="order('pepperoniPizza', 12.99)">Add to Cart</button>
                </div>
            </div>


            <div class="menu-item">
                <img  class="item-image" src="vegeterian pizza.jpeg" alt="vegeterian pizza">
                
                <div class="item-info">
                    <h3>vegeterian pizza</h3>
                    <p class="item-description"> A fresh mix of tomatoes, eggplants, and basils all piled on a bed of mozzarella and marinara sauce on a crispy crust.</p>
                    
                    <div class="size-select">
                        <label>Price:</label>
                        <select  name="size">
                            
                            <option value="medium" selected>$10.99</option>
                          
                        </select>
                    </div>
                    <button class="order-btn" type="submit" onclick="order('vegeterianPizza', 10.99)">Add to Cart</button>
                </div>
            </div>
            </div><div>
                                                            <!-- beverages -->
        <div id="beverages">
        <h1 class="header1">beverages</h1>







        <div class="menu-item">
            <img  class="item-image" src="pepsi.jpeg" alt="pepsi">
            
            <div class="item-info">
                <h3>pepsi</h3>
                <p class="item-description">Enjoy a cold, crisp Pepsi served fresh over ice or straight from the can. The perfect balance of sweetness and fizz to quench your thirst.</p>
                
                <div class="size-select">
                    <label>Price:</label>
                    <select  name="size">
               
                        <option value="medium" selected>$1.99</option>
                    </select>
                </div>
                <button class="order-btn" type="submit" onclick="order('pepsi', 1.99)">Add to Cart</button>
            </div>
        </div>




        <div class="menu-item">
            <img  class="item-image" src="sprite.jpeg" alt="sprite">
            
            <div class="item-info">
                <h3>sprite</h3>
                <p class="item-description">Refresh yourself with a chilled Sprite, served ice-cold or from the can. Its crisp lemon-lime flavor is sure to brighten your day.

                </p>
                
                <div class="size-select">
                    <label>Price:</label>
                    <select  name="size">
                      
                        <option value="medium" selected>$1.99</option>
                    </select>
                </div>
                <button class="order-btn" type="submit" onclick="order('sprite', 1.99)">Add to Cart</button>
            </div>
        </div>








        <div class="menu-item">
            <img  class="item-image" src="coke.jpeg" alt="coke">
            
            <div class="item-info">
                <h3>coca cola</h3>
                <p class="item-description">Savor the classic taste of Cola, served fresh and cold with ice or directly from the can. The perfect bubbly companion to any meal.</p>
                
                <div class="size-select">
                    <label>Price:</label>
                    <select  name="size">
                      
                        <option value="medium" selected>$1.99</option>
                    </select>
                </div>
                <button class="order-btn" type="submit" onclick="order('cocaCola', 1.99)">Add to Cart</button>
            </div>
        </div>
        </div>

</div>
                                                                      <!-- end of menu -->


</div>
<div id="Cart"><h1>Your Orders:</h1>

<div id="finalPrice"> <h1 >Final Price: </h1> <h1 id="finalPriceText">0$</h1><button id="FinalOrderButton">Order</button></div>
</div>
</div>



   <footer>
    <p>© 2024 Whisker Restaurant. All rights reserved.</p>
</footer>





 <script src="fun.js"></script>
</body>
</html>
