<?php include("util.php") ?>
<style>
.vid {
display: inline-grid;
margin: 10px;
}
.title {
display: inline;
text-overflow: ellipsis;
width: 300px;
}
#vids_container {
display: inline; 
}
</style>
<div id="vids_container">
<?php
$vids = listfiles();
foreach($vids as $a) {
    echo("<div class=\"vid\">");
    echo("<a href=\"/watch.php?v=" . $a . "\">");
    echo("<img src=\"" . getthumb($a) . "\" width=300 height=169/>");
    echo("</a>");
    echo("<a class=\"title\">" . title($a) . "</a>");
    echo("</div>");
}
?>
</div>
