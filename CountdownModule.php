<?php
use yupe\components\WebModule;
class CountdownModule extends WebModule
{
	const VERSION = '0.2';

	public $widgets = [
		'CountdownWidget'=>'CountdownWidget',
	];

	public function getVersion()
	{
		return self::VERSION;
	}

	// public function getCategory()
	// {
	// 	return Yii::t('CountdownModule.countdown', 'Users');
	// }

	public function getName()
	{
		return Yii::t('CountdownModule.countdown', 'Countdown');
	}

	public function getDescription()
	{
		return Yii::t('CountdownModule.countdown', 'Countdown');
	}

	public function getAuthor()
	{
		return Yii::t('CountdownModule.countdown', 'UnnamedTeam');
	}

	public function getAuthorEmail()
	{
		return Yii::t('CountdownModule.countdown', 'max100491@mail.ru');
	}

	public function getAdminPageLink()
	{
		return '/countdown/countdownBackend/index';
	}

	public function getIcon()
	{
		return "fa fa-clock-o";
	}

	public function getWidgets()
	{
		return $this->widgets;
	}

	public function init()
	{
		$this->setImport(array(
			'countdown.models.*',
			'countdown.components.*',
		));
		parent::init();
	}
}
