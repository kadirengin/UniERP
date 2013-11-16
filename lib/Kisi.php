<?php

class Kisi {
    public $isim;
    public $soyisim;
    public $dogumTarihi;//sadece yıl
    
    public function getUzunIsim(){
        return $this->isim.''.$this->soyisim;
    }
    public function getYas() {
        return date ('Y')-$this->dogumTarihi;
        
    }
}
