<?php

namespace anonymousclasses;

class Person {
    public function output(PersonWriter $writer){
        $writer->write($this);
    }

    public function getName() : string {
        return "John";
    }

    public  function getAge() : int {
        return 24;
    }
}