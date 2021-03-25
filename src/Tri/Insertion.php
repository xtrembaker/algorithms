<?php

namespace Xtrembaker\Algorithms\Tri;

class Insertion {

    public function __invoke(array $input): array
    {
        for ($j = 1; $j < count($input); $j++) {
            $value = $input[$j];
            $i = $j - 1;
            while ($i > -1 && $input[$i] > $value) {
                $input[$i + 1] = $input[$i];
                $i = $i - 1;
            }
            $input[$i + 1] = $value;
        }
        return $input;
    }
}