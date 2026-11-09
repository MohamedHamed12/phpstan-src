<?php

namespace Bug9214;

use Generator;

function getGenerator(): Generator
{
	yield 1;
}

$generator = getGenerator();

static fn (): Generator => $generator;
