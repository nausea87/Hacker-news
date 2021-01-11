<?php

declare(strict_types=1);

// This file contains a list of global configuration settings.

return [
    'title' => 'Hacker news',
    'database_path' => sprintf('sqlite:%s/database/hackernews.db', __DIR__),
];
