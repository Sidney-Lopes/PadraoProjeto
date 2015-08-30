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
            label::setLabel($nome, "Nome");

            $senha = new Input("password",["name"=>"senha", "value"=>""]);
            label::setLabel($senha, "Senha");

            $radio1 = new Input("radio",["name"=>"sexo", "value"=>"homem", "checked"=>"checked"]);
            $radio2 = new Input("radio",["name"=>"sexo", "value"=>"mulher"]);
            label::setLabel($radio1, "Homem");
            label::setLabel($radio2, "Mulher");

            $checkbox1 = new Input("checkbox",["name"=>"carro", "value"=>"carro"]);
            $checkbox2 = new Input("checkbox",["name"=>"moto", "value"=>"moto"]);
            $checkbox3 = new Input("checkbox",["name"=>"bicicleta", "value"=>"bicicleta"]);
            label::setLabel($checkbox1, "Tenho carro");
            label::setLabel($checkbox2, "Tenho moto");
            label::setLabel($checkbox3, "Tenho bicicleta");

            $textarea = new Textarea("textarea",["rows"=>"4", "cols"=>"50", "name"=>"meutextarea"]);
            label::setLabel($textarea, "Mensagem");
            $textarea->setContent("Algum conteudo");

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
            $formulario2->addElement(clone($submit));

            $formulario3->addElement($checkbox1);
            $formulario3->addElement($checkbox2);
            $formulario3->addElement($checkbox3);
            $formulario3->addElement(clone($submit));

            $formulario4->addElement($textarea);
            $formulario4->addElement(clone($submit));

            echo $formulario1->render();
            echo $formulario2->render();
            echo $formulario3->render();
            echo $formulario4->render();
        ?>
    </div>

</div><!-- /.container -->

<?php require_once("assets/footer.php"); ?>
