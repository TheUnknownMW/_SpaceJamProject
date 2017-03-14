<?php
            require('modules/navbar.php') //Head
        ?>
      
      
    <div class="row column">
      
      <h2 style="padding-top: 50px; margin-left:10px">Checkout</h2>
      <ul class="accordion" data-accordion>
  <li class="accordion-item is-active" data-accordion-item>
    <a href="#" class="accordion-title" style="font-size: 30px;">Shipping</a>
    <div class="accordion-content" style="font-size: 20px;" data-tab-content>
             <form>   
          <div class="row">
            <div class="medium-6 columns">
              <label>First Name
                <input type="text">
              </label>
            </div>
              
            <div class="medium-6 columns">
              <label>Last Name
                <input type="text">
              </label>
            </div>
              
              
              <div class="medium columns">
              <label>Address
                <input type="text" placeholder="Street address">
                <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
              </label>
            </div>
              
              <div class="medium columns">
              <label>City
                <input type="text">
              </label>
            </div>
              
              <div class="medium-6 columns">
              <label>State
                <input type="text">
              </label>
            </div>
              
              <div class="medium-6 columns">
              <label>Zip
                <input type="text">
              </label>
            </div>
              
              <div class="medium-6 columns">
              <label>Email address
                <input type="text">
              </label>
            </div>
              
              <div class="medium-6 columns">
              <label>Phone
                <input type="text">
              </label>
            </div>
              
            </div>
              
        </form>
    </div>
  </li>
  
  <li class="accordion-item" data-accordion-item>
    <a href="#" style="font-size: 30px;" class="accordion-title">Billing</a>
    <div class="accordion-content" style="font-size: 20px;" data-tab-content>
      <form>
          
          <fieldset class="medium columns">
            <input id="checkbox1" type="checkbox"><label for="checkbox1">Same as shipping</label>
          </fieldset>
          
          <div class="row">
            <div class="medium-6 columns">
              <label>First Name
                <input type="text">
              </label>
            </div>
              
            <div class="medium-6 columns">
              <label>Last Name
                <input type="text">
              </label>
            </div>
              
              <div class="medium columns">
              <label>Address
                <input type="text" placeholder="Street address">
                <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
              </label>
            </div>
              
              <div class="medium columns">
              <label>City
                <input type="text">
              </label>
            </div>
              
              <div class="medium-6 columns">
              <label>State
                <input type="text">
              </label>
            </div>
              
              <div class="medium-6 columns">
              <label>Zip
                <input type="text">
              </label>
            </div>
              
              <div class="medium-6 columns">
              <label>Email address
                <input type="text">
              </label>
            </div>
              
              <div class="medium-6 columns">
              <label>Phone
                <input type="text">
              </label>
            </div>
              
            </div>
              
        </form>
    </div>
  </li>
   
   <li class="accordion-item" data-accordion-item>
    <a href="#" class="accordion-title" style="font-size: 30px;">Payment</a>
    <div class="accordion-content" style="font-size: 20px;" data-tab-content>
        <div class="row">
            <fieldset class="large-6 columns">
                <legend>Method of Payment</legend>
                <input type="radio" name="visa" value="visa" id="visa" required><label for="visa">Visa</label>
                <input type="radio" name="master" value="master" id="master"><label for="master">MasterCard</label>
                <input type="radio" name="amexp" value="amexp" id="amexp"><label for="amexp">American Express</label>
              </fieldset>
        </div>
        
        <div class="row">
            <div class="medium-6 columns">
              <label>First Name
                <input type="text">
              </label>
            </div>
              
            <div class="medium-6 columns">
              <label>Last Name
                <input type="text">
              </label>
            </div>
        </div>
        
        <div class="row">
        <div class="medium-9 columns">
              <label>Card Number
                <input type="text">
              </label>
            </div>
        <div class="medium-3 columns">
            <label>CVV
                <input type="text">
            </label>    
        </div>
        </div>
        
        <div class="row">
            <div class="medium-2 columns">
                <label>Month
                    <input type="text" placeholder="XX">
                </label>
            </div>
            <div class="medium-2 columns end">
                <label>Year
                    <input type="text" placeholder="XXXX">
                </label>
            </div>
        </div>
        
        <div class="row">
            <div class="medium columns">
                <input type="submit" class="button expanded" value="Submit">
            </div>
        </div>
        
    </div>
  </li>
</ul>
        
        </div>
      
      
      
      
      
      
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>