<?php

class ArrayFirst {

    public function array_first($array, $callback = null, $default = null)
    {
        if (is_null($callback)) {
            if (empty($array)) {
               return $default;
            }

            foreach ($array as $item) {
                return $item;
            }
        }

        foreach ($array as $key => $value) {
            if (call_user_func($callback, $value, $key)) {
                return $value;
            }
        }

        return $default;
    }

}


$users = [
  ['name' => 'Dale', 'score' => 10],
  ['name' => 'Billy', 'score' => 200],
];
$array = new ArrayFirst();

var_dump($array->array_first($users));