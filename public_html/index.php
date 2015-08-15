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
            $text = new Text("nome","Nome","","");
            $senha = new Password("senha","Senha","","");
            $radio1 = new Radio("sexo","Homem", "homem", "checked");
            $radio2 = new Radio("sexo","Mulher", "mulher", "");
            $checkbox1 = new Checkbox("carro","Tenho carro", "carro", "");
            $checkbox2 = new Checkbox("moto","Tenho moto", "moto", "");
            $checkbox3 = new Checkbox("bicicleta","Tenho bicicleta", "bicleta", "");
            $select = new Select("SO","Escolha seu SO",array("1"=>"windows","2"=>"linux","3"=>"unix"),"");
            $submit = new Submit("enviar", "", "Enviar","");

            $formulario = new Form("meuform", "post", "cadrasto.php", "id='form1'");
            $formulario->addInput($text);
            $formulario->addInput($senha);
            $formulario->addInput($radio1);
            $formulario->addInput($radio2);
            $formulario->addInput($checkbox1);
            $formulario->addInput($checkbox2);
            $formulario->addInput($checkbox3);
            $formulario->addInput($select);
            $formulario->addInput($submit);
            echo $formulario->render();
        ?>
    </div>

</div><!-- /.container -->

<?php require_once("assets/footer.php"); ?>