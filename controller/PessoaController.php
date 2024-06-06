<?php

    // Inclui o arquivo que contém a definição da classe Pessoa

    //require_once '../model/pessoa.php'; Formatado de endereçamento manual (Rodando maquina local)

    require_once $_SERVER['DOCUMENT_ROOT'] . '/PW2_0205/model/pessoa.php';

    // Declaração da classe PessoaController
    class PessoaController {
        
        private $pessoa;// Declaração da variável de instância pessoa
        
        // Método construtor da classe PessoaController
        public function __construct(){
            //$this->pessoa = new Pessoa(); *ALTERADO*
            //$this->inserir(); *ALTERADO*
            if ($_GET['acao'] == 'inserir'){
                $this->inserir();
            }
        }

        // Método para inserir uma nova pessoa
        public function inserir(){
            // Define os atributos da pessoa com os valores enviados por POST
            $this->pessoa->setNome($_POST['nome']);
            $this->pessoa->setEndereco($_POST['endereco']);
            $this->pessoa->setBairro($_POST['bairro']);
            $this->pessoa->setCep($_POST['cep']);
            $this->pessoa->setCidade($_POST['cidade']);
            $this->pessoa->setEstado($_POST['estado']);
            $this->pessoa->setTelefone($_POST['telefone']);
            $this->pessoa->setCelular($_POST['celular']);
            
            // Chama o método inserir da classe Pessoa para adicionar a pessoa no banco de dados
            $this->pessoa->inserir();
        }

        public function listar(){ //listar as informações trazidas de pessoa
            return $this->pessoa->listar();
        }
    }

    // Cria uma nova instância da classe PessoaController, o que aciona o processo de inserção
    new PessoaController();
?>