<?php

function sanitize(string $data): string
{
    return htmlspecialchars(stripslashes(trim($data)));
}