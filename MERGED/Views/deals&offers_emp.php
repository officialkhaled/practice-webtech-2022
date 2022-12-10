<!-- Employee UI -->

<html>
    <?php include "../common/header.php" ?>

  <body>
   
      <div class="container-main">

        <div class="my-2">
          <fieldset>

            <legend>Deals and Offers</legend>

            <h4>Already know what kind of train deal you're looking for but not sure what's on offer? Pick a type of deal below to see some of great savings you can make when booking BD train travel with us.</h4>

            <form action="" method="post" enctype="multipart/form-data">
              <div align="center">
                <div>
                  <div align="center" colspan="2">
                    <nav style="margin: 15px 20px">
                      <button type="button" name="viewImage">Add images</button>
                      <button type="button" name="deleteImage">
                        Delete images
                      </button>
                    </nav>
                  </div>
                </div>
                <div>
                  <div>

                  <img
                      src="../assets/img/album/train1.jpg"
                      alt="img_1"
                      width="280px" height="180px"
                    />
                    <p class="my-5">10% Discount on Turna Nishita Antonagar Train. <br>Valid till 20 December 2022</p>
                                    
                    <img
                      src="../assets/img/album/train2.jpg"
                      alt="img_2"
                      width="280px" height="180px"
                    />
                    <p class="my-5">15% off Standard Class day Return tickets for 2 adults travelling together on weekends<br>Valid till 25 December 2022</p>
                   
                
                    <img src="../assets/img/album/train4.jpg" 
                    alt="img_3" 
                    width="280px" height="180px" />
                     <p class="my-5">Buy 5 full tickets and get 1 free<br>Valid till 27 December 2022</p>

                    <img
                      src="../assets/img/album/train3.jpg"
                      alt="img_4"
                      width="280px" height="180px"
                    />
                     <p class="my-5">25% discount for students with their Student ID<br>Valid till 27 December 2022</p>
                  </div>
                
                </div>
              </div>
            </form>
          </fieldset>
        </div>
      </div>

      <?php include "../common/footer.php" ?>
  </body>
</html>