<?php

    // Inclui o arquivo que contém a definição da classe Pessoa
    require_once '../model/pessoa.php';

    // Declaração da classe PessoaController
    class PessoaController {
        // Declaração da variável de instância pessoa
        private $pessoa;
        
        // Método construtor da classe PessoaController
        public function __construct(){
            // Instancia um objeto da classe Pessoa
            $this->pessoa = new Pessoa();
            
            // Chama o método inserir
            $this->inserir();
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
    }

    // Cria uma nova instância da classe PessoaController, o que aciona o processo de inserção
    new PessoaController();
?>