<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- Font Awesome CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

        <?php require_once('inc/header.php');?>
     <?php
                
                // Fetch course details if ID is provided in query string
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM courses WHERE id = $id";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $title = $row['title'];
                        $description = $row['description'];
                        $module = $row['module'];
                        $duration = $row['duration'];
                        $teacher = $row['teacher'];
                        $level = $row['level'];
                        $image= $row['image'];
                    } else {
                        echo "<div class='alert alert-danger mt-3' role='alert'>Course not found.</div>";
                    }
                } else {
                    echo "<div class='alert alert-danger mt-3' role='alert'>id not found.</div>";
                }
                ?>
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #495057;
        }

        .course-header {
            position: relative;
            width: 100%;
            height: 75vh;
            background-image: url('admin/uploads/<?php echo $image; ?>');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            /* color: #ffffff; */
        }

        .course-header h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .course-header p {
            font-size: 1.5rem;
        }

        .course-description {
            background-color: #ffffff;
            padding: 50px 20px;
            margin-top: -50px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        .course-description h2 {
            color: #0056b3;
            margin-bottom: 20px;
        }

        .course-description p {
            font-size: 1.2rem;
        }

        .course-info {
            background-color: #f0f9ff;
            padding: 30px 20px;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .course-info h2 {
            color: #0056b3;
            margin-bottom: 20px;
        }

        .course-info p {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .module-section {
            background-color: #ffffff;
            padding: 30px 20px;
            margin-top: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .module-section h2 {
            color: #0056b3;
            margin-bottom: 20px;
        }

        .pdf-link {
            font-size: 1.2rem;
            display: inline-block;
            padding: 10px 20px;
            background-color: #0056b3;
            color: #ffffff;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .pdf-link:hover {
            background-color: #00418c;
        }

        @media (max-width: 768px) {
            .course-header {
                height: 300px;
            }

            .course-header h1 {
                font-size: 2.5rem;
            }

            .course-header p {
                font-size: 1.2rem;
            }
        }
    </style>
</head>

<body>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="./" class="logo d-flex align-items-center me-auto">
                <img src="assets/img/logo.png" alt="">
                <h1 class="sitename">Bliss Journey</h1>
            </a>
        </div>
    </header>

    <!-- Course Header -->
    <div class="course-header">
        <div class="container-fluid">
            <div class="row bg-dark bg-opacity-25 d-flex align-content-center" style="height: 75vh;">
                <div class="col-md-6 bg-warning">
                    <div class="course-name text-light">
                        <h1 class="course-name text-light"><?php echo htmlspecialchars($title); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Course Description -->
    <section class="course-description">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2>Description</h2>
                    <p><?php echo htmlspecialchars($description); ?></p>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid bg-dark text-light p-5">
        <div class="row justify-content-center">
            <div class="col-md-2 col-item text-center">
                <i class="fas fa-certificate fa-3x mb-2"></i>
                <div class="fs-5">Certificate of completion</div>
            </div>
            <div class="col-md-2 col-item text-center">
                <i class="fas fa-book fa-3x mb-2"></i>
                <div class="fs-5">Self Paced Learning</div>
            </div>
            <div class="col-md-2 col-item text-center">
                <i class="fas fa-briefcase fa-3x mb-2"></i>
                <div class="fs-5">10+ years Experience</div>
            </div>
        </div>
    </div>
    <!-- <div class="container-fluid bg-dark">
        <div class="row d-flex justify-content-center">
            <div class="col-3">Certificate of completion</div>
            <div class="col-3">Self Paced Learning</div>
            <div class="col-3">10+ years Experience</div>

        </div>

    </div> -->

    <!-- Course Info -->
    <section class="course-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Course Info</h2>
                    <p><strong>Duration:</strong> <?php echo $duration; ?> weeks</p>
                    <p><strong>Level:</strong> <?php echo htmlspecialchars($level); ?></p>
                </div>
                <div class="col-md-6">
                    <h2>Teacher</h2>
                    <p><?php echo htmlspecialchars($teacher); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Module Section -->
    <section class="module-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <h2>Module PDF</h2>
                    <a href="admin/<?php echo $module; ?>" class="pdf-link" target="_blank">Download Module PDF</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS Bundle (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
