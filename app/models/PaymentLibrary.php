<?php

class PaymentLibrary extends Eloquent
{
	protected $table = 'payment_libraries';

	public function gateways()
	{
		return $this->hasMany('Gateway');
	}
}