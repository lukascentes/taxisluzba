<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{


        $this->load->view('navigation');

	}

    public function vlozjazdu() {
        $this->load->view('navigation');
        $this->load->view('vlozjazdu');
}

    public function vlozauto() {
        $this->load->view('navigation');
        $this->load->view('vlozauto');
    }

    public function vlozsluzbu() {
        $this->load->view('navigation');
        $this->load->view('vlozsluzbu');
    }

	public function create() {
        $this->load->view('navigation');
        $this->load->view('create');
    }

    public function taxikariview() {
        $this->load->view('navigation');
        $this->load->model('queries');
        $posts = $this->queries->getPosts();
        $this->load->view('welcome_message',['posts'=>$posts]);
    }
    public function autaview() {
        $this->load->view('navigation');
        $this->load->model('auta');
        $post = $this->auta->getPosts();
        $this->load->view('autaview',['post'=>$post]);
    }

    public function jazdaview() {
        $this->load->view('navigation');
        $this->load->model('jazdy');
        $post = $this->jazdy->getPosts();
        $this->load->view('jazdyview',['post'=>$post]);
    }

    public function sluzbaview() {
        $this->load->view('navigation');
        $this->load->model('sluzby');
        $post = $this->sluzby->getPosts();
        $this->load->view('sluzbyview',['post'=>$post]);
    }


    public function update($id){
        $this->load->model('queries');
        $post = $this->queries->getSinglePosts($id);
        $this->load->view('update',['post'=>$post]);
    }


    public function save() {
        $this->form_validation->set_rules('meno', 'Meno', 'required');
        $this->form_validation->set_rules('priezvisko', 'Priezvisko', 'required');
        $this->form_validation->set_rules('vek', 'Vek', 'required');
        $this->form_validation->set_rules('Bydlisko', 'Bydlisko', 'required');
        $this->form_validation->set_rules('prax_v_odbore_v_r', 'Prax', 'required');
        if($this->form_validation->run()) {
            $data = $this->input->post();
           unset ($data['submit']);
            $this->load->model('queries');
           if( $this->queries->addPost($data)){
                $this->session->set_flashdata('msg','Údaje úspešne uložené');
            }
            else {
                $this->session->set_flashdata('msg','Údaje sa neuložili!');
                }

                return redirect('welcome/taxikariview');
        }
        else {
            $this ->load->view('create');
        }
    }

    public function saveauto() {
        $this->form_validation->set_rules('značka', 'Značka', 'required');
        $this->form_validation->set_rules('model', 'Model', 'required');
        $this->form_validation->set_rules('rok_výroby', 'Rok Výroby', 'required');
        $this->form_validation->set_rules('farba', 'Farba', 'required');
        $this->form_validation->set_rules('stav_odometra', 'Stav Odometra', 'required');
        if($this->form_validation->run()) {
            $data = $this->input->post();
            unset ($data['submit']);
            $this->load->model('auta');
            if( $this->auta->addPost($data)){
                $this->session->set_flashdata('msg','Údaje úspešne uložené');
            }
            else {
                $this->session->set_flashdata('msg','Údaje sa neuložili!');
            }

            return redirect('welcome/autaview');
        }
        else {
            $this ->load->view('vlozauto');
        }
    }
    public function savejazda() {
        $this->form_validation->set_rules('začiatok', 'Začiatok', 'required');
        $this->form_validation->set_rules('koniec', 'Koniec', 'required');
        $this->form_validation->set_rules('počet_km', 'Počet_KM', 'required');
        if($this->form_validation->run()) {
            $data = $this->input->post();
            unset ($data['submit']);
            $this->load->model('jazdy');
            if( $this->jazdy->addPost($data)){
                $this->session->set_flashdata('msg','Údaje úspešne uložené');
            }
            else {
                $this->session->set_flashdata('msg','Údaje sa neuložili!');
            }

            return redirect('welcome/jazdyview');
        }
        else {
            $this ->load->view('vlozjazdu');
        }
    }

    public function savesluzba() {
        $this->form_validation->set_rules('začiatok', 'Začiatok', 'required');
        $this->form_validation->set_rules('koniec', 'Koniec', 'required');
        $this->form_validation->set_rules('počet_km_za_službu', 'Počet KM', 'required');
        $this->form_validation->set_rules('zárobok', 'Zárobok', 'required');
        $this->form_validation->set_rules('stav_odo_začiatok', 'Stav ODO - začiatok', 'required');
        $this->form_validation->set_rules('stav_odo_koniec', 'Stav ODO - koniec', 'required');
        if($this->form_validation->run()) {
            $data = $this->input->post();
            unset ($data['submit']);
            $this->load->model('sluzby');
            if( $this->auta->addPost($data)){
                $this->session->set_flashdata('msg','Údaje úspešne uložené');
            }
            else {
                $this->session->set_flashdata('msg','Údaje sa neuložili!');
            }

            return redirect('welcome/sluzbyview');
        }
        else {
            $this ->load->view('vlozsluzbu');
        }
    }

    public function change($id) {

       $this->form_validation->set_rules('meno', 'Meno', 'required');
        $this->form_validation->set_rules('priezvisko', 'Priezvisko', 'required');
        $this->form_validation->set_rules('vek', 'Vek', 'required');
        $this->form_validation->set_rules('Bydlisko', 'Bydlisko', 'required');
        $this->form_validation->set_rules('prax_v_odbore_v_r', 'Prax', 'required');
        if($this->form_validation->run()) {
            $data = $this->input->post();
            unset ($data['submit']);
            $this->load->model('queries');
            if( $this->queries->updatePost($data, $id)){
                $this->session->set_flashdata('msg','Údaje úspešne aktualizované');
            }
            else {
                $this->session->set_flashdata('msg','Údaje sa neaktualizovali!');
            }

            return redirect('welcome/taxikariview');
        }
        else {
            $this ->load->view('create');
        }
    }





}
