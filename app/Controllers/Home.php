<?php
namespace App\Controller;

class Home extends BaseController
{
    public function index()
    {
        $menu = [
            'beranda' => [
                'title' => 'Beranda',
                'link' => base_url(),
                'icon' => 'fa-solid fa-house',
                'aktif' => 'active'
            ],
            'pelanggan' => [
                'title' => 'pelanggan',
                'link' => base_url() . '/pelanggan',
                'icon' => 'fa-solid fa-users',
                'aktif' => ''
            ],
            'pegawai' => [
                'title' => 'pegawai',
                'link' => base_url() . '/pegawai',
                'icon' => 'fa-solid fa-users',
                'aktif' => ''
            ],
            'meloundry' => [
                'title' => 'meloundry',
                'link' => base_url() . '/meloundry',
                'icon' => 'fa-solid fa-house',
                'aktif' => ''
            ],
        ];
        $breadcrumb = '<div class="col-sm-6">
                            <h1 class="m-0">Beranda</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Beranda</li>
                            </ol>
                        </div>';
        $data['menu'] = $menu;
        $data['breadcrumb'] = $breadcrumb;
        $data['title_card'] = "Selamat Datang di My Website";
        $data['selamat_datang'] = "Semoga Memenuhi Kebutuhan Anda";
        return view('template/content', $data);
    }
}
