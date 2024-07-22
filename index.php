<?php

      echo " Comando While(ENQUANTO)" . PHP_EOL;

      echo PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;
      echo "__________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo "a) Crie um programa que solicite ao usuário para inserir um número inteiro positivo e, 
      em seguida, exiba todos os números pares entre 0 e o número inserido." .  PHP_EOL;
      echo "___________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;
       
      
      echo "Insira um número inteiro positivo: " . PHP_EOL;

      $numero = intval(trim(fgets(STDIN)));
      $i = 0;
      
      while ($i <= $numero) {
          if ($i % 2 == 0) {
      
                echo "Os números pares entre $i e $numero é: " . $i . PHP_EOL;
          }
          $i++;
      }



      echo PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;
      echo "___________________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo " b) Desenvolva um programa que solicite ao usuário para inserir um número inteiro e, em seguida, 
      exiba a tabuada desse número até o número 10".  PHP_EOL;
      echo "___________________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;
      
      
      
      echo "Insira um número inteiro: " . PHP_EOL;

      $numero = intval(trim(fgets(STDIN)));
      $i = 1;
      
      while ($i <= 10) {
            
          echo "A tabuada do número $numero até o numero 10 é: " . ($numero * $i) . PHP_EOL;
            
          $i++;
      }


      echo PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;
      echo "_______________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo "c) Crie um programa que solicite ao usuário para inserir uma sequência de números inteiros e, 
      em seguida, exiba a soma desses números.".  PHP_EOL;
      echo "_______________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;
      
      
      echo "Insira uma sequência de números inteiros (digite 'done' para finalizar): " . PHP_EOL;

      $soma = 0;
      
      while (true) {
          $input = trim(fgets(STDIN));
          if ($input == "done") {
              break;
          }
          $soma += intval($input);
      }
      
      echo "A soma dos números inseridos é: " . $soma . PHP_EOL;
      
      
      echo PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;
      echo "____________________________________________________________________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo "d) Desenvolva um programa que solicite ao usuário para inserir uma senha e, em seguida, permita que o usuário tente inserir a senha até três vezes. 
      Caso o usuário acerte a senha, exiba uma mensagem de sucesso. Caso contrário, exiba uma mensagem informando que a senha está incorreta.".  PHP_EOL;
      echo "____________________________________________________________________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;
      
      
      
      $senhaCorreta = "1234";
      $tentativas = 0;
      
      while ($tentativas < 3) {
            
          echo "Insira a senha: " . PHP_EOL;
            
          $senha = trim(fgets(STDIN));
            
          if ($senha == $senhaCorreta) {
                
            echo "Senha correta! Acesso permitido." . PHP_EOL;
            echo PHP_EOL;
            break;
                
          } else {
            echo "Senha incorreta. Tente novamente." . PHP_EOL;
            echo PHP_EOL;

          }
          $tentativas++;
      }
      
      if ($tentativas == 3) {
            
          echo "Número máximo de tentativas excedido. Tente novamente mais tarde." . PHP_EOL;
      }
      
      echo PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;
      echo "____________________________________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo "e) Crie um programa que solicite ao usuário para inserir números inteiros até que um número negativo seja inserido. 
      Em seguida, exiba a soma dos números inseridos (excluindo o número negativo).".  PHP_EOL;
      echo "____________________________________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;
       

      
      $soma = 0;
      
      while (true) {
            
      echo "Insira um número inteiro: " . PHP_EOL;
      echo PHP_EOL;

          $numero = intval(trim(fgets(STDIN)));
          if ($numero < 0) {
              break;
          }
          $soma += $numero;
      }
      
      echo "A soma dos números é: $soma" . PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;
      
      
      echo "Do While(Faça Enquanto)" . PHP_EOL;


      echo PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;
      echo "___________________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo "a) Crie um programa que solicite ao usuário para inserir um número inteiro positivo e, em seguida, 
      exiba todos os números pares entre 0 e o número inserido.".  PHP_EOL;
      echo "___________________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;
      
     
      
      echo "Insira um número inteiro positivo: " . PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;

      $numero = intval(trim(fgets(STDIN)));
      $i = 0;
      
      do {
          if ($i % 2 == 0) {
              echo "Os números pares entre $i e 10 é: " . $i . PHP_EOL;
          }
          $i++;
      } while ($i <= $numero);




      echo PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;
      echo "___________________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo "b) Desenvolva um programa que solicite ao usuário para inserir um número inteiro e, em seguida, 
      exiba a tabuada desse número até o número 10." .  PHP_EOL;
      echo "___________________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;
      
     
      
      echo "Insira um número inteiro: " . PHP_EOL;
      echo PHP_EOL;

      $numero = intval(trim(fgets(STDIN)));
      $i = 1;
      
      do {
          echo "A tabuada do número $numero até o numero 10 é: " . ($numero * $i) . PHP_EOL;
            
          $i++;
      } while ($i <= 10);
      

      echo PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;
      echo "________________________________________________________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo "c) Crie um programa que solicite ao usuário para inserir uma sequência de números inteiros e, em seguida, exiba a soma desses números.".  PHP_EOL;
      echo "________________________________________________________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;

     
      
      echo "Insira uma sequência de números inteiros (digite 'done' para finalizar): " . PHP_EOL;
      $soma = 0;
      
      do {
          $input = trim(fgets(STDIN));
          if ($input != "done") {
              $soma += intval($input);
          }
      } while ($input != "done");
      
      echo "A soma dos números é: " . $soma . PHP_EOL;
      
      
      
      
      echo PHP_EOL;
      echo "____________________________________________________________________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo "d) Desenvolva um programa que solicite ao usuário para inserir uma senha e, em seguida, permita que o usuário tente inserir a senha até três vezes. 
      Caso o usuário acerte a senha, exiba uma mensagem de sucesso. Caso contrário, exiba uma mensagem informando que a senha está incorreta.".  PHP_EOL;
      echo "____________________________________________________________________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;


      
      $senhaCorreta = "1234";
      $tentativas = 0;
      
      do {
          echo "Insira a senha: " . PHP_EOL;
            
          $senha = trim(fgets(STDIN));
            
          if ($senha == $senhaCorreta) {
                
            echo "Senha correta! Acesso permitido." . PHP_EOL;
            echo PHP_EOL;
            break;
                
          } else {
            echo "Senha incorreta. Tente novamente." . PHP_EOL;
            echo PHP_EOL;
                
          }
          $tentativas++;
            
      } while ($tentativas < 3);
      
      if ($tentativas == 3) {
            
          echo "Número máximo de tentativas excedido. Tente novamente mais tarde." . PHP_EOL;
      }
      
      
      
      
      echo PHP_EOL;
      echo "_____________________________________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo "e) Crie um programa que solicite ao usuário para inserir números inteiros até que um número negativo seja inserido. 
      Em seguida, exiba a soma dos números inseridos (excluindo o número negativo).".  PHP_EOL;
      echo "_____________________________________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;


      
      $soma = 0;
      
      do {
            echo "Insira um número inteiro: " . PHP_EOL;
            echo PHP_EOL;
            echo PHP_EOL;
            
          $numero = intval(trim(fgets(STDIN)));
            
          if ($numero >= 0) {
              $soma += $numero;
          }
      } while ($numero >= 0);
      
      echo "A soma dos números é: $soma" . PHP_EOL;
      echo PHP_EOL;




      echo PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;
      echo "___________________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo "f) Escreva um programa que gere números aleatórios entre 1 e 100 até que o número 50 seja gerado. 
      O programa deve contar quantos números foram gerados até que o 50 aparecesse.".  PHP_EOL;
      echo "___________________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;
      

      
      $count = 0;
      
      do {
          $numero = rand(1, 100);
          $count++;
      } while ($numero != 50);
      
      echo "Foram gerados $count números até aparecer o número 50." . PHP_EOL;



      echo PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;
      echo "___________________________________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo "g) Escreva um programa que leia uma senha do usuário e continue solicitando até que a senha correta seja digitada. 
      A senha correta é "1234".".  PHP_EOL;
      echo "___________________________________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;
      

      
      $senhaCorreta = "1234";
      
      do {
          echo "Insira a senha: ";
            echo PHP_EOL;
            
          $senha = trim(fgets(STDIN));
      } while ($senha != $senhaCorreta);
      
      echo "Senha correta! Acesso permitido.";
      echo PHP_EOL;
      


      echo PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;
      echo "___________________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo "h) Escreva um programa que leia uma série de números fornecidos pelo usuário e exiba a média. 
      O programa deve parar de ler quando o usuário digitar um número negativo.".  PHP_EOL;
      echo "___________________________________________________________________________________________________" .  PHP_EOL;
      echo PHP_EOL;
      echo PHP_EOL;
      
      $soma = 0;
      $count = 0;
      
      do {
          echo "Insira um número inteiro: ";
          echo PHP_EOL;
            
          $numero = intval(trim(fgets(STDIN)));
          if ($numero >= 0) {
              $soma += $numero;
              $count++;
          }
            
      } while ($numero >= 0);
      
      if ($count > 0) {
          $media = $soma / $count;
          echo "A média dos números é: $media";
          echo PHP_EOL;
      } else {
          echo "Nenhum número positivo foi inserido.";
          echo PHP_EOL;
      }
?>
