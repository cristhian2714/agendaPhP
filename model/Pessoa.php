<?php 
    namespace Projeto\model;//Determinando o local do arquivo Pessoa
    require_once('Endereco.php');
    use Projeto\model\Endereco;

    class Pessoa{
        //public - Todo mundo visualiza
        //protected - Família Visualiza (Herança)
        //private - Apenas a classe mãe visualiza

        private int $codigo;//Tipo da variável
        private string $nome;
        private float $cpf;
        private string $telefone;
        private Endereco $endereco;
        private bool $status;//true e false

       
        public function __construct(int $codigo, string $nome, float $cpf, string $telefone, Endereco $endereco, bool $status)

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
                   "<br>Endereço: ".$this->endereco->imprimir().
                   "<br>Status: ".$this->status;

        }//fim do método


    }//fim da classe pessoa










?>