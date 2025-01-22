
<div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>United in mindfulness, our team harmonizes body, mind, and spirit on the journey to inner peace.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
        <?php 
            $sql = "SELECT * FROM team";
            $result = $conn->query($sql);
            if ($result->num_rows > 0):
                while($row = $result->fetch_assoc()):	
            ?>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="<?php echo $row['image'] ?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?php echo $row['name'] ?></h4>
                <span><?php echo $row['position'] ?></span>
                <p>The Best from all over the place.</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href="<?php echo $row['instagram_reference'] ?>"><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div>
          <?php 
                endwhile;
            endif;
            ?>

        </div>

      </div>