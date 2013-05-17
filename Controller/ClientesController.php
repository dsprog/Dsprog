<?php
class ClientesController extends AppController {
    public $uses = array();
    
    public function index() {
        $this->set('title_page', 'Clientes');
        $this->layout = 'site';
    }
    
    public function add() {
        $this->set('title_page', 'Clientes Add');
        $this->layout = 'site';
    }
}
?>
