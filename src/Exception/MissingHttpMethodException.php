<?php

declare(strict_types=1);

/**
 * @author Pavel Janda <me@paveljanda.com>
 * @copyright Copyright (c) 2020, Pavel Janda
 */

namespace Doctor\Http\MissingHttpMethodException;

final class MissingHttpMethodException extends \Exception
{

	public function __construct()
	{
		parent::__construct('No HTTP Method found');
	}
}
