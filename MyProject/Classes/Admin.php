<?php

    namespace Prog\Myproject\Classes;

    abstract class Admin
    {
        protected string $serverName;

        public function __construct($serverName = 'localhost') {
            $this->serverName = $serverName;
        }

        /**
         * @param string $serverName
         */
        public function setServerName(string $serverName): void
        {
            $this->serverName = $serverName;
        }

        /**
         * @return string
         */
        public function getServerName(): string
        {
            return $this->serverName;
        }

        abstract public function GetServer();

        public function PrintOut(): void
        {
            print $this->GetServer() . "\n";
        }
    }
