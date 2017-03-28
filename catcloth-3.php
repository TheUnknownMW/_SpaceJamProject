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
                      <img class="orbit-image" src="images/cloth3-1.png" alt="Space">
                    </li>
                    <li class="orbit-slide">
                      <img class="orbit-image" src="images/cloth3-2.png" alt="Space">
                    </li>
                    <li class="orbit-slide">
                      <img class="orbit-image" src="images/cloth3-3.png" alt="Space">
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
              <h1>The New and Improved Used Space Jam DVD Sandals</h1>
            </div>
            <div class="row">
              <h6>These sandals are the perfect blend of comfort and professionalism. With their sleek look and air like touch, these sandals are perfect for any occasion: Watching a Used Space Jam DVD, watching a Used Space Jam DVD at a friend's house, or even watching a Used Space Jam DVD at work.</h6>
              </div>
            <div class="row">
              <ul>
                <li>Durable</li>
                  <li>Wouldn't recommend on the courts</li>
                  <li>$25</li>
                </ul>
              </div>
            <div class="row">
                <div class="large-9 columns">
                      <form>
                        <label>Select color
                          <select>
                            <option value="g">Green</option>
                            <option value="l">Lime</option>
                            <option value="s">Sage</option>
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
              <a href="catcloth-1.php">
                <div class="card">
                    <img src="images/cloth1-1.png">
                  </div>
                </a>
        </div>
          
          <div class="large-4 columns">
              <a href="catcloth-2.php">
          <div class="card">
        <img src="images/cloth2-2.png">
        </div>
                  </a>
        </div>
          
          <div class="large-4 columns">
              <a href="catacc-2.php">
          <div class="card">
            <img src="images/acc2-1.png">
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
