<?php
	require_once "Tag.php";

	//----------------------------------------------

	function example1() {
		$html = new Tag('html');
		$html->add($head = new Tag('head'));
		$html->add($body = new Tag('body'));

		$head->add(new TagAttr("meta", 'charset', "utf-8"));
		$head->add(new TagText("title", "Test1"));
		$head->add(new TagCss("estilos.css"));
		$head->add(new TagJS("script.js"));

		tagP($body);
		tagUL($body);

		echo "<!DOCTYPE html>";
		echo $html->toString();
	}

	//----------------------------------------------

	function example2() {
		$html = new TagHTML("Test2");
		$head = $html->getHead();
		$body = $html->getBody();

		$head->addCSS("estilos.css")->addJS("script.js");

		$head->add($style = new Tag('style'));
		$style->add("table { border-collapse:collapse; } ");
		$style->add("th, td { border:1px solid #ccc; } ");

		tagP($body);
		tagUL($body);

		$body->add($nav = new TagNav('nav1', "Navigation"));
		$nav->addA('One', "#1")
		    ->addA('Two', "#2")
		    ->addA('Three', "#3");

		$body->add(
			(new TagNav('nav2', "Nav II"))
		    ->addA('First', "#1")
		    ->addA('Second', "#2")
		    ->addA('Third', "#3")
		);

		$body->add($table = new TagTable('table1'));
		$table->addHeader('Uno', 'Dos', 'Tres')
			->addRow('Cuatro', 'Cinco', 'Seis')
			->addRow('Siete', 'Ocho', 'Nueve')
			->addRow(array('Diez', 'Once'), new TagText('em', 'Doce'))
			->addRow('Trece', array('Catorce', 'Quince'));
		$table->addTr()->addTd('XVI', 2)->addTd('XVII');
		$table->addTr()->addTd('XVIII', 3);

		Tag::setIndented(true);
		echo $html->toString();
	}

	//----------------------------------------------

	function tagP($body) {
		$body->add(new TagText("h1", "Test Tag class"));
		$body->add($p = new Tag("p"));
		$p->add("Lorem ipsum dolor sit amet ")
		  ->add(new TagText("strong", "remarcado"))
		  ->add(" sint occaecat cupidatat non proident ")
		  ->add(new TagA("Google", "http://www.google.com/"))
		  ->add(new Tag("br"))
		  ->add("Consectetur <hola> adipisicing elit");
	}
	function tagUL($body) {
		$body->add($ul = new Tag("ul"));
		$ul->setAttr("id", "list1")
		   ->setAttr("class", "list");
		$ul->addTag("li", "Primero")
		   ->addTag("li", "Segundo")
		   ->addTag("li", "Tercero");
	}

	//----------------------------------------------

	//example1();
	example2();

 ?>
