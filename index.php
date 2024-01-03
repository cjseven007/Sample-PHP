<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lim Jia Chyuen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ededed;
        }

        header {
            /* background-color: #333;
            color: white; */
            text-align: center;
            padding: 20px;
            padding-top: 50px;

        }

        header img {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            object-fit: cover;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        }

        #lessons {
            max-width: 800px;
            margin: 20px auto;
        }

        .lesson {
            background-color: white;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            padding: 10px;
            padding-left: 20px;
            border-radius: 15px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;

            width: 100%;
        }

        footer a {

            color: white;
        }
    </style>
</head>

<body>
    <header>
        <img src="profilepic.jpg" alt="Profile Picture">
        <h1>Hi, I'm Lim Jia Chyuen</h1>
        <p>This is my PHP Project for Assessment 2.</p>
    </header>

    <section id="lessons">
        <h2>Key Things I Learnt</h2>

        <?php
        $lessons = [
            ['title' => 'Fundamentals of  Cloud Computing', 'description' => 'Defining Cloud Computing, identify its benefits, types of deployment model and many more.'],
            ['title' => 'AWS EC2', 'description' => 'Launching an instance of Amazon Elastic Cloud Compute, managing and configuring the server.'],
            ['title' => 'LAMP Stack', 'description' => 'Linux (OS), Apache (Web Server), MySQL (Database Server), PHP (Programming Language).'],
        ];

        // Loop through lessons and display them
        foreach ($lessons as $lesson) {
            echo '<div class="lesson">';
            echo '<h3>' . $lesson['title'] . '</h3>';
            echo '<p>' . $lesson['description'] . '</p>';
            echo '</div>';
        }
        ?>
    </section>

    <footer>
        <p>Email: limjiachyuen04@gmail.com</p>
        <p>LinkedIn: <a href="https://www.linkedin.com/in/limjiachyuen/">linkedin.com/in/limjiachyuen/</a> </p>
    </footer>
</body>

</html>