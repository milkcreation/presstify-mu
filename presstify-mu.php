<?php

declare(strict_types=1);

use Pollen\WpKernel\WpKernel;

$wpKernel = new WpKernel(get_template_directory() . '/config');

add_action('after_setup_theme',  function () use ($wpKernel) {
    $wpKernel->boot();
}, -1);