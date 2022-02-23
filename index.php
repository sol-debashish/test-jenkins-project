<?php

class Index {
    public function getPages() {
        return [];
    }

    public function loopy() {
        $i = 0;
        loop:
        echo("i = $i");
        $i++;
        if ($i < 10){
            goto loop;
        }
    }
}