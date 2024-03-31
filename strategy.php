<!DOCTYPE html>
<html>
<head>
    <title>Clash of Clans - Town Hall 2 Strategies</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        
        h1 {
            text-align: center;
        }
        
        .strategy {
            margin-bottom: 20px;
        }
        
        .strategy h2 {
            margin-bottom: 10px;
        }
        
        .strategy p {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>Clash of Clans - Town Hall 2 Strategies</h1>
    
    <?php
        // Define an array of strategies
        $strategies = array(
            array(
                'title' => 'Dragons',
                'description' => 'For this you just want to spam dragons everywhere and use lighting spells to take out an air defense',
                'tips' => 'Look for air defenses that are upgrading.',
            ),
          
        );
        
        // Loop through the strategies and display them
        foreach ($strategies as $strategy) {
            echo '<div class="strategy">';
            echo '<h2>' . $strategy['title'] . '</h2>';
            echo '<p>' . $strategy['description'] . '</p>';
            echo '<p><strong>Tips:</strong> ' . $strategy['tips'] . '</p>';
            echo '</div>';
        }
    ?>
</body>
</html>