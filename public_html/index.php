<?php require_once("assets/config.php"); ?>
<?php require_once("assets/autoload.php"); ?>

<?php require_once("assets/header.php"); ?>
<?php require_once("assets/menu.php"); ?>
<div class="container">

    <div class="starter-template">
        <?php
            use SJL\GeraForm\InputType\Input;
            use SJL\GeraForm\Form;
            use SJL\GeraForm\Label;
            use SJL\GeraForm\InputType\Textarea;

            // outros tipos serão adicionados conforme a necessidade

            $nome = new Input("text", ["name"=>"nome", "value"=>""]);
            $nomelabel = new Label("Nome");
            $nome->setLabel($nomelabel);

            $senha = new Input("password",["name"=>"senha", "value"=>""]);
            $senhalabel = new Label("Senha");
            $senha->setLabel($senhalabel);

            $radio1 = new Input("radio",["name"=>"sexo", "value"=>"homem", "checked"=>"checked"]);
            $radio2 = new Input("radio",["name"=>"sexo", "value"=>"mulher"]);
            $radio1label = new Label("Homem");
            $radio2label = new Label("Mulher");
            $radio1->setLabel($radio1label);
            $radio2->setLabel($radio2label);


            $checkbox1 = new Input("checkbox",["name"=>"carro", "value"=>"carro"]);
            $checkbox2 = new Input("checkbox",["name"=>"moto", "value"=>"moto"]);
            $checkbox3 = new Input("checkbox",["name"=>"bicicleta", "value"=>"bicicleta"]);
            $checkbox1label = new Label("Tenho carro");
            $checkbox2label = new Label("Tenho moto");
            $checkbox3label = new Label("Tenho bicicleta");
            $checkbox1->setLabel($checkbox1label);
            $checkbox2->setLabel($checkbox2label);
            $checkbox3->setLabel($checkbox3label);

            $textarea = new Textarea("textarea",["rows"=>"4", "cols"=>"50", "name"=>"meutextarea"]);
            $textarealabel = new Label("Mensagem");
            $textarea->setLabel($textarealabel);

            $submit = new Input("submit", ["name"=>"enviar", "value"=>"Enviar"]);

            $formulario1 = new Form("meuform1", "post", "cadastro1.php", "id='form1'");
            $formulario2 = new Form("meuform2", "post", "cadastro2.php", "id='form2'");
            $formulario3 = new Form("meuform3", "post", "cadastro3.php", "id='form3'");
            $formulario4 = new Form("meuform4", "post", "cadastro4.php", "id='form4'");

            $formulario1->addElement($nome);
            $formulario1->addElement($senha);
            $formulario1->addElement($submit);

            $formulario2->addElement($radio1);
            $formulario2->addElement($radio2);
            $formulario2->addElement($submit);

            $formulario3->addElement($checkbox1);
            $formulario3->addElement($checkbox2);
            $formulario3->addElement($checkbox3);
            $formulario3->addElement($submit);

            $formulario4->addElement($textarea);
            $formulario4->addElement($submit);

            echo $formulario1->render();
            echo $formulario2->render();
            echo $formulario3->render();
            echo $formulario4->render();
        ?>
    </div>

</div><!-- /.container -->

<?php require_once("assets/footer.php"); ?>