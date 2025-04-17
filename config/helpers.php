<?php
// Sanitize input
function sanitize(string $data): string {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Simple performance logger
function log_time(string $label) {
    static $times = [];
    $now = microtime(true);
    if (isset($times[$label])) {
        error_log(" [$label] +" . round($now - $times[$label], 4) . "s");
    }
    $times[$label] = $now;
}
?>
