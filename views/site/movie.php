<?php
require_once "navigation.php";
?>
<header>
    <p>Movie</p>
</header>
<?php
if (isset($data)&& !empty($data)){
    echo '<ul>';
    foreach ($data as $movie){

        echo "<li>".$movie->title."</li>";

    }
    echo '</ul>';
}
?>
<?php

require_once "footer.php";
?>
