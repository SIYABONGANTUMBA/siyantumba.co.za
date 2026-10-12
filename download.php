<?php
// download.php: gives out the password-protected matric certificate.
// The PDF itself is blocked from direct access (see assets/documents/.htaccess),
// so the only way to get it is through this script with the right password.

const MATRIC_PASSWORD = "hireme2026";
const MATRIC_FILE     = __DIR__ . "/assets/documents/matric.pdf";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /about.php#documents");
    exit;
}

$given = (string)($_POST["password"] ?? "");

if (!hash_equals(MATRIC_PASSWORD, $given)) {
    sleep(1); // slows down guessing
    header("Location: /about.php?matric=wrong#documents");
    exit;
}

if (!is_file(MATRIC_FILE)) {
    header("Location: /about.php?matric=missing#documents");
    exit;
}

header("Content-Type: application/pdf");
header("Content-Disposition: attachment; filename=\"Siyabonga-Ntumba-Matric-Certificate.pdf\"");
header("Content-Length: " . filesize(MATRIC_FILE));
header("Cache-Control: no-store");
header("X-Robots-Tag: noindex");
readfile(MATRIC_FILE);
exit;
