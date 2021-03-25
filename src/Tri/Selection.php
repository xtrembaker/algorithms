<?php

namespace Xtrembaker\Algorithms\Tri;

class Selection
{
    public function __invoke($input = []): array
    {
        for($i=0;$i<count($input)-1;$i++){
            for($j=$i+1;$j<count($input); $j++){
                if($input[$j] < $input[$i]){
                    $current = $input[$i];
                    $input[$i] = $input[$j];
                    $input[$j] = $current;
                }
            }
        }
        return $input;
    }
}