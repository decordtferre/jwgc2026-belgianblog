<?php
/**
 * Simpele Git Auto-Pull voor Grav op ULYSSIS
 */

// Beveiliging: vervang dit door een unieke token
$secret_token = 'Belgianjuniors2026';

if (!isset($_GET['token']) || $_GET['token'] !== $secret_token) {
    header('HTTP/1.1 403 Forbidden');
    die('Geen toegang.');
}

// Voer de git pull uit
$output = [];
$return_var = 0;
exec("git pull origin main 2>&1", $output, $return_var);

// Grav cache legen zodat wijzigingen direct zichtbaar zijn
exec("php bin/grav clear-cache 2>&1", $output);

// Toon resultaat (handig voor debuggen in de browser)
echo "<pre>" . implode("\n", $output) . "</pre>";
?>
