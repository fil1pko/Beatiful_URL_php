<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nice looking urls in php :) </title>
</head>
<body>
    <header>
        <h2>so much header :*</h2>
    </header>

    <?php
        $directory = $_SERVER['REQUEST_URI'];
        $path = parse_url($directory, PHP_URL_PATH);
        $components = explode('/', $path);
        $first_part = $components[1];

        var_dump($first_part);
    ?>

    <style>
        .active{
            background-color: red;
        }
    </style>

    <nav>
        <ul>
            <li>
                <a href="/home" class="<?php if($first_part == 'home' or $first_part == '') {echo "active";} else {echo "";}?>">home</a>
            </li>
            <li>
                <a href="/about" class="<?php if($first_part == 'about') {echo "active";} else {echo "";}?>">about</a>
            </li>
            <li>
                <a href="/contact" class="<?php if($first_part == 'contact') {echo "active";} else {echo "";}?>">contact</a>
            </li>
        </ul>
    </nav>
