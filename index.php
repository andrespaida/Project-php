<?php
// Get the current year for the footer
$year = date("Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Web Presentation</title>
    <link rel="stylesheet" href="styles.css">  <!-- Link to your CSS file here -->
</head>
<body>
    <div class="container">
        <header>
            <h1>Web Presentation</h1>
            <p>Welcome to this professional web presentation</p>
        </header>

        <section class="content">
            <h2>About the Project</h2>
            <p>This project is designed to demonstrate the capabilities of PHP, HTML, and CSS in building dynamic web pages.</p>

            <h2>Goals</h2>
            <ul>
                <li>Explore web development technologies.</li>
                <li>Understand server-side scripting with PHP.</li>
                <li>Create visually appealing layouts using CSS.</li>
            </ul>

            <h2>Technical Overview</h2>
            <p>The project utilizes PHP for backend logic and HTML for content structure, with CSS to style the page for a clean, modern look.</p>
        </section>

        <footer>
            <p>&copy; <?php echo $year; ?> All rights reserved.</p>
        </footer>

    </div>

</body>
</html>