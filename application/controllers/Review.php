<?php

class Review extends CI_Controller
{
    public function tambah()
    {
        $idartikel = $this->input->post('artikelid');
        $user = $this->input->post('username');
        $komen = $this->input->post('isikomen');

        $data = array(
            'artikel_id' => $idartikel,
            'user' => $user,
            'isi_komentar' => $komen,
        );

        // var_dump($data);
        $this->model_review->tambah_review($data, 'review');

        redirect('welcome');
    }
}
