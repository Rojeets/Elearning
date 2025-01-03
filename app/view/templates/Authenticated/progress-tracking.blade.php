<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress Tracking - LearnAI</title>
    <link rel="stylesheet" href="app/view/static/css/progress-tracking.css">
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
    <main class="progress-content">

        <!-- Overall Progress Section -->
        <section class="overall-progress">
            <h1>Your Learning Progress</h1>
            <div class="progress-bar">
                <div class="progress" style="width: 60%;"></div>
            </div>
            <p>60% of your courses completed</p>
        </section>

        <?php if (is_array($couseData) || is_object($couseData)) {
            foreach ($couseData as $course) {
                if($course['progress_percent'] === 100.00){?>
        <!-- Completed Courses Section -->
        <section class="completed-courses">
            <h2>Completed Course</h2>
            <div class="course-list">
                <div class="course-card">
                    <h3><?php echo $course['course_name']; ?></h3>
                    <div class="progress-bar">
                        <div class="progress" style="width: <?php echo $course['progress_percent']?>%;"></div>
                    </div>
                    <p>Completed</p>
                </div>
            </div>
        </section>
<?php }else{?>
        <!-- Ongoing Courses Section -->
        <section class="ongoing-courses">
            <h2>Ongoing Course</h2>
            <div class="course-list">
                <div class="course-card">
                    <h3><?php echo $course['course_name']; ?></h3>
                    <div class="progress-bar">
                        <div class="progress" style="width: <?php echo $course['progress_percent']?>%;"></div>
                    </div>
                    <p><?php echo $course['progress_percent']?>% Completed</p>
                </div>
            </div>
        </section>
<?php       }
        }
    }
?>

        <!-- Learning Goals Section -->
        <section class="learning-goals">
            <h2>Your Learning Goals</h2>
            <ul>
                <li>Complete 3 courses in the next 3 months</li>
                <li>Achieve 100% completion in the Data Science course</li>
                <li>Master JavaScript fundamentals</li>
            </ul>
            <button class="cta-button">Set New Goal</button>
        </section>

    </main>

</body>
</html>
