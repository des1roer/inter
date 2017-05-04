<?php

namespace app\components;

/* * *************************************************************
 *  Copyright notice
 *
 *  2016 Anton Danilov <anton@i-tribe.de>, interactive tribe GmbH
 *
 *  All rights reserved
 *
 * ************************************************************* */

use yii\base\Component;

/**
 * Class NagiosDataRepository
 * @package app\components
 */
class NagiosDataRepository extends Component {

    /**
     * Sites log data directory path
     *
     * @var string
     */
    public $filesPath;

    /**
     * Signature file path
     *
     * @var string
     */
    public $signature;

    /**
     * @return array
     * TODO: Implement getData() method.
     */
    public function getData() {
        $result = [
            ['title' => 3213, 'v_php' => 12],
            ['title' => 322213, 'v_php' => 2323]
        ];

        return $result;
    }

}
