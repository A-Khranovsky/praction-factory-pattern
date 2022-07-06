<?php 

namespace Factory\Models;

class Pages extends Collection
{
	public $pages;

	public function __construct($pages = null)
	{
		if(is_null($pages))
		{
			$pages = [
				new Page(
					'First article', 
					'Content of the first article'
				),

				new Page(
					'Second article',
					'Content of the second article'
				)
			];
		}
		parent::__consturct($pages);
	}

	public function render()
	{
		return implode('', parent::render());
	}
}