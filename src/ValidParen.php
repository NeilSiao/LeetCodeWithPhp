<?php
namespace App;

// Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.

// An input string is valid if:

// Open brackets must be closed by the same type of brackets.
// Open brackets must be closed in the correct order.

class ValidParen
{
    // strlen, substr(string, start, length)
    public function isValid($string): bool
    {
        $length = strlen($string);
        if ($tmp == 0) {
            return false;
        }

        $i   = 0;
        $tmp = '';
        while ($i < $length) {
            $char = substr($string, $i, 1);
            switch ($char) {
                case '(':
                case '[':
                case '{':
                    $tmp = $tmp . $char;
                    break;
                case ')':
                case ']':
                case '}':
                    $cur = substr($tmp, strlen($tmp) - 1, 1);
                    $tmp = substr($tmp, 0, strlen($tmp) - 1);
                    if ($char == ')' && $cur == '(') {} else if ($char == ']' && $cur == '[') {
                    } else if ($char == '}' && $cur == '{') {} else {
                        return false;
                    }
                    break;
                default:
                    break;
            }
            $i++;
        }
        if ($tmp != '') {
            return false;
        }

        return true;
    }
}
