<?php
            require('modules/navbar.php') //Head
        ?>
        
      <div class="row" style="padding-top: 50px;">
        <div class="large-6 columns">
            <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
                  <ul class="orbit-container">
                    <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
                    <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
                    <li class="orbit-slide">
                      <img class="orbit-image" src="images/space-2/1.png" alt="Space" >
                    </li>
                    <li class="orbit-slide">
                      <img class="orbit-image" src="images/space-2/2.jpg" alt="Space" >
                    </li>
                    <li class="orbit-slide">
                      <img class="orbit-image" src="images/space-2/3.png" alt="Space" >
                    </li>
                  </ul>
                  <nav class="orbit-bullets">
                   <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                   <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                   <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                 </nav>
                </div>
            </div>
          
          <div class="large-6 columns">
            <div class="row" class="text-center">
              <h1>Super Space Jam DVD</h1>
            </div>
            <div class="row">
              <h6>Get all the content Hollywood didn't want you to see. Know what it's really like to ball as hard as Bugs and Jordan.</h6>
              </div>
            <div class="row">
              <ul>
                <li>Up to four hours of deleted scenes</li>
                  <li>Bonus features and games</li>
                  <li>$1000</li>
                </ul>
              </div>
            <div class="row">
                <div class="large-9 columns">
                      <form>
                        <label>Select version
                          <select>
                            <option value="two">Two hours bonus content</option>
                            <option value="four">Four hours bonus content</option>
                          </select>
                        </label>
                        </form>
                    </div>
                <div class="large-3 columns">
                    <label>
                      Qt.
                      <input type="number" value="1">
                    </label>
                </div>
              </div>
              <div class="row">
                <a class="button expanded" href="cart.php">Add to cart</a>
              </div>
              
          </div>
        </div>
      
      <div class="row">
        <h3 class="text-center" style="padding-top: 50px;">Related Products</h3>
      </div>
      
      <div class="row">
        <div class="row" style="padding-top: 50px;">
          <div class="large-4 columns">
              <a href="catspace-1.php">
                <div class="card">
                    <img src="images/space-1/1.png">
                  </div>
                </a>
        </div>
          
          <div class="large-4 columns">
              <a href="catspace-3.php">
          <div class="card">
        <img src="images/space-3.png">
        </div>
                  </a>
        </div>
          
          <div class="large-4 columns">
              <a href="catcloth-2.php">
          <div class="card">
            <img src="images/cloth-2/2.png">
        </div>
                  </a>
        </div>
      </div>
      </div>
      
      
      
      
      
       <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
        
  </body>
</html>
