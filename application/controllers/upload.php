<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Upload extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index() {
        $this->load->view('templates/header');
        $this->load->view('upload_form', array('error' => ' '));
        $this->load->view('templates/footer');
    }

    function do_upload() {
        $config['upload_path'] = './public/uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('templates/header');
            $this->load->view('upload_form', $error);
            $this->load->view('templates/footer');
        } else {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('templates/header');
            $this->load->view('upload_success', $data);
            $this->load->view('templates/footer');
        }
    }

}
