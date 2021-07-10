<?php
use App\DB\DataBase;
class Json implements DataBase {
  public function __construct()
  {
    if (!file_exists(__DIR__.'/sarasai.json')) {
        file_put_contents(__DIR__.'/sarasai.json', json_encode([]));
       
    }
    $this->data = json_decode(   file_get_contents(__DIR__.'/sarasai.json')    , 1);
  }  
  public function __destruct()
  {
    file_put_contents(__DIR__.'/sarasai.json', json_encode([]));
  }
   public function create(array $userData) : void
{
$this->data[] = $userData;
}
    public function update(int
 $userId, array $userData) : void 
 {
foreach($this->data as $index => $user) {
    if ($user['id'] == $userId) {
        $this->data[$index] = $userData;
        return;
    }
}
   
 }

  public  function delete(int
 $userId) : void
 {
    foreach($this->data as $index => $user) {
        if ($user['id'] == $userId) {
            unset($this->data[$index]);
            return;
        }
    }
 }

   public function show(int
 $userId) : array
 {
    foreach($this->data as $index => $user) {
        if ($user['id'] == $userId) {
           return $this->data[$index];
        }
    }
 }
    
    function showAll() : array 
    {

                return $this->data;
            
        
    }
}