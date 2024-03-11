<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COdeignitor</title>
</head>

<body>
    <h4><?= $name; ?> </h4>
    <h4><?= $age; ?> </h4>
    <h4><?= $city; ?> </h4>
    <h4>Subjet List</h4>
    <ul>

        <?php
        // if(count($subject) > 0)
        // foreach ($subject as $value) {
        //     echo "<li>".$value."</li>";
        // }else{
        //     echo "sorry! No Records Found";
        // }
        // template engine method
        if (count($subject) > 0):
            foreach ($subject as $sub) :
        ?>
                <li><?= $sub ?></li>
        <?php
            endforeach;
        else:
            echo "Sorry! no record found";
        endif;

        ?>

    </ul>

</body>

</html>