<?php


class Barn
{

    /**
     * @var array $cows список коров
     * @var array $chickens список куриц
     * @var int $count общее количество животных
     */
    protected array $cows = [];
    protected array $chickens = [];
    protected int $count;


    /**
     * Добавить животного в хлев
     * @param mixed $animal
     */
    public function addAnimal($animal)
    {
        if (is_object($animal))
        {
            if (get_class($animal) == 'Cow') $this->cows[] = $animal;
            elseif (get_class($animal) == 'Chicken') $this->chickens[] = $animal;
            else die("Parameter must be object of Cow or Chicken");
        }
    }

    /**
     * Получить количество животных в хлеву
     * @return int
     */
    public function getCount(): int
    {
        $this->count = count($this->cows) + count($this->chickens);
        return $this->count;
    }

    /**
     * Получить список коров в хлеву
     * @return array
     */
    public function getCows(): array
    {
        return $this->cows;
    }

    /**
     * Получиьть список куриц в хлеву
     * @return array
     */
    public function getChickens(): array
    {
        return $this->chickens;
    }

}