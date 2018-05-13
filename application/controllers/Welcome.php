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

        $this->load->model('queries');
        $posts = $this->queries->getPosts();
		$this->load->view('welcome_message',['posts'=>$posts]);
	}

	public function create() {
        $this->load->view('create');
    }

    public function update($ID) {
        $this->load->model('queries');
        $post = $this->queries->getSinglePosts($ID);
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

                return redirect('Welcome');
        }
        else {
            $this ->load->view('create');
        }
    }

    public function change($ID) {
	    echo $ID;
       /* $this->form_validation->set_rules('meno', 'Meno', 'required');
        $this->form_validation->set_rules('priezvisko', 'Priezvisko', 'required');
        $this->form_validation->set_rules('vek', 'Vek', 'required');
        $this->form_validation->set_rules('Bydlisko', 'Bydlisko', 'required');
        $this->form_validation->set_rules('prax_v_odbore_v_r', 'Prax', 'required');
        if($this->form_validation->run()) {
            $data = $this->input->post();
            unset ($data['submit']);
            $this->load->model('queries');
            if( $this->queries->updatePost($data, $ID)){
                $this->session->set_flashdata('msg','Údaje úspešne aktualizované');
            }
            else {
                $this->session->set_flashdata('msg','Údaje sa neaktualizovali!');
            }

            return redirect('Welcome');
        }
        else {
            $this ->load->view('create');
        }*/
    }


}
