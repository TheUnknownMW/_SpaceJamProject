<?php
            require('modules/navbar.php') //Head
        ?>
      
      
      <div class="row column">
      
      <h2 style="padding-top: 50px; margin-left:10px">Cart</h2>
      <ul class="accordion" data-accordion>
      <li class="accordion-item is-active" data-accordion-item>
        <a href="#" class="accordion-title" style="font-size: 20px;">Your items (0) </a>
        <div class="accordion-content" style="font-size: 20px;" data-tab-content>
             <form>   
            <div class="row">
                 
                <div class="large-2 columns">
                    <img class="thumbnail" src="images/space-05.jpg" alt="Sample">
                </div>
                
                <div class="large-6 columns">
                    <h6>Sample product.</h6>
                </div>
                
                <div class="large-2 columns">
                    <form>
                    <label>Color
                      <select>
                        <option value="red">Red</option>
                        <option value="black">Black</option>
                        <option value="blue">Blue</option>
                      </select>
                    </label>
                    </form>
                </div>
                
                <div class="large-2 columns">
                    <form>
                    <label>
                      Qt.
                      <input type="number" value="0">
                    </label>
                    </form>
                </div>
                
                 </div>
                
                <hr>
                
                <div class="row">
                 
                <div class="large-2 columns">
                    <img class="thumbnail" src="images/space-05.jpg" alt="Sample">
                </div>
                
                <div class="large-6 columns">
                    <h6>Sample product.</h6>
                </div>
                
                <div class="large-2 columns">
                    <form>
                    <label>Color
                      <select>
                        <option value="red">Red</option>
                        <option value="black">Black</option>
                        <option value="blue">Blue</option>
                      </select>
                    </label>
                    </form>
                </div>
                
                <div class="large-2 columns">
                    <form>
                    <label>
                      Qt.
                      <input type="number" value="0">
                    </label>
                    </form>
                </div>
                
                <div class="large-2 columns">
                    <a href="cart.html" class="button float-right">Update Cart</a>
                </div>
                
                 </div>
                
                 
                 <hr>
                 
                 <div class="row">
                     
                     <div class="large column">
                
                    <a href="checkout.html" class="button expanded">Go to checkout</a>
                         
                         </div>
                
                </div>
              
        </form>
    </div>
  </li>
      
      
      
      
      
      
      <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    </body>
</html>