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
                      <img class="orbit-image" src="images/home1-1.png" alt="Space">
                    </li>
                    <li class="orbit-slide">
                      <img class="orbit-image" src="images/home1-2.png" alt="Space">
                    </li>
                    <li class="orbit-slide">
                      <img class="orbit-image" src="images/home1-3.png" alt="Space">
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
              <h1>Used Space Jam DVD Chair</h1>
            </div>
            <div class="row">
              <h6>This chair weighs about 1/8th of a basketball hoop and can be adjusted to anywhere from 1/3rd to ⅓.5 Michael Jordan's tall. The fabric is made out of recycled toons squad shirts, the finest fabric known to man.
</h6>
              </div>
            <div class="row">
              <ul>
                <li>Soft and relaxing</li>
                  <li>Bryce not included</li>
                  <li>$59.99</li>
                </ul>
              </div>
            <div class="row">
                <div class="large-9 columns">
                      <form>
                        <label>Select option
                          <select>
                            <option value="in">Four rolly wheels</option>
                            <option value="no">Three rolly wheels</option>
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
              <a href="cathome-2.php">
                <div class="card">
                    <img src="images/home2-1.png">
                  </div>
                </a>
        </div>
          
          <div class="large-4 columns">
              <a href="cathome-3.php">
          <div class="card">
        <img src="images/home3-1.png">
        </div>
                  </a>
        </div>
          
          <div class="large-4 columns">
              <a href="catcloth-3.php">
          <div class="card">
            <img src="images/cloth3-2.png">
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
