<?php
print_r($_SERVER['REQUEST_METHOD'], 'METHOD:');
// _d($_GET, 'GET:');
// _d($_POST, 'POST:');


?>
<a href="http://localhost/barsukas/14/get-post.php">back</a>
<br><br>
<form action="http://localhost/barsukas/14/get-post.php?island=1" method="post">
<input type="text" name="alio" value="reklama" readonly>
<button type="submit" name="jaja" value="ding-dong">TAIP</button>
</form>