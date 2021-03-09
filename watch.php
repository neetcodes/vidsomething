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
</style>
<div id="vidcontainer">
<video height=500 controls autoplay>
    <source src="/mv/<?php echo($_GET['v']);?>">
</video>
<?php 
$title = str_replace(array(".mkv", ".mp4", ".webm"), "", $_GET['v']);
$yt_pattern = "/-[A-Za-z0-9-_]{11}/";
$title = preg_replace($yt_pattern,"", $title);
echo("<a class=\"title\">" . $title . "</a>");
?>
</div>
