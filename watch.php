<?php include("util.php") ?>
<style>
#vidcontainer {
display:grid;
}
.title {
margin-top: 10px;
font-weight: bold;
overflow: ellipsis;
width: 850;
}
.rec {
display: inline-grid;
margin: 10px;
}
.rec_title {
display: inline;
text-overflow: ellipsis;
width: 300px;
}
#recs {
display: inline;
position: absolute;
top: 0;
left: 75%;
}
</style>
<div id="vidcontainer">
<video height=500 controls autoplay>
    <source src="/mv/<?php echo($_GET['v']);?>">
    <?php echo(getsubs($_GET['v'])); ?>
</video>
<?php 
echo("<a class=\"title\">" . title($_GET['v']) . "</a>");
?>
</div>

<div id="recs">
<?php
$vids = listfiles();
foreach(array_rand($vids, 5) as $rec) {
    $rec = $vids[$rec];
    echo("<div class=\"rec\">");
    echo("<a href=\"/watch.php?v=" . $rec . "\">");
    echo("<img src=\"" . getthumb($rec) . "\" width=300 height=169/>");
    echo("</a>");                                   
    echo("<a class=\"rec_title\">" . title($rec) . "</a>");
    echo("</div>");
}
?>
</div>
