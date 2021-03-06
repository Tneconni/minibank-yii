<?php
/**
 * This controller is a set of actions which process any event messages
 * from WeChat server.
 * The event messages are those like menu clicked, qr scaned, subscribed and many others.
 *
 * The actions must return message in the format of WeChat standard :
 *
 */
class EventApiController extends Controller {

    /**
     * Sample action:
     *
     * Action name shall be what the event is.
     */
    public function actionSampleMenuClicked(){
        //Event parameters are all in the post data.
        $eventObj = WeChatRequest::extractEventObj($_POST);
        $result = WeChatEventHandler::functionNotReady($eventObj);
        echo $result;
    }

    public function actionBankAdminMenuClicked(){
        $eventObj = WeChatRequest::extractEventObj($_POST);
        $result = WeChatEventHandler::functionNotReady($eventObj);
        echo $result;
    }

    public function actionBankWithdrawMenuClicked(){
        $eventObj = WeChatRequest::extractEventObj($_POST);
        $result = WeChatEventHandler::functionNotReady($eventObj);
        echo $result;
    }

    public function actionBankDepositMenuClicked(){
        $eventObj = WeChatRequest::extractEventObj($_POST);
        $result = WeChatEventHandler::functionNotReady($eventObj);
        echo $result;
    }

    public function actionBankBalanceMenuClicked(){
        $eventObj = WeChatRequest::extractEventObj($_POST);
        $result = WeChatEventHandler::functionNotReady($eventObj);
        echo $result;
    }

    public function actionMiniActivityMenuClicked(){
        $eventObj = WeChatRequest::extractEventObj($_POST);
        $result = WeChatEventHandler::functionNotReady($eventObj);
        echo $result;
    }

    public function actionMiniCalculationMenuClicked(){
        $eventObj = WeChatRequest::extractEventObj($_POST);
        $result = WeChatEventHandler::functionNotReady($eventObj);
        echo $result;
    }
}