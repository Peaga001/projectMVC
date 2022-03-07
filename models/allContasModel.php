<?php 

    class Periodo{ //CLASSE COM PERÍODO DIGITADO PELO USUÁRIO

        private $data_ini;
        private $data_fim;

        public function __construct($data_ini,$data_fim){ //METODO CONSTRUTOR
            $this->data_ini = $data_ini;
            $this->data_fim = $data_fim;
        }

        //GETTERS

        public function getDataIni(){
            return $this->data_ini;
        }
        public function getDataFim(){
            return $this->data_fim;
        }

        //FUNÇÃO RESPONSÁVEL PELA CONSULTA NA BASE DESSE PERÍODO - RETORNA UM ARRAY COM OS DADOS

        public function geraPeriodo(Periodo $periodo){

            $data_ini = $periodo->data_ini;
            $data_fim = $periodo->data_fim;

            $conn = Connection::getConn();
            $sql = "SELECT * FROM Users WHERE data_cadastro >= '$data_ini' and data_cadastro <= '$data_fim'ORDER BY id DESC";
            $sql = $conn->prepare($sql);
            $sql->execute();

            $array = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $array;
        }

    }

        

