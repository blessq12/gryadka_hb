<?php


class Telegram{

    private $token;
    private $recipient;
    private $url;

    public function __construct($token = '',$recipient = '')
    {
        if ($token !== '' && $recipient !== ''){
            $this->token = $token;
            $this->recipient = $recipient;
            $this->generateUrl();
        }
    }
    private function generateUrl(){
        $bot = 'https://api.telegram.org/bot';
        $recipient = '/sendMessage?chat_id=';
        $this->url = $bot . $this->token .$recipient . $this->recipient;
    }
    public function sendMessage($text = null){
        if ($text !== '' && !is_null($text)){
            $request = file_get_contents($this->url .'&text=' .urlencode($text));
            if ($request){
                return true;
            } else {
                return false;
            }
        } else {
            return 'ERROR: EMPTY MESSAGE FIELD';
        }
    }
}