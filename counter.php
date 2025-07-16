<?php
$counterFile = 'count.txt';
$fp = fopen($counterFile, 'c+');
if ($fp === false) {
    echo "Fehler beim Öffnen der Zählerdatei.";
    exit;
}
if (flock($fp, LOCK_EX)) {
    clearstatcache(true, $counterFile);
    $size = filesize($counterFile);
    $contents = $size > 0 ? fread($fp, $size) : '0';
    $count = (int)trim($contents);
    if ($count < 0) $count = 0;
    $count++;
    ftruncate($fp, 0);
    rewind($fp);
    fwrite($fp, $count);
    fflush($fp);
    flock($fp, LOCK_UN);
    echo "Besucheranzahl: " . $count;
} else {
    echo "Konnte Sperre nicht setzen.";
}
fclose($fp);
?>

