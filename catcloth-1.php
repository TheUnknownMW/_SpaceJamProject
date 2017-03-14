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
                      <img class="orbit-image" src="images/cloth-1/1.png" alt="Space" style="height: 400px;">
                    </li>
                    <li class="orbit-slide">
                      <img class="orbit-image" src="images/cloth-1/2.png" alt="Space" style="height: 400px;">
                    </li>
                    <li class="orbit-slide">
                      <img class="orbit-image" src="images/cloth-1/3.png" alt="Space" style="height: 400px;">
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
              <h1>Used Space Jam DVD Sandals</h1>
            </div>
            <div class="row">
              <h6>These form fitting sandals makes it feel like you’re in the air, dunking a ball while just standing in your home watching a Used Space Jam DVD.</h6>
              </div>
            <div class="row">
              <ul>
                <li>Comfortable</li>
                  <li>Recommended to be used with socks</li>
                  <li>$25</li>
                </ul>
              </div>
            <div class="row">
                <div class="large-9 columns">
                      <form>
                        <label>Select color
                          <select>
                            <option value="pi">Pink</option>
                            <option value="pu">Purple</option>
                            <option value="vi">Violet</option>
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
              <a href="catcloth-3.php">
                <div class="card">
                    <img src="images/cloth-3/2.png">
                  </div>
                </a>
        </div>
          
          <div class="large-4 columns">
              <a href="catcloth-2.php">
          <div class="card">
        <img src="images/cloth-2/shirt2.png">
        </div>
                  </a>
        </div>
          
          <div class="large-4 columns">
              <a href="catacc-1.php">
          <div class="card">
            <img src="images/acc-1/1.png">
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
