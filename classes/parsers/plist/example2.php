<?php

include("PlistParser.inc");

$parser = new plistParser();
$plist = $parser->parse(dirname(__FILE__) . "/Info.plist");
var_dump($plist);