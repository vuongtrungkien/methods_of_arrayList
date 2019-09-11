<?php


class MyList
{
    static $defaultCapacity = 10;
    public $arrayList = [];
    public $capacity = 0;


    public function __construct($capacity)
    {
        $this->capacity = $capacity;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function addIndex($index, $element)
    {
        if ($index < $this->getSize()) {
            foreach ($this->arrayList as $key => $item) {

                if ($index == $key) {
                    $value = $element;
                    for ($key; $key < count($this->arrayList); $key++) {
                        $temp = $this->arrayList[$key];
                        $this->arrayList[$key] = $value;
                        $value = $temp;
                    }
                    array_push($this->arrayList, $value);

                }
            }
        }
        echo "index is greater than the length of the array ";
    }

    public function add($element)
    {
        if ($this->getSize() < self::$defaultCapacity || $this->getSize() < $this->capacity) {
            array_push($this->arrayList, $element);
        } else {
            echo "The length has reached the limit";
        }
    }

    public function remove($index)
    {
        $newArray = [];

        foreach ($this->arrayList as $key => $item) {

            if ($index != $key) {
                array_push($newArray, $this->arrayList[$key]);
            }
        }
        $this->arrayList = $newArray;

    }

    public function getSize()
    {
        return count($this->arrayList);
    }

    public function cloneArrayList()
    {
        return $newArray = $this->arrayList;
    }

    public function contains($element)
    {
        foreach ($this->arrayList as $item) {
            if ($element == $item) {
                return true;
            }
        }
        return false;
    }

    public function indexOf($element)
    {
        foreach ($this->arrayList as $key => $item) {
            if ($element === $item) {
                return $key;
            }
        }
        return -1;
    }

    public function ensureCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    public function getElement($index)
    {
        if ($index < $this->getSize()) {
            return $this->arrayList[$index];
        } else{
           echo "ERROR in ArrayList.get";
        }
    }

    public function clear()
    {
        $this->arrayList = [];
    }
}