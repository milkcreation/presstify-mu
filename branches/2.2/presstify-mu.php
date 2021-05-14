<?php

declare(strict_types=1);

use tiFy\Wordpress\WpKernel;

(new WpKernel(get_template_directory() . '/config'))->boot();
