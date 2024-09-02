<?php
function sanitize(string $data): string
{
    return htmlspecialchars(stripslashes(trim($data)));
}
function dd(mixed $data): void
{
    echo '
    <pre>';
    print_r($data);
    echo '</pre>';

    die();
}