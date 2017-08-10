<?php

namespace orezomi\wmk;

/**
 * This is just an example.
 */
class Wookmark extends \yii\base\Widget
{

    public function run()
    {
    	WookmarkAssets::register( $this->getView() );
    	parent::init();
    }
}
