<head>
    <title>
        Pets with Human Names - <?php echo $title ?>
    </title>

    <meta charset="UTF-8">
    <meta name="author" content="Alex Glimco, Cassidy Roberts, Brianna Bright, Jack Matthews">
    <meta name="description" content="Pets with Human Names FuelPHP Template">
    <meta name="keywords" content="Pets with Human Names, Fuel, Template, HTML, CS312, Colorado State University">
    <?php echo Asset::css($css) ?>

</head>

<header>
    <div class="logo">
        <a><img src="https://i.imgur.com/1GjCd3S.png" alt="PetsWithHumanNamesLogo" height="225px"></a>
    </div>

    <h1>Pets with Human Names</h1>

    <div class="nav">
        <div class="nav-centered">
            <ul>
                <li><a href="https://cs.colostate.edu:4444/~bmbright/m1/index/pwhn/">Home</a></li>
                <li><a href="https://cs.colostate.edu:4444/~bmbright/m1/index/pwhn/about/about?direction=about">About</a></li>
                <li><a href="https://cs.colostate.edu:4444/~bmbright/m1/index/pwhn/colortable/colortable?direction=colortable">Color Table</a></li>
            </ul>
        </div>
    </div>
</header>


<body>

    <main>
        <?php echo $content ?>
    </main>

</body>