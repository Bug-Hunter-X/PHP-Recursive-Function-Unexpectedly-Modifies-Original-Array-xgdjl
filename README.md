# PHP Recursive Function Bug

This repository demonstrates a bug in a PHP recursive function that unexpectedly modifies the original array instead of returning a new modified array. The function `processData` is intended to process nested arrays and modify their string values. However, due to pass-by-reference behavior in PHP, it inadvertently changes the original array.

## Bug Description

The recursive call within the function `processData` modifies the original array directly due to PHP's pass-by-reference behavior for arrays.  This leads to unexpected side effects and changes the original array instead of creating a new one.

## Solution

The solution involves creating a copy of the array before processing, ensuring that the original array remains unchanged.