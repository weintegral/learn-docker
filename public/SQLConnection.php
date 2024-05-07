<?php


interface SQLConnection
{
    public function connect(): ?PDO;
}