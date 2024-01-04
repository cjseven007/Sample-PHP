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

        .text {
            max-width: 800px;
            margin: 0 auto;
        }

        .text h2 {
            text-align: center;
        }

        #lessons {
            max-width: 800px;
            margin: 20px auto;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;

        }

        .lesson {
            background-color: white;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            padding: 20px;
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
        <p>This is my PHP project for Assessment 2. <br /> The PHP project is developed by myself and pushed to GitHub Repository to deploy it through RunCloud Auto Git Deployment with SSL installed.</p>
    </header>
    <h2 class="text">Technologies Implemented</h2>
    <section id="lessons">


        <?php
        $lessons = [
            ['title' => 'Deploy Using Auto Git Deployment on RunCloud', 'description' => 'I deployed my PHP project from my GitHub repository using deploy key and webhook.'],
            ['title' => 'Install SSL with RunCloud', 'description' => 'By exploring Self Signed Certificate in RunCloud, I am able to install SSL on my website and installed the root certificate on my local machine.'],

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