<?php


class Collector
{
    protected int $milkStorage = 0;
    protected int $eggStorage = 0;

    public function collect($barn)
    {
        if (is_object($barn))
        {
            if (get_class($barn) == "Barn")
            {
                foreach ($barn->getCows() as $cow)
                {
                    if (get_class($cow) == "Cow") $this->milkStorage += $cow->getMilk();
                }
                foreach ($barn->getChickens() as $chicken)
                {
                    if (get_class($chicken) == "Chicken") $this->eggStorage += $chicken->getEgg();
                }
            }
        }
        else die("Parameter must be object of Barn");
    }
    public function showStorage()
    {
        echo "Молока: $this->milkStorage литров\n";
        echo "Яиц: $this->eggStorage\n";
    }

}