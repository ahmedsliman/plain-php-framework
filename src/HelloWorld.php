<?php
declare(strict_types=1);

use PagesApp;

class HelloWorld
{
    private $foo;

    /**
     * HelloWorld constructor.
     * @param $foo
     */
    public function __construct($foo)
    {
        $this->foo = $foo;
    }


    public function __invoke(): void
    {
        echo "Hello, {$this->foo} world!";
        exit;
    }
}