<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Meloundry extends BaseController
{
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
                'aktif' => 'active'
            ],
        ];
        $breadcrumb = '<div class="col-sm-6">
                            <h1 class="m-0">meloundry</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="' . base_url() . '">Beranda</a></li>
                            <li class="breadcrumb-item active">Meloundry</li>
                            </ol>
                        </div>';
        $data['menu'] = $menu;
        $data['breadcrumb'] = $breadcrumb;
        return view('meloundry/content', $data);
    }
}
