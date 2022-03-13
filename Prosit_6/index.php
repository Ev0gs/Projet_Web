<?php
    $page= $_GET['page'] ?? 1;
    $code = 128512;
    $code = $code + ($page-1)*256
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Prosit 6</title>
    <!-- <link rel="stylesheet" href="Style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <H1>Emojis</H1>
    <?php 
    echo "<p>Page $page</p>";
    ?>
    <a href="?page=<?=$page - 1?>" class="btn btn-dark">< Previous</a>
    <a href="?page=<?=$page + 1?>" class="btn btn-dark">Next ></a>
    <table class="m-2">
        <?php
        for ($i = 0; $i <= 15; $i++) 
        {
            echo "<tr>";
            for($j = 0; $j <= 15; $j++)
            {
                $emoji = "&#".$code;
                echo "<td>$emoji</td>";
                $code++;
            }
            echo "</tr>";
        }
        ?>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
