<?php 

namespace Factory\Models;

class Users extends Collection
{
	public $users;

	public function __construct($users = null)
	{
		if(is_null($users))
		{
			$users = [
				new User(
					'nick@ukr.net',
					'nick',
					'Nick',
					'Nick'
				),

				new User(
					'jack@ukr.net',
					'jack',
					'Jack',
					'Jack'
				)
			];
		}
		parent::__construct($users);
	}

	public function render()
	{
		return implode('<br /', parent::render());
	}
}