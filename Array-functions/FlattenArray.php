<?php

class FlattenArray {

    public function flatten(array $nestedArray)
    {
        $myFlattenArray = [];
        foreach ($nestedArray as $element) {
            if (!is_array($element)) {
                $myFlattenArray[] = $element;
            } elseif (is_array($element)) {
                $recursionResult = $this->flatten($element);
                foreach ($recursionResult as $number) {
                    $myFlattenArray[] = $number;
                }
            }
        }
        return $myFlattenArray;
    }
}

$items = [1,2,[3,4,[5,6,[7]]]];
$flattenArrayObject = new FlattenArray();
$flattenArray = $flattenArrayObject->flatten($items);
echo '<pre>';
print_r($flattenArray);
echo '</pre>';