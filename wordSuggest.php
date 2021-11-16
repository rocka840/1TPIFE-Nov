<?php
if(isset($_GET["StartChars"])){
    print ("We will answer with words that start with".$_GET["StartChars"]);
} else {
    print ("You are NOT asking anything.");
}
?>