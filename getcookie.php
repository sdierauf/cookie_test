<?php
    setcookie("yaycookie", 42, time() + 60 * 60 * 24 * 7);
    header("Location: index.php");
?>
<html>
    <script>console.log('getting cookie');</script>
</html>