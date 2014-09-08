<?php
    function checkCookie() {
        if (isset($_COOKIE["yaycookie"])) {
            return "YOU ALREADY HAVE A COOKIE";
        } else {
            return  "";
        }
    }

    error_reporting(-1);

?>

<html>
    <body>
        <h1>HI!</h1>
        <h2><?=checkCookie() ?></h2>
        <form action="getcookie.php" method="post">
            <div><input type="submit" value="get a cookie" /></div>
        </form>
    </body>
</html>

