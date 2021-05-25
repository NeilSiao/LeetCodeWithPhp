<?php

use App\ValidParen;
use PHPUnit\Framework\TestCase;

class ValidParenTest extends TestCase
{

    /**
     * @dataProvider Provider
     */
    public function testIsValidString(string $s, $expected): void
    {
        $twoSum = new ValidParen();
        $result = $twoSum->isValid($s);

        $this->assertEquals($result, $expected);
    }

    public function Provider(): array
    {
        return [
            ["()", true],
            ["()[]{}", true],
            ["(]", false],
            ["([)]", false],
            ["{[]}", true],
        ];
    }
}
