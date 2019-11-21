<?php

namespace Extensions;


class ContentBlockStop extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_block_stop';


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
		
		$flex = \Cache::get('flex');
		
		if ($flex)
		{		
			$this->Template->flex = array_pop($flex);
		}
		
		\Cache::set('flex', $flex);
	}
}
