<?php 

   function validaUser(){

      if (isset($_POST['enviar'])) {
         
         $login = $_POST['login'];
         $senha = $_POST['senha'];
         $nome  = $_POST['nome'];
         $cpf   = $_POST['cpf'];

         $user   = new User($login,$senha,$nome,$cpf);

         $resp = $user->setUser($user);

         if ($resp=="ok") {
            return "Usuário criado com sucesso!<br>";
         }
         else{
            return "Falha ao criar usuário, favor entrar em contato com o suporte!";
         }

      
      }
   }  

   $mnsg = validaUser();

   echo $mnsg;