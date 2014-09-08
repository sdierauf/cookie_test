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
        <pre id='data'>
        </pre>
    </body>
    <script>
        function listCookies() {
            var theCookies = document.cookie.split(';');
            var aString = '';
            for (var i = 1 ; i <= theCookies.length; i++) {
                aString += i + ' ' + theCookies[i-1] + "\n";
            }
            return aString;
        }

        document.getElementById('data').innerHTML = listCookies();
    </script>
</html>

