<?php
declare(strict_types=1);

/**
 * Loads json/works-section.json (schema v2) and returns
 * ['categories' => [...], 'projects' => [...]]. Never throws: on any
 * problem it logs and returns empty lists so the page still renders.
 */
function load_works(string $path): array
{
    $empty = ['categories' => [], 'projects' => []];

    $raw = is_readable($path) ? file_get_contents($path) : false;
    if ($raw === false) {
        error_log("works: cannot read $path");
        return $empty;
    }

    try {
        $data = json_decode($raw, true, 16, JSON_THROW_ON_ERROR);
    } catch (JsonException $e) {
        error_log('works: invalid JSON - ' . $e->getMessage());
        return $empty;
    }

    if (!is_array($data) || !isset($data['projects']) || !is_array($data['projects'])) {
        error_log('works: unexpected structure');
        return $empty;
    }

    return [
        'categories' => is_array($data['categories'] ?? null) ? $data['categories'] : [],
        'projects'   => array_values($data['projects']),
    ];
}

function e($value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
