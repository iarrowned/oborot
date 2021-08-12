<?php


class Chicken
{
    protected string $ID;
    protected int $egg;

    public function __construct()
    {
        $this->ID = uniqid("chicken_");
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
    public function getEgg(): int
    {
        $this->egg = mt_rand(0, 1);
        return $this->egg;
    }
}