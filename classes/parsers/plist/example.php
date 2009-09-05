<?php

include("PlistParser.inc");

$parser = new plistParser();
$plist = $parser->parseFile(dirname(__FILE__) . "/iTunes.xml");
var_dump($plist);
