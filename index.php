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
$dir = scandir ("mv/");
foreach($dir as $a) {
    if (! (str_ends_with($a, "mkv") || 
        str_ends_with($a, "mp4") || 
        str_ends_with($a, "webm") )) continue;
    $thumb = "/mv/thumbs/" . $a;
    $thumb = str_replace(array("mkv", "mp4", "webm"), "jpg", $thumb);
    echo("<div class=\"vid\">");
    echo("<a href=\"/watch.php?v=" . $a . "\">");
    echo("<img src=\"");
    echo($thumb);
    echo("\" width=300 height=169/>");
    echo("</a>");
    $title = str_replace(array(".mkv", ".mp4", ".webm"), "", $a);
    $yt_pattern = "/-[A-Za-z0-9-_]{11}/";
    $title = preg_replace($yt_pattern,"", $title);
    echo("<a class=\"title\">" . $title . "</a>");
    echo("</div>");
}
?>
</div>
