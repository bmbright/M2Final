
    <head>
            <meta charset = "UTF -8">
            <title>Brianna Bright Homepage</title>
            <meta name = "author" content = "Brianna Bright">
            <meta name = "decription" content = "My first website crated for the Your Homepage assignment">
            <meta name = "keywords" content = "HTML5, Nav-Bar, Demo, Homepage">
            <?php echo Asset::css($css)?>
    </head>

    <body class = "formater">
        <nav class = "item2">
            <br>
            <a class= "active" href="https://cs.colostate.edu:4444/~bmbright/cs312/fuelviews/index/eastwest/">Home</a>
            <a href="https://www.linkedin.com/in/brianna-bright-8474371b6/" target="_blank">My Linkedin</a>
            <a href= "https://cs.colostate.edu:4444/~bmbright/cs312/fuelviews/index/eastwest/east?direction=east">East</a>
            <a href= "https://cs.colostate.edu:4444/~bmbright/cs312/fuelviews/index/eastwest/west?direction=west">West</a>
            <?php echo '<a href="https://cs.colostate.edu:4444/~bmbright/cs312/fuelviews/index/eastwest/'.$direction.'">What I Did at Disney</a>'?>
            <?php echo '<a href="https://cs.colostate.edu:4444/~bmbright/cs312/fuelviews/index/eastwest/'.$direction2.'">Disney Tips From a Former Cast Member</a>'?>
            <br>
        </nav>
        <br>

        <?php echo $content ?>

    </body>
