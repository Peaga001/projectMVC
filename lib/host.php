<?php 

    abstract class Connection{

        private static $conn;

        public static function getConn(){

            if (!self::$conn) {

                self::$conn = new PDO('mysql: host=127.0.0.1; dbname=PDOTeste;','root','mysql');
                return self::$conn;
            }

            else{

                return self::$conn;
            }

        }

    }

    
                

 