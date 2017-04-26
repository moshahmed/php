<?php
/* 2017-04-26
  From http://php.net/manual/en/function.assert.php
  Usage: C:/xampp/php/php.exe -f Assertions.php
*/

// Active assert and make it quiet
assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 0);
assert_options(ASSERT_QUIET_EVAL, 1);

function my_assert_handler($file, $line, $code) {
    echo "Assertion Failed: $file:$line:$code";
}
assert_options(ASSERT_CALLBACK, 'my_assert_handler');
assert(2==1);
?>
