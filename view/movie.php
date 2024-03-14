<head>
    <link rel="stylesheet" href="styles/movie.css" />
</head>
<?php 
    $MovieName = "Spider-Man: Into the Spider-Verse";
    $MovieCoverPath = "img/movies/spiderman_blue.jpg"; // Movie cover
    $MovieDescription = "Teen Miles Morales becomes the Spider-Man of his universe and must join with five spider-powered individuals from other dimensions to stop a threat for all realities.";
    $MovieScreeningType = "Regular Screening";
    $MovieLocation = "Screen 3";
    $MovieTime = "8:30pm";
    $MovieDate = "March 19th 2024";
    $MovieRating = 8.4;
?>
<div class="main-content">
         <div class="content-left">
            <div class="movie-info-top">
               <h1>BOOK A SHOW</h1>
               <p id="movie-showtime"><?php echo $MovieLocation . " | " . $MovieTime . " (" . $MovieDate . ")" ?></p>
            </div>
            <div class="movie-wrapper">
               <div class="movie-info-left">
                  <img src="<?php echo $MovieCoverPath ?>" id="movie-cover"></img>
               </div>
               <div class="movie-info-right">
                  <div class="movie-info-right-top">
                     <div class="movie-title">
                        <h2 id="movie-title"><?php echo $MovieName ?></h2>
                     </div>
                     <div class="movie-genre-box">
                        <div class="movie-genre">
                           <p>Animated</p>
                        </div>
                        <div class="movie-genre">
                           <p>Action</p>
                        </div>
                     </div>
                     <!-- Grab genre -->
                  </div>
                  <div class="movie-rating">
                     <img src="img/icons/star.png" alt="star" id="star"></img>
                     <p><?php echo $MovieRating . " / 10" ?></p>
                  </div>
                  <p class="movie-desc"><?php echo $MovieDescription ?></p>
                  <p class="movie-showing-type"><?php echo $MovieScreeningType ?></p>
               </div>
            </div>
               <div class="movie-screen">
                  <object data="img/screen.svg"> </object>
               </div>
            <div class="movie-seating">
               <div class="movie-seats-section">
                  <div class="movie-seats-side">
                     <?php 
                        for ($i = ord('A'); $i <= ord('G'); $i++){ 
                            $letter = chr($i);
                            if($letter == 'A'){ //Probably a better way of doing this but oh well
                              for ($j = 0; $j < 3; $j++){
                                 echo "<div class='seat' id='" . $letter . "-" . $j . "'></div>";
                               } 
                            }else{
                              for ($j = 1; $j < 4; $j++){
                                 echo "<div class='seat' id='" . $letter . "-" . $j . "'></div>";
                              }
                           }     
                        }
                        ?>  
                  </div>
                  <div class="movie-seats-center">
                     <?php 
                        for ($i = ord('A'); $i <= ord('G'); $i++){ 
                            $letter = chr($i);
                            for ($j = 4; $j < 8; $j++) {
                              echo "<div class='seat' id='" . $letter . "-" . $j . "'></div>";
                            }       
                        }
                        ?>
                  </div>
                  <div class="movie-seats-side">
                     <?php 
                        for ($i = ord('A'); $i <= ord('G'); $i++){ 
                            $letter = chr($i);
                            for ($j = 8; $j < 11; $j++) {
                              echo "<div class='seat' id='" . $letter . "-" . $j . "'></div>";
                            }       
                        }
                        ?>
                  </div>
                  <div class="movie-seat-rows">
                     <?php 
                        for ($i = ord('A'); $i <= ord('G'); $i++){ 
                            $letter = chr($i);
                            echo "<p>" . $letter . "</p>";
                        }
                        ?>
                  </div>
               </div>
               <div class="seating-legend">
                  <div class="box" id="available"></div>
                  <p>Available</p>
                  <div class="box" id="selected"></div>
                  <p>Selected</p>
                  <div class="box" id="reserved"></div>
                  <p>Reserved</p>
               </div>
            </div>
         </div>
         <div class="content-right">
            <div class="order-status">
               <h3>INCOMPLETE ORDER</h3>
               <p>In Progress</p>
            </div>
            <hr class="dotted-line"></hr>
            <p>Order ID #091322</p>
            <h3>Selected Seats</h3>
            <p>Regular</p>
            <div class="selected-seats"></div>
            <hr>
            <div class="price-info">
               <div class="price-item">
                  <p>Subtotal</p>
                  <p>40</p>
               </div>
               <div class="price-item">
                  <p>Discount</p>
                  <p>00</p>
               </div>
               <div class="price-item">
                  <p>Tax</p>
                  <p>5.50</p>
               </div>
            </div>
            <hr>
            <div class="price-item">
               <h3>Total</h3>
               <p>$45.50</p>
            </div>
            <div class="payment-select-box">
               <div class="payment-select">
                  <label for="payment">Payment</label>
                  <form id="payment" action="">
                     <input type="radio" id="debit" name="payment" value="debit">
                     <label for="credit">Debit</label><br>
                     <input type="radio" id="credit" name="payment" value="credit">
                     <label for="debit">Credit</label><br>
                     <input type="radio" id="paypal" name="payment" value="paypal">
                     <label for="debit">Paypal</label><br>
                  </form>
               </div>
            </div>
            <div class="customer-info">
                <h3>Customer Details</h3>
                <form>
                    <label for="name">Customer Name</label>
                    <input type="text" placeholder="John Smith" id="name" name="name">
                    <label for="phone">Contact Number</label>
                    <input type="tel" placeholder="012 345 6789" id="phone" name="phone">
                </form>
                <div class="customer-info-buttons">
                    <button class="btn" id="cancel">Cancel</button>
                    <button class="btn" id="confirm">Confirm</button>
                </div>
            </div>
         </div>
      </div>
      <script src="scripts/movie.js"></script>