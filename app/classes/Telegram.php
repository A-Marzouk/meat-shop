<?php
namespace App\classes;

class Telegram {
    protected $token;
    protected $api = "https://api.telegram.org/bot";
    protected $idChat;

    protected function getUrl($command, array $params= []) {
        $res = $this->api . '/' . $command;
        if (!empty($params)) {
            $res .= '?' . http_build_query($params);
        }
        return $res;
    }

    protected function getResult($command, array $params= []) {
        try {
            return file_get_contents($this->getUrl($command, $params));
        } catch (Exception $e) {
            return '';
        }
    }

    public function __construct($idChat = ''){
        $this->token = '936141764:AAGMRS6PWjdBMHk7a27AmtkFS_KePbVB-F0';
        $this->api .= $this->token;
        $this->idChat = $idChat;
    }

    public function setIdChat($idChat) {
        $this->idChat = $idChat;
    }

    public function sendMessage($message) {
        $dataGet = array(
            'chat_id' => $this->idChat,
            'text' => $message,
            'parse_mode' => 'HTML',
        );
        return $this->getResult('sendMessage', $dataGet);
    }

    public function getUpdates() {
        return $this->getResult('getUpdates');
    }
}