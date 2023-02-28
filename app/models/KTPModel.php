<?php

class KTPModel extends Controller
{
    public function __construct(Type $var = null) {
        $this->curl = new Curl();
    }
}
