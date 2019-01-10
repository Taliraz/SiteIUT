<?php

$parser = new JBBCode\Parser();
$parser->addCodeDefinitionSet(new JBBCode\DefaultCodeDefinitionSet());
$parser->addBBCode("quote", '<blockquote>{param}</blockquote>');
$parser->addBBCode("center", '<div align="center">{param}</div>');
$parser->addBBCode("right", '<div align="right">{param}</div>');
$parser->addBBCode("left", '<div align="left">{param}</div>');
$parser->addBBCode('video', '<iframe src="https://www.youtube.com/embed/{param}" width="640" height="480" style="border:none; max-width:100%" allowfullscreen></iframe>');
$parser->addBBCode("code", '<pre class="code">{param}</pre>', false, false, 1);
$parser->addBBCode("list", '<ul>{param}</ul>');
$parser->addBBCode("*", '<li>{param}</li>');
$parser->addBBCode("font", "<span style='font-family: {option};'>{param}</span>", true);

?>