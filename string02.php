<?php
$str = <<<EOD
Example of string
Spanning multiple lines
Using heredoc syntax.
EOD;

/* MORE COMPLEX Example, with variables. */
class foo
{
    var $foo;
    var $bar;
    function foo()
    {
        $this->foo = 'foo';
        $this->bar = array ('Bar1', 'Bar2', 'Bar3');
    }
}
$foo = new foo();
$name = 'Achmatim';

echo <<<EOT
<u>$str</u><br>
my name is "<b>$name</b>". I am printing some <b>$foo->foo</b>.
This should print a capital 'A' : \x41
EOT;
?>