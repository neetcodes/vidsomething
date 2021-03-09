<?php
function listfiles() {
    function filefilter($a) {
        return((str_ends_with($a, "mkv")  || 
                str_ends_with($a, "mp4")  || 
                str_ends_with($a, "webm") ));
    }
    return(array_filter(scandir("mv/"), "filefilter"));
}

function title($fname) {
    $title = str_replace(array(".mkv", ".mp4", ".webm"), "", $fname);
    $yt_pattern = "/-[A-Za-z0-9-_]{11}/";
    $title = preg_replace($yt_pattern,"", $title);
    return($title);
}
function getsubs($fname) {
    $subshtml = "";
    foreach(glob("mv/" . str_replace(array("mkv", "mp4", "webm"), "*.vtt", $_GET['v'])) as $sub) {
        $lang_s = strrpos($sub, ".", -5 );
        $lang = substr($sub, $lang_s +1, -4);
    
        $subshtml = $subshtml . "<track kind=\"subtitles\" srclang=\"" . $lang . "\" src=\"" . $sub . "\" default>";
    }
    return($subshtml);
}

function getthumb($fname) {
    $thumb = "mv/thumbs/" . str_replace(array("mkv", "mp4", "webm"), "jpg", $fname);
    if (! file_exists($thumb))
        $thumb = "mv/" . str_replace(array("mkv", "mp4", "webm"), "jpg", $fname);
    if (! file_exists($thumb))
        $thumb = "mv/" . str_replace(array("mkv", "mp4", "webm"), "webp", $fname);
    return($thumb);
}

