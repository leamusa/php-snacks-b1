<?php
$matches = [
    [
        'home_team' => [
            'name' =>'Napoli',
            'score' => 82
        ],

        'away_team' => [
            'name' =>'Cagliari',
            'score' => 78
        ],
    ],
    [
        'home_team' => [
            'name' =>'Milan',
            'score' => 76
        ],

        'away_team' => [
            'name' =>'Inter',
            'score' => 85
        ],
    ],
    [
        'home_team' => [
            'name' =>'Lazio',
            'score' => 72
        ],

        'away_team' => [
            'name' =>'Chievo',
            'score' => 68
        ],
    ]
    ];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 1</title>
</head>
<body>
    <ul>
        <?php foreach ($matches as $match) : ?>
            <li><?php echo $match['home_team']['name'] ?> - <?php echo $match['away_team']['name'] ?> | <?php echo $match['home_team']['score'] ?> - <?php echo $match['away_team']['score'] ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>
