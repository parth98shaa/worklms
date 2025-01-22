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
                <div class="card h-100">
                    <div class="position-relative">
                    <img src="admin/uploads/<?php echo $row['image'] ?>" class="card-img-top" alt="<?php echo $row['title'] ?>">
                        <div class="card-img-overlay text-light d-flex flex-column justify-content-end">
                            <h5 class="card-title text-center"><?php echo $row['title'] ?></h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?php echo $row['author'] ?></p>
                        <div class="mt-auto">
                            <a href="<?php echo $row['href'] ?>" class="btn btn-primary mt-auto">View Article</a>
                        </div>
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

<style>
.card {
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
</style>
