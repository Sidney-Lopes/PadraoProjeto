<?php require_once("assets/config.php"); ?>
<?php require_once("assets/autoload.php"); ?>

<?php require_once("assets/header.php"); ?>
<?php require_once("assets/menu.php"); ?>
<div class="container">

    <div class="starter-template">
        <?php
            use SJL\GeraForm\InputType\Text;
            use SJL\GeraForm\InputType\Password;
            use SJL\GeraForm\InputType\Radio;
            use SJL\GeraForm\InputType\Checkbox;
            use SJL\GeraForm\InputType\Select;
            use SJL\GeraForm\InputType\Submit;
            use SJL\GeraForm\Form;

            // outros tipos serão adicionados conforme a necessidade
            $nome = new Text("nome","Nome","","");
            $senha = new Password("senha","Senha","","");
            $radio1 = new Radio("sexo","Homem", "homem", "checked");
            $radio2 = new Radio("sexo","Mulher", "mulher", "");
            $checkbox1 = new Checkbox("carro","Tenho carro", "carro", "");
            $checkbox2 = new Checkbox("moto","Tenho moto", "moto", "");
            $checkbox3 = new Checkbox("bicicleta","Tenho bicicleta", "bicleta", "");
            $select = new Select("SO","Escolha seu SO",array("1"=>"windows","2"=>"linux","3"=>"unix"),"");
            $submit = new Submit("enviar", "", "Enviar","");

            $formulario1 = new Form("meuform1", "post", "cadastro1.php", "id='form1'");
            $formulario2 = new Form("meuform2", "post", "cadastro2.php", "id='form2'");
            $formulario3 = new Form("meuform3", "post", "cadastro3.php", "id='form3'");
            $formulario4 = new Form("meuform4", "post", "cadastro4.php", "id='form4'");

            $formulario1->addInput($nome);
            $formulario1->addInput($senha);
            $formulario1->addInput($submit);

            $formulario2->addInput($radio1);
            $formulario2->addInput($radio2);
            $formulario2->addInput($submit);

            $formulario3->addInput($checkbox1);
            $formulario3->addInput($checkbox2);
            $formulario3->addInput($checkbox3);
            $formulario3->addInput($submit);

            $formulario4->addInput($select);
            $formulario4->addInput($submit);

            echo $formulario1->render();
            echo $formulario2->render();
            echo $formulario3->render();
            echo $formulario4->render();
        ?>
    </div>

</div><!-- /.container -->

<?php require_once("assets/footer.php"); ?>