<?php
namespace Bank;


class BankasController {

    // public function agurkuTest($wahatToSay)
    // {
    //     $labas = 'Hello, little One';
    //     return App::view('test', compact('wahatToSay', 'labas'));
    // }

    public function index()
    {
        return App::view('index', ['accounts' => Json::getJson()->showAll()]);
    }

    public function add($id)
    {
        return App::view('add', ['id' => $id, 'user' =>Json::getJson()->show($id)]);
    }

    public function doAdd($id)
    {
        $id = (int) $id;
        $saskaita = Json::getJson()->show($id);


        
        $saskaita ['suma'] += (int)$_POST['suma'];
        // App::setMessage(' Sąskaita papildyta ' .$_POST['suma']. ' Eur!');

        Json::getJson()->update($id, $saskaita);
        App::redirect();
    }

    public function remove($id)
    {
        return App::view('remove', ['id' => $id]);
    }

    public function doRemove($id)
    {
        $id = (int) $id;
        $accounts = Json::getJson()->showAll();
        $saskaita = Json::getJson()->show($id);
        
        foreach ($accounts as &$saskaita) {
            if ($saskaita['id'] == $id) {
                $saskaita ['suma'] -= (int)$_POST['suma'];
                // Validation. Jeigu sask yra maziau  negu norime paimti
                if ($saskaita['suma'] < (int) $_POST['suma']) {
                    App::setMessage('Trūksta lėšų.');
                    App::redirect(); 
                }}}

        Json::getJson()->update($id, $saskaita);
        App::redirect();
    }

    public function delete($id)
    {
        Json::getJson()->delete($id);
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
        $saskaita = ['id' => rand(1, 100), 'suma' => 0, 'vardas' => $_POST['vardas'], 'pavarde' => $_POST['pavarde'], 'asmensKodas' => $_POST['asmensKodas'],  'saskaitosNr' => $_POST['saskaitosNr'], 'likutis' => $_POST['suma']];



        if(($_SERVER['REQUEST_METHOD'] == 'POST') && empty($_POST['vardas'])){
            App::setMessage("Įrašyti vardą");
            App::redirect('create-account');
                 
            }
            if(isset($_POST['name']) && strlen($_POST['name']) < 3){
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


        Json::getJson()->create($saskaita);
        App::redirect();
        
    }
    public function aprooval($id) {
        if(($_SERVER['REQUEST_METHOD'] == 'POST') && empty($_POST['vardas'])){
        App::setMessage("Įrašyti vardą");
        App::redirect();
             
        }
        if(isset($_POST['name']) && strlen($_POST['name']) < 3){
        App::setMessage("Vardas sudarytas daugiau negu 3 simboliai");
        App::redirect();
          
        }
        if(isset($_POST['pavarde']) && strlen($_POST['pavarde']) < 3){
        App::setMessage("Pavardė sudaryta daugiau negu 3 simboliai");
        App::redirect();
        
        }
        if(isset($_POST['asmensKodas']) && (strlen($_POST['asmensKodas']) != 11)) {
        App::setMessage("Neteisingas asmens kodas");
        App::redirect();

        }
    }
}