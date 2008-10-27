<?php

include("PlistParser.inc");

$parser = new plistParser();
$plist = $parser->parse(dirname(__FILE__) . "/iTunes.xml");
var_dump($plist);