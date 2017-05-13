<?php

	/*
		HTML Tag - 2017-03-16

		<Name Attributes>Content</Name>

	*/

	class Tag {

		//---------------------------------------------
		// static

		private static $level = 0;
		private static $indented = false;

		public static function setIndented($value) {
			self::$indented = $value? true : false;
		}

		//---------------------------------------------
		// attributes

		private $tag; // Tag name
		private $attrs; // Associative array of tag attributes
		private $content; // Indexed array of Strings and Tags

		//---------------------------------------------
		// constructor

		public function __construct($tag) {
			$this->name = $tag;
			$this->attrs = array();
			$this->content = array();
		}

		//---------------------------------------------
		// to string

		public function toString() {
			if (self::$indented) return $this->toStringIndented();
			else return $this->toStringMinified();
		}

		private function toStringMinified() {
			$tag = $this->name;
			$attrs = $this->attrsToString();
			$content = $this->contentToString();
			if (empty($this->content)) return "<$tag$attrs>";
			else return "<$tag$attrs>$content</$tag>";
		}

		private function toStringIndented() {
			$spaces = "\n".str_repeat(' ', self::$level*2);
			$tag = $this->name;
			$attrs = $this->attrsToString();
			self::$level++; {
				$content = $this->contentToString();
			} self::$level--;
			switch (count($this->content)) {
				case 0: return "$spaces<$tag$attrs>";
				case 1:	if ($this->content[0] instanceof Tag)
					return "$spaces<$tag$attrs>$content$spaces</$tag>";
					else return "$spaces<$tag$attrs>$content</$tag>";
				default: return "$spaces<$tag$attrs>$content$spaces</$tag>";
			}
		}

		private function attrsToString() {
			$result = "";
			foreach($this->attrs as $tag=>$value) {
				$result .= " $tag=\"$value\"";
			}
			return $result;
		}

		private function contentToString() {
			$result = "";
			foreach($this->content as $content) {
				if ($content instanceof Tag)
					$result .= $content->toString();
				else
					$result .= htmlentities($content);
			}
			return $result;
		}

		//---------------------------------------------
		// contents

		public function add($value) {
			$this->content[] = $value;
			return $this;
		}
		public function addTag($tag, $value="") {
			$this->add($tag = new Tag($tag));
			if (!empty($value)) $tag->setContent($value);
			return $this;
		}
		public function getContent() {
			return $this->contentToString();
		}
		public function setContent($value) {
			$this->content = array($value);
		}
		public function setAttr($tag, $value) {
			$this->attrs[$tag] = $value;
			return $this;
		}

	}

//===============================================

class TagHTML extends Tag {
	private $head;
	private $body;
	public function __construct($title="") {
		parent::__construct('html');
		$this->add($this->head = new TagHead($title));
		$this->add($this->body = new Tag('body'));
	}
	public function getHead() { return $this->head; }
	public function getBody() { return $this->body; }
	public function toString() {
		return "<!DOCTYPE html>".parent::toString();
	}
}

class TagHead extends Tag {
	private $title;
	public function __construct($title="") {
		parent::__construct('head');
		$this->add(new TagAttr('meta', 'charset', "utf-8"));
		$this->add($this->title = new TagText('title', $title));
	}
	public function getTitle() {
		return $this->title->getContent();
	}
	public function setTitle($title) {
		$this->title->setContent($title);
		return $this;
	}
	public function addCss($href) {
		$this->add(new TagCss($href));
		return $this;
	}
	public function addJS($src, $script="") {
		$this->add(new TagJS($src, $script));
		return $this;
	}
}

//===============================================

class TagContainer extends Tag {
	private $title;
	public function __construct($tag, $id="", $class="") {
		parent::__construct($tag);
		if (!empty($id)) $this->setAttr('id', $id);
		if (!empty($class)) $this->setAttr('class', $class);
	}
	public function addH1($text) { $this->addTag('h1', $text); return $this; }
	public function addH2($text) { $this->addTag('h2', $text); return $this; }
	public function addH3($text) { $this->addTag('h3', $text); return $this; }
	public function addP($text) { $this->addTag('p', $text); return $this; }
	public function addHr($text) { $this->addTag('hr'); return $this; }
}

class TagDiv extends TagContainer {
	public function __construct($id="", $class="") {
		parent::__construct('div', $id, $class);
	}
}

//===============================================

class TagAttr extends Tag  {
	public function __construct($tag, $name, $value) {
		parent::__construct($tag);
		$this->setAttr($name, $value);
	}
}
class TagText extends Tag  {
	public function __construct($tag, $text) {
		parent::__construct($tag);
		$this->setContent($text);
	}
}

//===============================================

class TagCss extends Tag  {
	public function __construct($href) {
		parent::__construct('link');
		$this->setAttr('href', $href);
		$this->setAttr('rel', "stylesheet");
	}
}
class TagJS extends Tag  {
	public function __construct($src, $script="") {
		parent::__construct('script');
		$this->setAttr('src', $src);
		$this->setAttr('type', "text/javascript");
		$this->setContent($script);
	}
}
class TagA extends Tag  {
	public function __construct($text, $link) {
		parent::__construct('a');
		$this->setContent($text);
		$this->setAttr('href', $link);
	}
}
class TagImg extends Tag  {
	public function __construct($src, $alt="") {
		parent::__construct('img');
		$this->setAttr('src', $src);
		$this->setAttr('alt', $alt);
	}
}
class TagNav extends Tag  {
	private $ul;
	public function __construct($id="", $title="") {
		parent::__construct('nav');
		$this->setAttr('id', $id);
		if (!empty($title)) $this->add(new TagText('h2', $title));
		$this->add($this->ul = new Tag('ul'));
	}
	public function addA($text, $link) {
		$this->ul->addTag('li', new TagA($text, $link));
		return $this;
	}
}
class TagTable extends Tag {
	private $thead;
	private $tbody;
	private $tr;
	public function __construct($id="", $class="") {
		parent::__construct('table');
		if (!empty($id)) $this->setAttr('id', $id);
		if (!empty($class)) $this->setAttr('class', $class);
		$this->add($this->thead = new Tag('thead'));
		$this->add($this->tbody = new Tag('tbody'));
	}
	public function addHeader(...$titles) {
		$this->thead->add($tr = new Tag('tr'));
		$this->addRecursive($tr, 'th', $titles);
		return $this;
	}
	public function addRow(...$values) {
		$this->tbody->add($tr = new Tag('tr'));
		$this->addRecursive($tr, 'td', $values);
		return $this;
	}
	private function addRecursive($tr, $tag, $items) {
		foreach($items as $item) {
			if (is_array($item)) $this->addRecursive($tr, $tag, $item);
			else $tr->addTag($tag, $item);
		}
	}
	public function addTr() {
		$this->tbody->add($this->tr = new Tag('tr'));
		return $this;
	}
	public function addTh($value, $colspan=1, $rowspan=1) {
		$this->addCell('th', $value, $colspan, $rowspan);
		return $this;
	}
	public function addTd($value, $colspan=1, $rowspan=1) {
		$this->addCell('td', $value, $colspan, $rowspan);
		return $this;
	}
	private function addCell($tag, $value, $colspan, $rowspan) {
		$this->tr->add($cell = new TagText($tag, $value));
		if ($colspan > 1) $cell->setAttr('colspan', $colspan);
		if ($rowspan > 1) $cell->setAttr('rowspan', $rowspan);
	}
}

//===============================================
