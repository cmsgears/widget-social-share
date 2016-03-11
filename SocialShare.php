<?php
namespace cmsgears\widgets\social\share;

// Yii Imports
use \Yii;
use yii\base\Widget;
use yii\helpers\Html;

class SocialShare extends \cmsgears\core\common\base\Widget { 

	// Variables ---------------------------------------------------

	// Public Variables --------------------

	public $url;

	// Constructor and Initialisation ------------------------------

	// yii\base\Object

    public function init() {

        parent::init();

		// Do init tasks
    }

	// Instance Methods --------------------------------------------

	// yii\base\Widget

    public function run() {

		$widgetHtml = $this->renderWidget();

		return Html::tag( 'div', $widgetHtml, $this->options );
    }

	public function renderWidget( $config = [] ) {

		$widgetHtml = $this->render( $this->template, [ 'url' => $this->url ] );

		return $widgetHtml;
	}
}

?>