<?php

class Fibonacci
{
    public $fibonacci_array;
    public function fibonacci_suite($n)
    {
        $this->fibonacci_array = [];
        $this->fibonacci_array[0] = 1;
        $this->fibonacci_array[1] = 1;
        if ($n >= 2) {
            $i = 2;
            do {
                $this->fibonacci_array[$i] = $this->fibonacci_array[$i - 1] + $this->fibonacci_array[$i - 2];
                $i++;
            } while ($n >= $i);
        }
    }

    public function show_array()
    {
        foreach ($this->fibonacci_array as $key => $value) {
            if ($key % 5 == 0) {
                print('f(' . $key . ') = ' . $value);
                echo '<br>';
            }
        }
    }
}
