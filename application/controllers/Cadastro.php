<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class cadastro extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
//    echo 'exemplo'; 
        $this->load->view('cadastrodialetivo');
    }

    public function cadastrodialetivo() {
//    echo 'exemplo'; 
        $this->load->view('cadastrodialetivo');
    }

    public function CadastroHorario() {
//    echo 'exemplo'; 
        $this->load->view('CadastroHorario');
    }

    public function Cadastrotipoacesso() {
//    echo 'exemplo'; 
        $this->load->view('Cadastrotipoacesso');
    }

    public function Cadastrodipoacesso() {
//    echo 'exemplo'; 
        $this->load->view('Cadastrotipoacesso');
    }

    public function RelatorioAnual() {
//    echo 'exemplo'; 
        $this->load->view('RelatorioAnual');
    }

    public function RelatorioMensal() {
//    echo 'exemplo'; 
        $this->load->view('RelatorioMensal');
    }

    public function RelatorioGrafico() {
//    echo 'exemplo'; 
        $this->load->view('RelatorioGrafico');
    }

    public function Relatoriomediadialetivo() {
//    echo 'exemplo'; 
        $this->load->view('Relatoriomediadialetivo');
    }

    public function RelatorioPergamum() {
//    echo 'exemplo'; 
        $this->load->view('RelatorioPergamum');
    }

    public function ImportacaoPergamum() {
//    echo 'exemplo'; 
        $this->load->view('ImportacaoPergamum');
    }

}
