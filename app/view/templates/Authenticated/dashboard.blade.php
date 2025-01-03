<?php 
    include_once __DIR__.'/../../../controler/main.php';
    if(!$_SESSION['user_id']){
        header('Location: /');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - LearnAI</title>
    <link rel="stylesheet" href="app/view/static/css/dashboard.css">
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <h2>LearnAI</h2>
        </div>
        <nav class="sidebar-nav">
            <ul>
                <li><a href="dashboard">Dashboard</a></li>
                <li><a href="my-courses">My Courses</a></li>
                <li><a href="progress">Progress</a></li>
                <li><a href="dashboard">Recommended</a></li>
                <li><a href="#">Account Settings</a></li>
                <li><a href="logout">Logout</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="dashboard-content">

        <!-- Profile Section -->
        <section class="profile-section">
            <div class="profile">
                <img src="app/view/static/image/profile.png" alt="Profile Picture" class="profile-img">
                <div class="profile-info">
                    <h1>Welcome, <?php echo $usr_data['Name']; ?>!</h1>
                    <p>AI-driven courses tailored to your learning style and progress.</p>
                </div>
            </div>
        </section>

        
        <!-- Course Progress Section -->
        <section class="course-progress">
            <h2>Your Course Progress</h2>
            <div class="progress-cards">
            <?php if (is_array($couseData) || is_object($couseData)) {
            foreach ($couseData as $course) {?> 
                <div class="course-card">
                    <h3><?php echo $course['course_name']; ?></h3>
                    <div class="progress-bar">
                        <div class="progress" style="width: <?php echo $course['progress_percent']?>%;"></div>
                    </div>
                    <p><?php echo $course['progress_percent']?>% Complete</p>
                </div>
                <?php       }
        }?>
            </div>
        </section>

        <!-- Recommended Courses Section -->
        <section class="recommended-courses">
            <h2>Recommended For You</h2>
            <div class="recommended-list">
                <div class="course-card">
                    <h3>Mobile App Development</h3>
                    <p>Learn how to create Android and iOS apps.</p>
                    <button>Start Course</button>
                </div>
                <div class="course-card">
                    <h3>Digital Marketing</h3>
                    <p>Master SEO, SEM, and social media marketing strategies.</p>
                    <button>Start Course</button>
                </div>
                <div class="course-card">
                    <h3>Machine Learning</h3>
                    <p>Understand the basics of machine learning and data science.</p>
                    <button>Start Course</button>
                </div>
            </div>
        </section>
    </main>

</body>
</html>
