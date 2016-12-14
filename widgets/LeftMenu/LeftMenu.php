<?php
/**
 * Created by PhpStorm.
 * User: kostik
 * Date: 14.12.2016
 * Time: 12:13
 */

namespace app\widgets\LeftMenu;

use yii\base\Widget;


class LeftMenu extends Widget
{
    public $user;

    public function init(){
        parent::init();
    }

    public function run(){


        return $this->render('index');


    }

}
