<?php

namespace Minigrid;


class ContentBlockStart extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_block_start';
	
	
	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		if (TL_MODE == 'BE')
		{
			$this->strTemplate = 'be_wildcard';
			$this->Template = new \BackendTemplate($this->strTemplate);
		}
		
		$flex = (array) \Cache::get('flex');
		
		array_push($flex, $this->flex != '');
		
		\Cache::set('flex', $flex);
	}
}
