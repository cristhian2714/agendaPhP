<?php 
    namespace Projeto\model;//Determinando o local do arquivo Pessoa

    class Pessoa{
        //public - Todo mundo visualiza
        //protected - Família Visualiza (Herança)
        //private - Apenas a classe mãe visualiza

        private int $codigo;//Tipo da variável
        private string $nome;
        private float $cpf;
        private string $telefone;
        private string $endereco;
        private boolean $status;//true e false

        //Primeiro grande método de qualquer classe
        public function __construct(){
            $this->codigo   = 0;//Instaciando
            $this->nome     = "";
            $this->cpf      = 0;
            $this->telefone = "";
            $this->endereco = "";
            $this->status   = true;
        }//fim do método construtor

        public function __construct(int $codigo, string $nome, float $cpf, string $telefone, string $endereco, boolen $status)

        {
            $this->codigo    = $codigo;
            $this->nome      = $nome;
            $this->cpf       = $cpf;
            $this-> telefone = $telefone;
            $this-> endereco = $endereco;
            $this->status    = $status;
        }//fim do construtor com parâmetros


        //Método Get e Set
        public function __get(string $dado):mixed
        {
            return $this->dado;
        }//fim do get

        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;
        }//fim do set

        public function imprimir():string  
        {
            return "<br>Código: ".$this->codigo.
                   "<br>Nome: ".$this->nome.
                   "<br>CPF: ".$this->cpf.
                   "<br>Telefone: ".$this->telefone.
                   "<br>Endereço: ".$this->endereco.
                   "<br>Status: ".$this->status;

        }//fim do método


    }//fim da classe pessoa










?>