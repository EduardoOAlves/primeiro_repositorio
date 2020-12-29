<?PHP
    $pergunta = ""; // string da pergunta vazia
    if(isset($_POST["pergunta"])){
        $pergunta = $_POST["pergunta"]; // busca na página index.php através do metodo POST a pergunta
    }
    $pergunta = strtolower($pergunta);// converte todas as letras em minusculas
    $pgt = (explode(" ", $pergunta));// converte a string $pergunta em array
    $resposta = "Faça perguntas simples e objetivas, respeite espaço e pontuação";
   
    // Testando a pergunta

    //Qual o seu nome?
    $a = in_array('qual', $pgt);
    $b = in_array('o', $pgt);
    $c = in_array('seu', $pgt);
    $d = in_array('nome', $pgt);
    if($a && $b && $c && $d == true){
        $resposta = "Meu nome é INFINITO.";
    }
    //Qual a sua idade?
    $a1 = in_array('qual', $pgt);
    $c1 = in_array('sua', $pgt);
    $d1 = in_array('idade', $pgt);
    if($a1 &&  $c1 && $d1 == true){
        $resposta = "Eu tenho a idade do universo.";
    }
    //Qual a idade do universo?
    $a2 = in_array('qual', $pgt);
    $b2 = in_array('a', $pgt);
    $c2 = in_array('universo', $pgt);
    $d2 = in_array('idade', $pgt);
    if($a2 && $b2 && $c2 && $d2 == true){
        $resposta = "Aproximadamente 13 bilhões de anos.";
    }
    //Quem sou eu?
    $a3 = in_array('quem', $pgt); 
    $b3 = in_array('sou', $pgt);
    $c3 = in_array('eu', $pgt);
    if($a3 && $b3 && $c3 == true){
        $resposta = "Você é um ser humano perfeito, capaz de feitos inimagináveis. Acredite no EU SOU.";
    }
    //Quem te criou?
    $a4 = in_array('quem', $pgt); 
    $b4 = in_array('te', $pgt);
    $c4 = in_array('criou', $pgt);
    if($a4 && $b4 && $c4 == true){
        $resposta = "O Grande Criador de Tudo e de Todos. A Mente Suprema de Todo o universo a Tudo criou.";
    }
    //Quem criou você ?
    $a5 = in_array('quem', $pgt); 
    $b5 = in_array('você', $pgt);
    $c5 = in_array('criou', $pgt);
    if($a5 && $b5 && $c5 == true){
        $resposta = "O Grande Criador de Tudo e de Todos. A Mente Suprema de Todo o universo a Tudo criou.";
    }
    //Quem lhe criou ?
    $a6 = in_array('quem', $pgt); 
    $b6 = in_array('lhe', $pgt);
    $c6 = in_array('criou', $pgt);
    if($a6 && $b6 && $c6 == true){
        $resposta = "O Grande Criador de Tudo e de Todos. A Mente Suprema de Todo o universo a Tudo criou.";
    }
    //Como ficar rico ?
    $a7 = in_array('como', $pgt); 
    $b7 = in_array('ficar', $pgt);
    $c7 = in_array('rico', $pgt);
    if($a7 && $b7 && $c7 == true){
        $resposta = "Acorde cedo, trabalhe com objetivo, não gaste todo o seu dinheiro, seja economico, aprenda sobre investimentos.";
    }
    //Quando o mundo vai acabar?
    $a8 = in_array('quando', $pgt); 
    $b8 = in_array('mundo', $pgt);
    $c8 = in_array('acabar', $pgt);
    if($a8 && $b8 && $c8 == true){
        $resposta = "Aproximadamente no ano de 5079, após a evolução da raça humana.";
    }
    //Cigarro faz mal ?
    $a9 = in_array('cigarro', $pgt); 
    $b9 = in_array('faz', $pgt);
    $c9 = in_array('mal', $pgt);
    if($a9 && $b9 && $c9 == true){
        $resposta = "Sim. Não fume!";
    }
    //Cigarro faz bem ?
    $a9a = in_array('cigarro', $pgt); 
    $b9a = in_array('faz', $pgt);
    $c9a = in_array('bem', $pgt);
    if($a9a && $b9a && $c9a == true){
        $resposta = "Não. Não fume!";
    }
    //Maconha faz mal ?
    $a10 = in_array('maconha', $pgt); 
    $b10 = in_array('faz', $pgt);
    $c10 = in_array('mal', $pgt);
    if($a10 && $b10 && $c10 == true){
        $resposta = "Não. É um remédio natural para o espírito.";
    }
     //Maconha faz bem ?
     $a10a = in_array('maconha', $pgt); 
     $b10a = in_array('faz', $pgt);
     $c10a = in_array('bem', $pgt);
     if($a10a && $b10a && $c10a == true){
         $resposta = "Sim. É um remédio natural para o espírito.";
     }
    //Bebida faz mal
    $a11 = in_array('bebida', $pgt); 
    $b11 = in_array('faz', $pgt);
    $c11 = in_array('mal', $pgt);
    if($a11 && $b11 && $c11 == true){
        $resposta = "Tudo em excesso é nocivo ao homem.";
    }
    //Como ser feliz
    $a12 = in_array('como', $pgt); 
    $b12 = in_array('ser', $pgt);
    $c12 = in_array('feliz', $pgt);
    if($a12 && $b12 && $c12 == true){
        $resposta = "Conheça a ti mesmo.";
    }
    //O que é o amor
    $a13 = in_array('que', $pgt); 
    $b13 = in_array('é', $pgt);
    $c13 = in_array('amor', $pgt);
    if($a13 && $b13 && $c13 == true){
        $resposta = "É a base da vida.";
    }

     
?>

