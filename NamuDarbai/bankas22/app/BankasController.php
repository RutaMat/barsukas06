<?php
namespace Bank;


class BankasController {

    public function bankoTest($wahatToSay)
    {
        $labas = 'Hello, little One';
        return App::view('test', compact('wahatToSay', 'labas'));
    }

    // private static $dbType = 'json';
    private static $dbType = 'maria';
    
    public static function getData()
    {
        if (self::$dbType == 'json') {
            return Json::getJson();
        }
        if (self::$dbType == 'maria') {
            return Maria::getMaria();
        }
    }


    public function index()
    {
        return App::view('index', ['accounts' => self::getData()->showAll()]);
    }

    public function add($id)
    {
        return App::view('add', ['id' => $id]);
    }

    public function doAdd($id)
    {
        $id = (int) $id;
        $saskaita = self::getData()->show($id);


        
        $saskaita ['suma'] += (int)$_POST['suma'];
        App::setMessage(' Sąskaita papildyta ' .$_POST['suma']. ' Eur!');

        self::getData()->update($id, $saskaita);
        App::redirect();
    }

    public function remove($id)
    {
        return App::view('remove', ['id' => $id]);
    }

    public function doRemove($id)
    {
        $id = (int) $id;
        $accounts = self::getData()->showAll();
        $saskaita = self::getData()->show($id);
        
        foreach ($accounts as &$saskaita) {
            if ($saskaita['id'] == $id) {
                $saskaita ['suma'] -= (int)$_POST['suma'];
                // Validation. Jeigu sask yra maziau  negu norime paimti
                if ($saskaita['suma'] < (int) $_POST['suma']) {
                    App::setMessage('Trūksta lėšų.');
                    App::redirect(); 
                }}}

                self::getData()->update($id, $saskaita);
        App::redirect();
    }

    public function delete($id)
    {
        self::getData()->delete($id);
        App::redirect();

    }


    public function create()
    {
        $iban = 'LT01 '.rand(1000, 9999). ' '.rand(0000, 9999). ' '.rand(0000, 9999). ' '.rand(0000, 9999);
        return App::view('create_account', ['iban' => $iban] );
    }
    public function save()
    {

        //setMessage("Sąskaita sėkmingai sukurta.");
        $saskaita = ['id' => rand(1, 100), 'vardas' => $_POST['vardas'], 'pavarde' => $_POST['pavarde'], 'asmensKodas' => $_POST['asmensKodas'],  'saskaitosNr' => $_POST['saskaitosNr'], 'suma' =>  $_POST['suma']];



        if(($_SERVER['REQUEST_METHOD'] == 'POST') && empty($_POST['vardas']) || empty($_POST['pavarde'])||empty($_POST['asmensKodas'])){
            App::setMessage("Užpildyti tuščius langelius");
            App::redirect('create-account');
                 
            }
            if(isset($_POST['vardas']) && strlen($_POST['vardas']) < 3){
            App::setMessage("Vardas sudarytas daugiau negu 3 simboliai");
            App::redirect('create-account');
              
            }
            if(isset($_POST['pavarde']) && strlen($_POST['pavarde']) < 3){
            App::setMessage("Pavardė sudaryta daugiau negu 3 simboliai");
            App::redirect('create-account');
            
            }
            if(isset($_POST['asmensKodas']) && (strlen($_POST['asmensKodas']) != 11)) {
            App::setMessage("Neteisingas asmens kodas");
            App::redirect('create-account');
    
            }
            // $accounts = self::getData()->showAll();
            // // $saskaita = self::getData()->show();
            // foreach ($accounts as $saskaita) {

            //     // if ($_POST['asmensKodas'] == $saskaita['asmensKodas']) {
                    
                        
            //     //         App::setMessage('Toks asmens kodas yra. ');
            //     //         App::redirect('create-account');
            //     // } 
            
            // }
            

        self::getData()->create($saskaita);
        App::redirect();
        
    }
    
    
}