<?php


namespace App\Services;


interface MessageServiceInterface
{
    public function createMessage(array $attributes): int;
}