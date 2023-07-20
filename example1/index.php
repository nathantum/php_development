<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            $greeting = "Good Morning";
            $name = "Tumses";

            echo "$greeting "." $name "."!";
            
            // <?=$name//
        ?>
    </h1>

    <h2>
        <?php 
            $books = [
                "A man of the people",
                "Things Falls Apart",
                "Gone with the winds",
                "Coming to America"
            ];
        ?>
        <ul>
            <?php foreach ($books as $book) : ?>
                <li> <?= $book ?> </li>
            <?php endforeach; ?>
        </ul>
        
        <p>
            <?= $books[1] ?>
            <h1> Top Athletes</h1>
        </p>
    </h2>

    <?php 
        $athletes = [
            [
                'name'=> "Eliud Kipchoge",
                'race'=> "Marathon",
                'wikiUrl'=> "https://en.wikipedia.org/wiki/Eliud_Kipchoge"
            ],
            [
                'name'=> "Benard Lagat",
                'race'=> "Fiftheen Hundred",
                'wikiUrl'=> "https://en.wikipedia.org/wiki/Bernard_Lagat"
            ],
            [
                'name'=> "Mo Farah",
                'race'=> "Ten Thousand",
                'wikiUrl'=> "https://en.wikipedia.org/wiki/Mo_Farah"
            ]
        ];
    ?>

    <ul>
        <?php foreach ($athletes as $athlete) : ?>
            <li>
                <a href="<?= $athlete["wikiUrl"] ?>">
                    <?= $athlete["name"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <!-- Functions -->

    $numbers = []
</body>
</html>