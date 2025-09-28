<?php
// Robust file-based counter for HTML pages via image beacon
header('Content-Type: image/gif');         // return a tiny image
header('Cache-Control: no-store');         // avoid caching

// --- minimal bot/HEAD filtering (optional) ---
if ($_SERVER['REQUEST_METHOD'] === 'HEAD') exit;       // ignore HEAD
$ua = $_SERVER['HTTP_USER_AGENT'] ?? '';
if (preg_match('/bot|crawl|spider|slurp|fetch/i', $ua)) {
    // comment the next line if you want to count bots
    // exit; 
}

// --- increment counter safely ---
$counterFile = __DIR__ . '/counter.txt';
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, "0", LOCK_EX);
}
$fp = fopen($counterFile, 'c+');
if ($fp && flock($fp, LOCK_EX)) {
    $count = (int)stream_get_contents($fp);
    $count++;
    rewind($fp);
    ftruncate($fp, 0);
    fwrite($fp, (string)$count);
    fflush($fp);
    flock($fp, LOCK_UN);
}
if ($fp) fclose($fp);

// --- output a 1x1 transparent GIF ---
echo base64_decode('R0lGODlhAQABAIABAP///wAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==');
