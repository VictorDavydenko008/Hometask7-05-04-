<?php

    namespace Prog\Myproject\Classes;

    use Prog\Myproject\Classes\Traits\Trait1;
    use Prog\Myproject\Classes\Traits\Trait2;

    class ManagerClass extends Admin
    {
        use Trait1;
        use Trait2;

        public function GetServer(): string
        {
            return "Current server: $this->serverName";
        }
    }