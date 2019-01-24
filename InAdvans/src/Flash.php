<?php

namespace Flash;
use Yii;

/**
 * Class Flash
 */
class Flash
{
    public function toString() {
        return "Flash Component";
    }

    /**
     * @param string $message
     * @param bool   $removeAfterAccess
     */
    public static function error($message, $removeAfterAccess = true)
    {
        Yii::$app->session->addFlash('danger', $message, $removeAfterAccess);
    }

    /**
     * @param string $message
     * @param bool   $removeAfterAccess
     */
    public static function alert($message, $removeAfterAccess = true)
    {
        Yii::$app->session->addFlash('danger', $message, $removeAfterAccess);
    }

    /**
     * @param string $message
     * @param bool   $removeAfterAccess
     */
    public static function danger($message, $removeAfterAccess = true)
    {
        Yii::$app->session->addFlash('danger', $message, $removeAfterAccess);
    }

    /**
     * @param string $message
     * @param bool   $removeAfterAccess
     */
    public static function warning($message, $removeAfterAccess = true)
    {
        Yii::$app->session->addFlash('warning', $message, $removeAfterAccess);
    }

    /**
     * @param string $message
     * @param bool   $removeAfterAccess
     */
    public static function success($message, $removeAfterAccess = true)
    {
        Yii::$app->session->addFlash('success', $message, $removeAfterAccess);
    }

    /**
     * @param string $message
     * @param bool   $removeAfterAccess
     */
    public static function info($message, $removeAfterAccess = true)
    {
        Yii::$app->session->addFlash('info', $message, $removeAfterAccess);
    }
}