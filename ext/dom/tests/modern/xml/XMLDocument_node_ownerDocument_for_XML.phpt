--TEST--
Dom\XMLDocument getting ownerDocument from a node in an XML document should yield a Dom\XMLDocument
--EXTENSIONS--
dom
--FILE--
<?php

$dom = Dom\XMLDocument::createFromString('<?xml version="1.0"?><container/>');

$element = $dom->documentElement;
unset($dom);
var_dump($element->ownerDocument);

?>
--EXPECTF--
object(Dom\XMLDocument)#1 (33) {
  ["xmlEncoding"]=>
  string(5) "UTF-8"
  ["xmlStandalone"]=>
  bool(false)
  ["xmlVersion"]=>
  string(3) "1.0"
  ["formatOutput"]=>
  bool(false)
  ["implementation"]=>
  string(22) "(object value omitted)"
  ["URL"]=>
  string(%d) "%s"
  ["documentURI"]=>
  string(%d) "%s"
  ["characterSet"]=>
  string(5) "UTF-8"
  ["charset"]=>
  string(5) "UTF-8"
  ["inputEncoding"]=>
  string(5) "UTF-8"
  ["doctype"]=>
  NULL
  ["documentElement"]=>
  string(22) "(object value omitted)"
  ["children"]=>
  string(22) "(object value omitted)"
  ["firstElementChild"]=>
  string(22) "(object value omitted)"
  ["lastElementChild"]=>
  string(22) "(object value omitted)"
  ["childElementCount"]=>
  int(1)
  ["body"]=>
  NULL
  ["head"]=>
  NULL
  ["title"]=>
  string(0) ""
  ["nodeType"]=>
  int(9)
  ["nodeName"]=>
  string(9) "#document"
  ["baseURI"]=>
  string(%d) "%s"
  ["isConnected"]=>
  bool(true)
  ["ownerDocument"]=>
  NULL
  ["parentNode"]=>
  NULL
  ["parentElement"]=>
  NULL
  ["childNodes"]=>
  string(22) "(object value omitted)"
  ["firstChild"]=>
  string(22) "(object value omitted)"
  ["lastChild"]=>
  string(22) "(object value omitted)"
  ["previousSibling"]=>
  NULL
  ["nextSibling"]=>
  NULL
  ["nodeValue"]=>
  NULL
  ["textContent"]=>
  NULL
}
