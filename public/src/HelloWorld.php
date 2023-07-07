<?php
declare(strict_types=1);

namespace Webserver;

class HelloWorld
{
    public function announce(): void
    {
        echo "Hello, autoloaded world!";
    }
}

?>