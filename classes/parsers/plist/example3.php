<?php

include("PlistParser.inc");

$parser = new plistParser();
$data = implode('', file("iTunes.xml"));
$plist = $parser->parseString($data);

var_dump($plist);
