<?php
// Inclui o arquivo que contém a definição da classe de conexão
require_once '../controller/conexao.php';

// Definição da classe Pessoa
class Pessoa{

    // Declaração das propriedades da classe Pessoa

    private $id;
    private $nome; 
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;

    private $conexao; // Objeto de conexão com o banco de dados

    // Métodos get e set para cada propriedade da classe Pessoa
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    public function getCep(){
        return $this->cep;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getCelular(){
        return $this->celular;
    }
    public function setCelular($celular){
        $this->celular = $celular;
    }
    
    
    public function __construct(){ // Método construtor da classe Pessoa
        
        $this->conexao = new Conexao();// Instancia um objeto da classe de conexão
    }

     // Método para inserir no banco de dados
    public function inserir(){
        $sql = "INSERT INTO cliente (`nome`, `endereco`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `celular`) VALUES (?,?,?,?,?,?,?,?)"; // Query SQL para inserção de dados na tabela 'cliente'
        $stmt = $this->conexao->getConexao()->prepare($sql); // Prepara a query SQL para execução
        $stmt->bind_param('ssssssss', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular); // Define os parâmetros da query
        return $stmt->execute(); // Executa a query SQL
    }
}

?>