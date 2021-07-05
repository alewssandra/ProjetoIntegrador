<?php

session_start();

class Login
{

    public $servidor;
    public $usuario;
    public $email;
    public $senha;
    public $banco;
    public $tabela;
    public $dados;
    public $selecao;
    public $sql;
    public $informacao;
    public $usuarioBanco;
    public $senhaBanco;
    public $resultado;
    public $idLoginBanco;
    public $fechar;



    public function conexao()
    {
        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->senha = "";
        $this->banco = "projeto";
        $this->tabela = "cadastro";


        $this->conectar = mysqli_connect($this->servidor, $this->usuario, $this->senha) or die("Não é possivel conectar ao servidor!");

        $this->dados = mysqli_select_db($this->conectar, $this->banco) or die("Não é possivel selecionar a base de dados!");
    }

    public function selecao($email, $senha)
    {
        $this->conexao();
        $this->selecao = "select * from $this->tabela where (email='$email' && senha='$senha')";
        $this->sql = mysqli_query($this->conectar, $this->selecao) or die("Problema na consulta!");
        $this->informacao = mysqli_fetch_assoc($this->sql);
        $this->usuarioBanco = $this->informacao['email'];
        $this->senhaBanco = $this->informacao['senha'];
        $this->idLoginBanco = $this->informacao['idLogin'];
        $this->fechar = mysqli_close($this->conectar);
    }




    public function verificaSelecao($email, $senha)
    {
        $this->selecao($email, $senha);
        if (($email == $this->usuarioBanco) && ($senha == $this->senhaBanco) && ($email != null && $senha != null)) {
            $_SESSION["email"] = $this->usuarioBanco;
            $_SESSION["senha"] = $this->senhaBanco;
            header('location: logado.php');
        } else {
            $resultado = "Usuario ou senha incorretos!";
        }
        return $resultado;
    }

}
