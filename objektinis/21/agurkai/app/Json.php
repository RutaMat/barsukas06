<?php
namespace Bank;
use App\DB\DataBase;

class Json implements DataBase {

    private $data;
    private static $obj;

    public static function getJson() 
    {
        return self::$obj ?? self::$obj = new self;
    }
    private function __construct ()
    {
    if (!(file_exists(DIR.'/boxes.json'))) {
    file_put_contents(DIR.'/boxes.json', json_encode([]));
    }
    $this->data = json_decode(file_get_contents(DIR.'/boxes.json'), 1);
    }

    public function __destruct ()
    {
    file_put_contents(DIR.'/boxes.json', json_encode($this->data));
    }

    public function create(array $boxData) : void 
    {
        $this->data [] = $boxData;
    }

    public function update(int $boxId, array $boxData) : void 
    {
        foreach ($this->data as $index => $box) {
            if ($box['id'] == $boxId) {
                $this->data[$index] = $boxData;
                return;
            }
        }
    }

    public function delete(int $boxId) : void 
    {
        foreach ($this->data as $index => $box) {
            if ($box['id'] == $boxId) {
                unset($this->data[$index]);
                return;
            }
        }
    }

    public function show(int $boxId) : array 
    {
        foreach ($this->data as $index => $box) {
            if ($box['id'] == $boxId) {
                return $this->data[$index];
            }
        }
    }

    public function showAll() : array 
    {
        return $this->data;
    }

}