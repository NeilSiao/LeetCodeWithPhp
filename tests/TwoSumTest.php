<?php

use App\TwoSum;
use PHPUnit\Framework\TestCase;

class TwoSumTest extends TestCase
{

    public function arrays_are_similar(array $a, array $b)
    {
        sort($a);
        sort($b);
        // if the indexes don't match, return immediately
        if (count(array_diff_assoc($a, $b))) {
            return false;
        }
        // we know that the indexes, but maybe not values, match.
        // compare the values between the two arrays
        foreach ($a as $k => $v) {
            if ($v !== $b[$k]) {
                return false;
            }
        }
        // we have identical indexes, and no unequal values
        return true;
    }

    /**
     * @dataProvider Provider
     */
    public function testCanFindExactlyOneSolution(int $target, array $dataSet, array $expected): void
    {
        $twoSum = new TwoSum();
        $result = $twoSum->find($target, $dataSet);

        $this->assertTrue($this->arrays_are_similar($result, $expected));
    }

    /**
     * @dataProvider Provider
     */
    // public function testOptimalCanFindExactlyOneSolution(int $target, array $dataSet, array $expected): void
    // {
    //     $twoSum = new TwoSum();
    //     $result = $twoSum->optimalfind($target, $dataSet);

    //     $this->assertTrue($this->arrays_are_similar($result, $expected));
    // }

    public function Provider(): array
    {
        // return [
        //     [1, 2, 3],
        // ];
        return [
            [9, [2, 7, 11, 15], [0, 1]],
            [6, [3, 2, 4], [1, 2]],
            [6, [3, 3], [0, 1]],
        ];
    }
}
