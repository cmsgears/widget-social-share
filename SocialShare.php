<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace cmsgears\widgets\social\share;

// Yii Imports
use yii\helpers\Html;

class SocialShare extends \cmsgears\core\common\base\Widget {

	// Variables ---------------------------------------------------

	// Globals -------------------------------

	// Constants --------------

	const ICON_SET_FA	= 'fab fa-';

	const ICON_SET_CMTI	= 'cmti cmti-social-';

	// Public -----------------

	// Protected --------------

	// Variables -----------------------------

	// Public -----------------

	public $wrap = true;

	public $options	= [ 'class' => 'widget widget-social-share' ];

	/**
	 * Url to be shared.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Base icon used for social icons.
	 *
	 * @var string
	 */
	public $iconSet	= self::ICON_SET_CMTI;

	/**
	 * Shareable platforms.
	 *
	 * @var string
	 */
    public $links = [ 'facebook', 'twitter', 'linkedin', 'pinterest', 'tumblr', 'mix', 'reddit' ];

	// Protected --------------

	// Private ----------------

	// Traits ------------------------------------------------------

	// Constructor and Initialisation ------------------------------

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	// cmsgears\core\common\base\Widget

	public function renderWidget( $config = [] ) {

		$this->links = array_flip( $this->links );

		$widgetHtml = $this->render( $this->template, [ 'widget' => $this ] );

		if( $this->wrap ) {

			return Html::tag( 'div', $widgetHtml, $this->options );
		}

		return $widgetHtml;
	}

	// SocialShare ---------------------------

}
