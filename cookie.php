 <?php
    if(isset($HTTP_POST_VARS["no_induk"]))
    {
     setcookie("cookie_no_induk", $HTTP_POST_VARS["no_induk"]);
    }
 ?> 
 <html>
    <head>
        <title>Cookies</title>
    </head>
    <body>
        <h2>Penggunaan Cookies</h2>
        <pre>
            <form action="cookie.php" method="post">
                NO. Induk : <input type="text" name="no_induk" size="10"> <input type="submit" name="go" value="GO">
            </form>
            <?php 
                if(isset($HTTP_POST_VARS["no_induk"]))
                {
                echo ("Klik <a href=\"cek_cookie.php\">disini</a> untuk melihat data cookies");
                }
            ?>
        </pre>
    </body>
 </html>

