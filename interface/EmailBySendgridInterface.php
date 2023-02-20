<?php


interface EmailBySendgridInterface
{
    public function send(array $data);
}