<?php

      // Comando While(ENQUANTO)
      
       
      // a) 	Crie um programa que solicite ao usuário para inserir um número inteiro positivo e, em seguida, exiba todos os números pares entre 0 e o número inserido.
      
      echo "Insira um número inteiro positivo: " . PHP_EOL;
      $numero = intval(trim(fgets(STDIN)));
      $i = 0;
      
      while ($i <= $numero) {
          if ($i % 2 == 0) {
              echo $i . PHP_EOL;
          }
          $i++;
      }
      
      
      
      
      
      // b)	Desenvolva um programa que solicite ao usuário para inserir um número inteiro e, em seguida, exiba a tabuada desse número até o número 10.
      
      echo "Insira um número inteiro: " . PHP_EOL;
      $numero = intval(trim(fgets(STDIN)));
      $i = 1;
      
      while ($i <= 10) {
          echo "$numero x $i = " . ($numero * $i) . PHP_EOL;
          $i++;
      }
      
      
      
      
      // c) 	Crie um programa que solicite ao usuário para inserir uma sequência de números inteiros e, em seguida, exiba a soma desses números.
      
      echo "Insira uma sequência de números inteiros (digite 'done' para finalizar): " . PHP_EOL;
      $soma = 0;
      
      while (true) {
          $input = trim(fgets(STDIN));
          if ($input == "done") {
              break;
          }
          $soma += intval($input);
      }
      
      echo "A soma dos números é: $soma" . PHP_EOL;
      
      
      
      
      // d)	Desenvolva um programa que solicite ao usuário para inserir uma senha e, em seguida, permita que o usuário tente inserir a senha até três vezes. 
      Caso o usuário acerte a senha, exiba uma mensagem de sucesso. Caso contrário, exiba uma mensagem informando que a senha está incorreta.
      
      $senhaCorreta = "1234";
      $tentativas = 0;
      
      while ($tentativas < 3) {
          echo "Insira a senha: " . PHP_EOL;
          $senha = trim(fgets(STDIN));
          if ($senha == $senhaCorreta) {
              echo "Senha correta! Acesso permitido." . PHP_EOL;
              break;
          } else {
              echo "Senha incorreta. Tente novamente." . PHP_EOL;
          }
          $tentativas++;
      }
      
      if ($tentativas == 3) {
          echo "Número máximo de tentativas excedido." . PHP_EOL;
      }
      
      
      
       
      // e) 	Crie um programa que solicite ao usuário para inserir números inteiros até que um número negativo seja inserido. 
      Em seguida, exiba a soma dos números inseridos (excluindo o número negativo).
      
      $soma = 0;
      
      while (true) {
          echo "Insira um número inteiro: " . PHP_EOL;
          $numero = intval(trim(fgets(STDIN)));
          if ($numero < 0) {
              break;
          }
          $soma += $numero;
      }
      
      echo "A soma dos números é: $soma" . PHP_EOL;
        
      
      
      
      
      Do While(Faça Enquanto)


       
      
      
      // a)	Crie um programa que solicite ao usuário para inserir um número inteiro positivo e, em seguida, exiba todos os números pares entre 0 e o número inserido.
      
      echo "Insira um número inteiro positivo: " . PHP_EOL;
      $numero = intval(trim(fgets(STDIN)));
      $i = 0;
      
      do {
          if ($i % 2 == 0) {
              echo $i . PHP_EOL;
          }
          $i++;
      } while ($i <= $numero);
      
      
      
      
      
      // b)	Desenvolva um programa que solicite ao usuário para inserir um número inteiro e, em seguida, exiba a tabuada desse número até o número 10.
      
      echo "Insira um número inteiro: " . PHP_EOL;
      $numero = intval(trim(fgets(STDIN)));
      $i = 1;
      
      do {
          echo "$numero x $i = " . ($numero * $i) . PHP_EOL;
          $i++;
      } while ($i <= 10);
      
      
      
      // c)	Crie um programa que solicite ao usuário para inserir uma sequência de números inteiros e, em seguida, exiba a soma desses números.
      
      echo "Insira uma sequência de números inteiros (digite 'done' para finalizar): " . PHP_EOL;
      $soma = 0;
      
      do {
          $input = trim(fgets(STDIN));
          if ($input != "done") {
              $soma += intval($input);
          }
      } while ($input != "done");
      
      echo "A soma dos números é: $soma" . PHP_EOL;
      
      
      
      
      
      // d)	Desenvolva um programa que solicite ao usuário para inserir uma senha e, em seguida, permita que o usuário tente inserir a senha até três vezes. 
      Caso o usuário acerte a senha, exiba uma mensagem de sucesso. Caso contrário, exiba uma mensagem informando que a senha está incorreta.
      
      $senhaCorreta = "1234";
      $tentativas = 0;
      
      do {
          echo "Insira a senha: " . PHP_EOL;
          $senha = trim(fgets(STDIN));
          if ($senha == $senhaCorreta) {
              echo "Senha correta! Acesso permitido." . PHP_EOL;
              break;
          } else {
              echo "Senha incorreta. Tente novamente." . PHP_EOL;
          }
          $tentativas++;
      } while ($tentativas < 3);
      
      if ($tentativas == 3) {
          echo "Número máximo de tentativas excedido." . PHP_EOL;
      }
      
      
      
      
      
      // e)	Crie um programa que solicite ao usuário para inserir números inteiros até que um número negativo seja inserido. Em seguida, exiba a soma dos números inseridos (excluindo o número negativo).
      
      $soma = 0;
      
      do {
          echo "Insira um número inteiro: " . PHP_EOL;
          $numero = intval(trim(fgets(STDIN)));
          if ($numero >= 0) {
              $soma += $numero;
          }
      } while ($numero >= 0);
      
      echo "A soma dos números é: $soma" . PHP_EOL;
      
      
      
      
      
      // f)	Escreva um programa que gere números aleatórios entre 1 e 100 até que o número 50 seja gerado. O programa deve contar quantos números foram gerados até que o 50 aparecesse.
      
      $count = 0;
      
      do {
          $numero = rand(1, 100);
          $count++;
      } while ($numero != 50);
      
      echo "Foram gerados $count números até aparecer o número 50." . PHP_EOL;
      
      
      
      
      
     // g)	Escreva um programa que leia uma senha do usuário e continue solicitando até que a senha correta seja digitada. A senha correta é "1234".
      
      $senhaCorreta = "1234";
      
      do {
          echo "Insira a senha: ";
          $senha = trim(fgets(STDIN));
      } while ($senha != $senhaCorreta);
      
      echo "Senha correta! Acesso permitido.";
      
      
      
      // h)	Escreva um programa que leia uma série de números fornecidos pelo usuário e exiba a média. O programa deve parar de ler quando o usuário digitar um número negativo.
      
      $soma = 0;
      $count = 0;
      
      do {
          echo "Insira um número inteiro: ";
          $numero = intval(trim(fgets(STDIN)));
          if ($numero >= 0) {
              $soma += $numero;
              $count++;
          }
      } while ($numero >= 0);
      
      if ($count > 0) {
          $media = $soma / $count;
          echo "A média dos números é: $media";
      } else {
          echo "Nenhum número positivo foi inserido.";
      }
?>
