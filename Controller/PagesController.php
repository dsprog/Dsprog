<?php
App::uses('AppController', 'Controller');
class PagesController extends AppController {
	public $name = 'Pages';
	public $uses = array();

        public function display() {
            $this->set('title_page', 'Dsprog - Desenvolvedor Web Freelance');
            $this->layout = 'site';
        }
        public function curriculum() {
            $this->set('title_page', 'Dsprog - Desenvolvedor Web Freelance');
            $this->layout = 'site';
        }
        public function contato() {
            $this->set('title_page', 'Contato - Dsprog');
            $this->layout = 'site';
        }
        public function teste() {
            // teste do sistema (banco de dados, permissões, etc)
            $this->set('title_page', 'Validando o sistema');
	}
}
