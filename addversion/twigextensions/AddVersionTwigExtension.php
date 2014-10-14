<?php

namespace Craft;

class AddVersionTwigExtension extends \Twig_Extension
{
	protected $env;

	public function getName()
	{
		return 'Add Version';
	}

	public function getFilters()
	{
		return array('addVersion' => new \Twig_Filter_Method($this, 'addVersion'));
	}

	public function initRuntime(\Twig_Environment $env)
	{
		$this->env = $env;
	}

	public function addVersion($path,$var="v")
	{
		$fullpath = ( strpos($path, "/") === 0 ) ? $_SERVER['DOCUMENT_ROOT'].$path : $path;
		return (file_exists($fullpath)) ? $path."?".$var."=".date("U", filemtime($fullpath)) : $path;
	}
	
}