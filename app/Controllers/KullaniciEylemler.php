<?php
namespace App\Controllers;
use App\Models\Kullanicilar;
use CodeIgniter\Controller;


class KullaniciEylemler extends BaseController
{
    public function index()
    {
        $kullanicilar = new Kullanicilar();
        $data['users'] = $kullanicilar->orderBy('id', 'DESC')->findAll();
        return view('kullanici_goruntule', $data);

    }
     // kullanıcı ekle
     public function ekle(){
        return view('kullanici_ekle');
    }
 
    // veri ekle
    public function kaydet() {
        $kullanicilar = new Kullanicilar();
        $data = [
            'isim' => $this->request->getVar('isim'),
            'eposta'  => $this->request->getVar('eposta'),
            'notlar'  => $this->request->getVar('notlar'),
        ];
        $kullanicilar->insert($data);
        return $this->response->redirect(site_url('/liste'));
    }
    // tek kişi göster
    public function duzenle($id = null){
        $kullanicilar = new Kullanicilar();
        $data['user_obj'] = $kullanicilar->where('id', $id)->first();
        return view('kullanici_duzenle', $data);
    }
    // kullanıcı verisi güncelle
    public function guncelle(){
        $kullanicilar = new Kullanicilar();
        $id = $this->request->getVar('id');
        $data = [
            'isim' => $this->request->getVar('isim'),
            'eposta'  => $this->request->getVar('eposta'),
            'notlar'  => $this->request->getVar('notlar'),
        ];
        $kullanicilar->update($id, $data);
        return $this->response->redirect(site_url('/liste'));
    }
 
    // kullanıcı sil
    public function sil($id = null){
        $kullanicilar = new Kullanicilar();
        $data['user'] = $kullanicilar->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/liste'));
    }    
}

