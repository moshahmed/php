PHP=C:/xampp/php/php.exe
PHPU=$(PHP) phpunit.phar

testit::
	-$(PHPU) CalculatorTest.php
	-$(PHPU) DataTest.php
	-$(PHPU) StackTest.php
	-$(PHPU) TestEmpty.php
	-$(PHP) -f Assertions.php
