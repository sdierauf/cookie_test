<?php
    function checkCookie() {
        if (isset($_COOKIE["yaycookie"])) {
            return "YOU ALREADY HAVE A COOKIE";
        } else {
            return  "";
        }
    }

?>

<html>
    <body>
        <h1>HI!</h1>
        <h2><?php checkCookie() ?></h2>
        <form action="getcookie.php" method="post">
            <div><input type="submit" value="get a cookie" /></div>
        </form>
    </body>
</html>

