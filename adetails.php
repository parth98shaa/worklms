<section id="articles" class="py-5 bg-light">
    <div class="container text-center">
        <div class="section-title" data-aos="fade-up">
            <h2>Articles</h2>
            <p>Transform Your Health Journey</p>
        </div><!-- End Section Title -->
        
        <div class="row gy-4">
            <?php 
            $sql = "SELECT * FROM articles";
            $result = $conn->query($sql);
            if ($result->num_rows > 0):
                while($row = $result->fetch_assoc()):	
            ?>
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card position-relative">
                    <img src="<?php echo $row['image'] ?>" class="card-img-top" alt="<?php echo $row['title'] ?>">
                    <div class="card-img-overlay d-flex flex-column justify-content-center text-light">
                        <h5 class="card-title text-center"><?php echo $row['title'] ?></h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?php echo $row['author'] ?></p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div> 
            <?php 
                endwhile;
            endif;
            ?>
        </div><!-- End Row -->
        
    </div><!-- End Container -->
</section>
