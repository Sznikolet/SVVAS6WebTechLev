<!DOCTYPE html>

<html lang="hu">
    
</head>
      <body>
        <meta charset="UTF-8">
        <h2>HTML 5 Űrlap SVVAS6</h2>
       
        <?php
            echo ("<strong>Név: </strong>" . $_POST['nev'] . "<br><br>");
            echo ("<strong>PIN kód: </strong>" . $_POST['kod'] . "<br><br>");
            echo ("<strong>Gyümölcs: </strong>" . $_POST['gyumolcs'] . "<br><br>");
            echo ("<strong>Életkor: </strong>" . $_POST['eletkor'] . "<br><br>");
            echo ("<strong>Lábméret: </strong>" . $_POST['labmeret'] . "<br><br>");
            echo ("<strong>Önbizalom: </strong>" . $_POST['onbizalom'] . "<br><br>");
        ?>
        <a href="svvas6_urlap.html"> Vissza az űrlapra </a>
    </body>
</html>