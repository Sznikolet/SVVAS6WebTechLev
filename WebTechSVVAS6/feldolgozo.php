<!DOCTYPE html>

<html lang="hu">
    
</head>
      <body>
        <meta charset="UTF-8">
        <h2>Űrlap SVVAS6</h2>
       
        <?php
        

            echo ("<strong>Vezetéknév: </strong>" . $_POST['Vezeteknev'] . "<br><br>");
            echo ("<strong>Keresztnév: </strong>" . $_POST['Keresztnev'] . "<br><br>");
            echo ("<strong>Fánk: </strong>" . $_POST['fank'] . "<br><br>");
            echo ("<strong>Életkor: </strong>" . $_POST['eletkor'] . "<br><br>");
           
           
             ?>
            
        <a href="urlap.html"> Vissza az űrlapra </a>
    </body>
</html>