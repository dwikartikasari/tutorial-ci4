<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PelangganModel;

class Pelanggan extends BaseController
{
    protected $pm;
    public function __construct()
    {
        $this->pm = new PelangganModel();
    }
    public function index()
    {
        $menu = [
            'beranda' => [
                'title' => 'Beranda',
                'link' => base_url(),
                'icon' => 'fa-solid fa-house',
                'aktif' => ''
            ],
            'pelanggan' => [
                'title' => 'Pelanggan',
                'link' => base_url() . '/Pelanggan',
                'icon' => 'fa-solid fa-users',
                'aktif' => 'active'
            ],
            'pegawai' => [
                'title' => 'Pegawai',
                'link' => base_url() . '/Pegawai',
                'icon' => 'fa-solid fa-users',
                'aktif' => ''
            ],
            'meloundry' => [
                'title' => 'Meloundry',
                'link' => base_url() . '/Meloundry',
                'icon' => 'fa-solid fa-house',
                'aktif' => ''
            ],
        ];
        $breadcrumb = '<div class="col-sm-6">
                            <h1 class="m-0">pelanggan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="' . base_url() . '">Beranda</a></li>
                            <li class="breadcrumb-item active">pelanggan</li>
                            </ol>
                        </div>';
        $data['menu'] = $this->menu;
        $data['breadcrumb'] = $breadcrumb;
        $data['title_card'] = "Data Pelanggan";

        $query = $this->pm->find();
        $data['data_pelanggan'] = $query;
        return view('pelanggan/content', $data);
    }
}
