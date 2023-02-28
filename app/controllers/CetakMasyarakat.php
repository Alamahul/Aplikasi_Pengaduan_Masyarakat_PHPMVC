<?php

class CetakMasyarakat extends Controller 
{
    public function index()
    {
        $data['masyarakat'] = $this->model('MasyarakatModel')->ambilSemuaDataMasyarakat();
           $this->model('CetakLaporanModel')->cetakSemuaMasyarakat($data);
    }
}
