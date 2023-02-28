<?php

class CetakPengaduan  extends Controller
{
    public function semua()
    {
        $data['pengaduan'] = $this->model('PengaduanModel')->ambilSemuaPengaduanDenganPetugas();
           $this->model('CetakLaporanModel')->cetakSemuaPengaduan($data);
    }
    public function status0()
    {
           $data['pengaduan'] = $this->model('PengaduanModel')->ambilSemuaPengaduanDenganPetugasStatus0();
           $this->model('CetakLaporanModel')->cetakStatus0Pengaduan($data);
    }
    public function statusProses()
    {
           $data['pengaduan'] = $this->model('PengaduanModel')->ambilSemuaPengaduanDenganPetugasStatusProses();
           $this->model('CetakLaporanModel')->cetakStatusProsesPengaduan($data);
    }
    public function statusSelesai()
    {
           $data['pengaduan'] = $this->model('PengaduanModel')->ambilSemuaPengaduanDenganPetugasStatusSelesai();
           $this->model('CetakLaporanModel')->cetakStatusSelesaiPengaduan($data);
    }
    public function detail($id)
    {
           $data['pengaduan'] = $this->model('PengaduanModel')->ambilPengaduanDenganIDPetugas($id);
           $this->model('CetakLaporanModel')->cetakDetailPengaduan($data);
    }
}


