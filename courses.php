<style>
    /* Custom CSS for Course Cards */
#courses .card {
    transition: transform 0.3s ease;
}

#courses .card:hover {
    transform: translateY(-5px);
}

/* Align card title and button vertically */
.card-body {
    display: flex;
    flex-direction: column;
    height: 100%;
}

.card-title {
    margin-bottom: 0.5rem;
}

.btn-primary {
    margin-top: auto;
}
</style>
<section id="courses" class="py-5 bg-light">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="fade-up">
            <h2>Courses</h2>
            <p>Transform Your Health Journey</p>
        </div><!-- End Section Title -->
        
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 gy-4">
            <?php 
            $sql = "SELECT * FROM courses";
            $result = $conn->query($sql);
            if ($result->num_rows > 0):
                while($row = $result->fetch_assoc()):	
            ?>
            <div class="col" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100">
                    <div class="position-relative">
                        <img src="admin/uploads/<?php echo $row['image'] ?>" class="card-img-top" style="width: 305px; height:200px" alt="<?php echo $row['title'] ?>">
                        <div class="course-level position-absolute bottom-0 start-0 p-2 bg-warning">
                            <?php echo $row['level'] ?>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo $row['title'] ?></h5>
                        <div class="mt-auto">
                            <a href="./view_course.php?id=<?php echo $row['id']; ?>" class="btn btn-primary mt-auto">View Course</a>
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
