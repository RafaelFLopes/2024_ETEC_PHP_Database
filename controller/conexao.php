<?php

    // Definição da classe Conexao
    class Conexao {
        // Declaração das variáveis de conexão
        private $host = "localhost"; // Endereço do host do banco de dados
        private $usuario = "root";   // Nome de usuário do banco de dados
        private $senha = "";          // Senha do banco de dados
        private $banco = "exemplo_aula_pw"; // Nome do banco de dados
        private $conexao; // Variável para armazenar a conexão

        // Método construtor da classe
        public function __construct() {
            // Inicialização da conexão ao banco de dados
            $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);

            // Verifica se houve erro na conexão
            if ($this->conexao->connect_error) {
                // Caso tiver erro, interrompe a execução e mostra a mensagem de erro
                die("Falha na conexão: " . $this->conexao->connect_error);
            }
        }

        // Método para obter a conexão
        public function getConexao() {
            return $this->conexao;
        }
    }

?>