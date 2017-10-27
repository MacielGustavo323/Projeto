<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        
        require 'Usuario.php';
        
        $v1 = new Vendedor();
	$v1->setNome("Artur");
	$v1->setEmail("Artur_nunes_@hotmail.com");
	$v1->setEndereco("Rua H");
	$v1->setSetor("Vendas");
	$v1->setSalario("3,500");
	$v1->setData_adm("04/08/2014");
	$v1->setCom("4%");
	
        var_dump($v1);
        
        echo "<hr>";
    
        $g1 = new Gerente();
	$g1->setNome("Gustavo Maciel");
	$g1->setEmail("");
	$g1->setEndereco("Rua H");
	$g1->setIdfilial("3");
	$g1->setTvendas("200");
        
        var_dump($g1);

        //Criar objeto usuario
        /*$usuarioUm = new Usuario("Artur", "tantofaz_@hotmail.com", "sei n");
        $usuarioDois = new Usuario("Artur", "tantofaz_@hotmail.com", "sei n");
        $usuarioUm = new Usuario();
        $usuarioUm->nome = "Artur";
        $usuarioUm->email = "artur_nunes_@hotmail.com";
        $usuarioUm->endereco = "Rua nao sei";

        $usuarioDois = new Usuario();
        $usuarioDois->nome = "Nunes";
        $usuarioDois->email = "Nunes_artur_hotmail@comtopon";
        $usuarioDois->endereco = "sei não Rua";

        var_dump($usuarioUm);

         echo "<br><b>Nome:</b> ".$usuarioUm->nome."<br>";
         echo "<b>E-mail:</b> ".$usuarioUm->email."<br>";
         echo "<b>Rua:</b> ".$usuarioUm->endereco."<br>";

         echo "<br><b>Nome:</b> ".$usuarioDois->nome."<br>";
         echo "<b>E-mail:</b> ".$usuarioDois->email."<br>";
         echo "<b>Rua:</b> ".$usuarioDois->endereco."<br>";
        */
        ?>
         </pre>
    </body>
</html>
