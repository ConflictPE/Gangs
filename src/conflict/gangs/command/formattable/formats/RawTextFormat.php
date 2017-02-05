<?php

/**
 * Gangs – RawTextFormat.php
 *
 * Copyright (C) 2017 Jack Noordhuis
 *
 * This is private software, you cannot redistribute and/or modify it in any way
 * unless given explicit permission to do so. If you have not been given explicit
 * permission to view or modify this software you should take the appropriate actions
 * to remove this software from your device immediately.
 *
 * @author JackNoordhuis
 *
 * Created on 05/02/2017 at 5:33 PM
 *
 */

namespace conflict\gangs\command\formattable\formats;

use conflict\gangs\command\formattable\Formattable;
use conflict\gangs\command\formattable\FormattableArgument;

class RawTextFormat extends FormattableArgument {

	public function __construct(string $format, string $name = "", $optional = false) {
		parent::__construct(Formattable::FORMAT_RAW_TEXT, $name, $optional);
	}

}