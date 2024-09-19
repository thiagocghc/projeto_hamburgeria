<?php

    Class Usuario{
        private $pdo;
        public $msgErro="";

        public function conectar($nome, $host, $usuario, $senha)
        {
            global $pdo;
            try{
                $pdo = new PDO("mysql:dbname=".$nome,$usuario,$senha);
            }
            catch (PDOException $e){
                $msgErro = $e->getMessage();
            }
        }

        public function cadastrar($nome,$cpf,$data_nasc,$sexo, $telefone, $email, $info, $lgpd,$palestra)
        {
            global $pdo;
            //Verificar se o email já está cadastrado
            $sql = $pdo->prepare("SELECT id_usuaio FROM usuario WHERE cpf = :c");
            $sql->bindValue(":c", $cpf);
            $sql->execute();
            if($sql->rowCount()>0)
            {
                return false;
            }
            else
            {
                $sql = $pdo->prepare("INSERT INTO usuario (nome,cpf,data_nasc, email,sexo, telefone, info, lgpd)
                VALUES (:n,:c,:d,:e,:s, :t, :i, :l)");
                $sql->bindValue(":n", $nome);
                $sql->bindValue(":c", $cpf);
                $sql->bindValue(":d", $data_nasc);
                $sql->bindValue(":e", $email);
                $sql->bindValue(":s", $sexo);
                $sql->bindValue(":t", $telefone);
                $sql->bindValue(":i", $info);
                $sql->bindValue(":l", $lgpd);
                $sql->execute();
                return true;
            }
        }

        public function logar($email, $senha)
        {
            global $pdo;
            $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", md5($senha));
            $sql->execute();

            if($sql->rowCount() > 0)
            {
                $dados = $sql->fetch();
                session_start();
                $_SESSION['id_usuario'] = $dados['id_usuario'];
                return True;
            }
            else
            {
                return False;
            }
        }
    }

?>