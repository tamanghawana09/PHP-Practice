<?php
    $xml = simplexml_load_file("weather.xml");
    print_r($xml);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Collection from xml</h1>
       <h2><?php echo $xml->location?></h2>
        <h2><?php echo $xml->temp?></h2>
        <h2><?php echo $xml->wind?></h2>
   
</body>
</html>