<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petani extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Petani';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'Selamat datang ' . $data['user']['name'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('petani/index', $data);
        $this->load->view('templates/footer');
    }
}