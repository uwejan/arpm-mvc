<?php

class Foo
{
    /** @var string **/
    private $sHelloString = 'Hello world!';

    /** @var array **/
    public $aArray = [];

    public function printString(): void
    {
        echo $this->helloString;
    }

    public function __toString(): string
    {
        $properties = get_object_vars($this);
        $output = '';

        foreach ($properties as $name => $value) {
            if (is_array($value)) {
                $value = implode(', ', $value);
            }
            $output .= "$name: $value" . PHP_EOL;
        }

        return $output;
    }
}

$foo = new Foo();
echo $foo;