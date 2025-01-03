<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Catalog - LearnAI</title>
    <link rel="stylesheet" href="app/view/static/css/course-catalog.css">
</head>

<body>

    <!-- Sidebar -->
    <header>
        <div class="logo">
            <h1>LearnAI</h1>
        </div>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="course-catalog">Courses</a></li>
                <li><a href="#">About</a></li>
                <li><a href="login">Login</a></li>
                <li><a href="signup">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="catalog-content">

        <!-- Search Bar Section -->
        <section class="search-bar">
            <input type="text" placeholder="Search for courses..." id="searchInput" oninput="searchCourses()">
        </section>

        <!-- Course Categories Section -->
        <section class="categories">
            <h2>Categories</h2>
            <ul>
                <li><a href="WebDevelopment">Web Development</a></li>
                <li><a href="DataScience">Data Science</a></li>
                <li><a href="MachineLearning">Machine Learning</a></li>
                <li><a href="DigitalMarketing">Digital Marketing</a></li>
                <li><a href="MobileAppDevelopment">Mobile App Development</a></li>
            </ul>
        </section>

        <!-- Course List Section -->
        <section class="course-list">
            <h2>Featured Courses</h2>
            <div class="course-card">
                <img src="course-image1.jpg" alt="Course Image">
                <div class="course-info">
                    <h3>Web Development Bootcamp</h3>
                    <p>Instructor: Elearing</p>
                    <p>Rating: ★★★★☆</p>
                    <a href="login.html"><button class="cta-button" href="login.html">Enroll Now</button></a>
                </div>
            </div>
            <div class="course-card">
                <img src="course-image2.jpg" alt="Course Image">
                <div class="course-info">
                    <h3>Data Science with Python</h3>
                    <p>Instructor: Elearing</p>
                    <p>Rating: ★★★★★</p>
                    <a href="login.html"> <button class="cta-button">Enroll Now</button></a>
                </div>
            </div>
            <div class="course-card">
                <img src="course-image3.jpg" alt="Course Image">
                <div class="course-info">
                    <h3>Digital Marketing Masterclass</h3>
                    <p>Instructor: Elearing</p>
                    <p>Rating: ★★★☆☆</p>
                    <a href="login.html"><button class="cta-button">Enroll Now</button></a>
                </div>
            </div>
            <div class="course-card">
                <img src="course-image3.jpg" alt="Course Image">
                <div class="course-info">
                    <h3>Mobile App Development</h3>
                    <p>Instructor: Elearing</p>
                    <p>Rating: ★★★☆☆</p>
                    <a href="login.html"><button class="cta-button">Enroll Now</button></a>
                </div>
            </div>
        </section>

    </main>
    <script src="../js/course-catlog.js"></script>
</body>

</html>