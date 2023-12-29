<?php
class  Response
{
    public static function success(string $message = "", $result = null)
    {
        return new Response($message, true, $result);
    }
    public static function failure(string $message = "")
    {
        return new Response($message, false);
    }
    private function __construct(string $message, bool $success, $result = null)
    {
        $this->message = $message;
        $this->success = $success;
        $this->result = $result;
    }
    public  $result;
    public string $message;
    public bool $success;
}