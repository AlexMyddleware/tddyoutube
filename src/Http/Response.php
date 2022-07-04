<?php 

namespace Twitter\Http;

class Response {
    protected string $content = "";
    protected array $headers = [];
    protected int $statusCode = 200;
}