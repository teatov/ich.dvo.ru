<?php

namespace App\Interfaces;

interface CardSerializable
{
    /**
     * @return array<string, string>
     */
    public function cardSerialize(): array;
}
