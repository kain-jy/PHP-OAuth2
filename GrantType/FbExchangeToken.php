<?php

namespace OAuth2\GrantType;

class FbExchangeToken implements IGrantType
{
	const GRANT_TYPE = 'fb_exchange_token';

	public function validateParameters(&$parameters)
	{
		if ( ! isset($parameters['fb_exchange_token']))
		{
			throw new InvalidArgumentException(
				'The \'fb_exchange_token\' parameter must be defined.',
				InvalidArgumentException::MISSING_PARAMETER
			);
		}
	}
}
