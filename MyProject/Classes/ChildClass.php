<?php

    namespace Prog\Myproject\Classes;
    use Prog\Myproject\Classes\Traits\MainTrait;

    class ChildClass extends ParentClass
    {
        use MainTrait;
        public function Message() {
            echo "I am child";
        }
    }