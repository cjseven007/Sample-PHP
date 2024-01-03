<!-- portfolio.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }

        #projects {
            max-width: 800px;
            margin: 20px auto;
        }

        .project {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            padding: 10px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Your Name</h1>
        <p>Web Developer</p>
    </header>

    <section id="projects">
        <h2>Projects</h2>

        <?php
        // Array of projects
        $projects = [
            ['title' => 'Project 1', 'description' => 'Description of Project 1'],
            ['title' => 'Project 2', 'description' => 'Description of Project 2'],
            // Add more projects as needed
        ];

        // Loop through projects and display them
        foreach ($projects as $project) {
            echo '<div class="project">';
            echo '<h3>' . $project['title'] . '</h3>';
            echo '<p>' . $project['description'] . '</p>';
            echo '</div>';
        }
        ?>
    </section>

    <footer>
        <p>Contact: your.email@example.com</p>
    </footer>
</body>
</html>
