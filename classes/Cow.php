<?php


class Cow
{
    protected string $ID;
    protected int $milk;

    public function __construct()
    {
        $this->ID = uniqid("cow_");
    }

    /**
     * @return string
     */
    public function getID(): string
    {
        return $this->ID;
    }

    /**
     * @return float
     */
    public function getMilk(): int
    {
        $this->milk = mt_rand(8, 12);
        return $this->milk;
    }
}