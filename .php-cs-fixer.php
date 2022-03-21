<?php

if (!class_exists('PhpCsFixer\Config', true)) {
    fwrite(STDERR, "Your php-cs-version is outdated: please upgrade it.\n");
    die(16);
}
$finder = PhpCsFixer\Finder::create()
    ->ignoreVCSIgnored(true)
    ->files()
    ->name('*.php')
    ->exclude('thinkphp')
    ->exclude('vendor')
    ->exclude('tests')
    ->in(__DIR__);

$config = new PhpCsFixer\Config();
$config->setUsingCache(true)
    ->setRiskyAllowed(true)
    ->setRules([
        '@PHP71Migration' => true,
        '@PHPUnit75Migration:risky' => true,
        '@PSR12' => true,
        // one should use PHPUnit built-in method instead
        'general_phpdoc_annotation_remove' => ['annotations' => ['expectedDeprecation']],
        // needs PHP 8+ or polyfill
        'modernize_strpos' => true,
        // EXPERIMENTAL rule, helping to ensure usage of 7.0+ typing
        'phpdoc_to_param_type' => true,
        'phpdoc_to_return_type' => true,
    ])
    ->setFinder($finder);

return $config;
