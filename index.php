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
        <form action="getcookie.php" method="post">
            <input type="submit" value "get a cookie" />
        </form>
    </body>
</html>

