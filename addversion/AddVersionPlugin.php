<?php

namespace Craft;

class AddVersionPlugin extends BasePlugin
{
	public function getName()
	{
		return Craft::t('Add Version');
	}

	public function getVersion()
	{
		return '1.0';
	}

	public function getDeveloper()
	{
		return 'Roi Kingon';
	}

	public function getDeveloperUrl()
	{
		return 'http://www.roikingon.com';
	}

	public function addTwigExtension()
	{
		Craft::import('plugins.addversion.twigextensions.AddVersionTwigExtension');
		return new AddVersionTwigExtension();
	}
}
