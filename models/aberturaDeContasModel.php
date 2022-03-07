<?php 

    class User { //CLASSE USUÁRIO
        
        private $login;
        private $senha;
        private $nome;
        private $cpf;

        public function __construct($login,$senha,$nome,$cpf){ // CONSTRUTOR

            $this->login = $login;
            $this->senha = $senha;
            $this->nome  = $nome;
            $this->cpf   = $cpf;
    
        }

        // GETTERS

        public function getLogin(){
            return $this->login;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getCpf(){
            return $this->cpf;
        }

        public function setUser(User $user){

            $conn = Connection::getConn();//CONEXÃO COM A BASE

            //CONDIÇÃO PARA VER O ÚLTIMO NÚMERO DE CONTA E ACRESCENTAR UM NÚMERO

            $getCon = "SELECT conta FROM Users ORDER BY id DESC LIMIT 1";
            $getCon = $conn->prepare($getCon);
            $getCon->execute();
            $conta = $getCon->fetch(PDO::FETCH_ASSOC);

            $conta = $conta['conta'];
            $conta = (int)$conta+1;

            //PEGANDO O RESTANTE DAS VARIÁVEIS

            $login   = $user->getLogin();
            $senha   = $user->getSenha();
            $nome    = $user->getNome();
            $cpf     = $user->getCpf();
            $agencia = "0001";

            //VERIFICAÇÃO SE JÁ EXISTE USUÁRIO COM ESSE CPF

            $sql = "SELECT id FROM Users WHERE cpf = :cpf || login = :login ORDER BY id DESC LIMIT 1"; /*:id (Para não passar diretamente a variável e evitar sql injection)*/ 
            $sql = $conn->prepare($sql);/*Preparando a requisição*/
            $sql->bindValue(':cpf',$cpf, PDO::PARAM_STR);/*Passando o valor verdadeiro do campo*/
            $sql->bindValue(':login',$login, PDO::PARAM_STR);
            $sql->execute();/*Executando a conexão com a base*/

            $result = $sql->fetchObject();


            // INSERT NA TABELA USUÁRIOS COM OS DADOS OBTIDOS

            if (empty($result)) {
                
                $sql = "INSERT INTO Users (login,senha,nome,cpf,data_cadastro,agencia,conta) VALUES (:login,:senha,:nome,:cpf,Now(),:agencia,:conta)";
                $sql = $conn->prepare($sql);

                $sql->bindValue(':login',$login, PDO::PARAM_INT);
                $sql->bindValue(':senha',$senha, PDO::PARAM_INT);
                $sql->bindValue(':nome',$nome, PDO::PARAM_INT);
                $sql->bindValue(':cpf',$cpf, PDO::PARAM_INT);
                $sql->bindValue(':agencia',$agencia, PDO::PARAM_INT);
                $sql->bindValue(':conta',$conta, PDO::PARAM_INT);

                $sql->execute();

                //CONSULTA PARA VER SE OS DADOS FORAM INSERIDOS REALMENTE

                $sql = "SELECT id FROM Users WHERE cpf = :cpf || login = :login ORDER BY id DESC LIMIT 1";
                $sql = $conn->prepare($sql);
                $sql->bindValue(':cpf',$cpf, PDO::PARAM_STR);
                $sql->bindValue(':login',$login, PDO::PARAM_STR);
                $sql->execute();

                $result = $sql->fetchObject();

                if ($result==1){

                    //RETURN
                    $resp = "ok";
                    return $resp;

                }


            }

            //RETURN CASO JÁ EXISTA USUÁRIO COM O CPF DIGITADO

            else{

                $resp = "error";
                return $resp;
            }
            
        }






    }