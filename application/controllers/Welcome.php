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
        $this->load->view('uvod');
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
        $this->load->view('pagination');
    }
    public function autaview() {
        $this->load->view('navigation');
        $this->load->model('auta');
        $posts = $this->auta->getPosts();
        $this->load->view('autaview',['posts'=>$posts]);
        $this->load->view('pagination');
    }

    public function detailauta($ID) {
        $this->load->view('navigation');
        $this->load->model('auta');
        $post = $this->auta->getSinglePosts($ID);
        $this->load->view('autadetail',['post'=>$post]);
    }
    public function detailjazdy($ID) {
        $this->load->view('navigation');
        $this->load->model('jazdy');
        $post = $this->jazdy->getSinglePosts($ID);
        $this->load->view('jazdyddetail',['post'=>$post]);
    }

    public function detailsluzby($ID) {
        $this->load->view('navigation');
        $this->load->model('sluzby');
        $post = $this->sluzby->getSinglePosts($ID);
        $this->load->view('sluzbydetail',['post'=>$post]);
    }

    public function jazdaview() {
        $this->load->view('navigation');
        $this->load->model('jazdy');
        $post = $this->jazdy->getPosts();
        $this->load->view('jazdyview',['post'=>$post]);
        $this->load->view('pagination');
    }

    public function sluzbaview() {
        $this->load->view('navigation');
        $this->load->model('sluzby');
        $post = $this->sluzby->getPosts();
        $this->load->view('sluzbyview',['post'=>$post]);
        $this->load->view('pagination');
    }

    public function view($ID){
        $this->load->view('navigation');
        $this->load->model('queries');
        $post = $this->queries->getSinglePosts($ID);
        $this->load->view('view',['post'=>$post]);
        $this->load->view('pagination');
    }

    public function update($ID){
        $this->load->view('navigation');
        $this->load->model('queries');
        $post = $this->queries->getSinglePosts($ID);
        $this->load->view('update',['post'=>$post]);
    }

    public function updateauta($ID){
        $this->load->view('navigation');
        $this->load->model('auta');
        $post = $this->auta->getSinglePosts($ID);
        $this->load->view('updateauta',['post'=>$post]);
    }

    public function delete($ID){
        $this->load->model('queries');
        if($this->queries->deletePosts($ID)){
            $this->session->set_flashdata('msg','Taxikár odstránený');
        }
        else{
            $this->session->set_flashdata('msg','Taxikára sa nepodarilo odstrániť');
        }
        return redirect('welcome/taxikariview');
    }

    public function deleteauto($ID){
        $this->load->model('auta');
    if($this->auta->deletePosts($ID)){
            $this->session->set_flashdata('msg','auto odstránené');
        }
        else{
            $this->session->set_flashdata('msg','auto sa nepodarilo odstrániť');
        }
        return redirect('welcome/autaview');
    }

      public function deletejazda($ID){
        $this->load->model('jazdy');
        if($this->jazdy->deletePosts($ID)){
            $this->session->set_flashdata('msg','Jazda odstránená');
        }
        else{
            $this->session->set_flashdata('msg','Jazdu sa nepodarilo odstrániť');
        }
        return redirect('welcome/jazdaview');
    }
    public function deletesluzba($id){
        $this->load->model('sluzby');
        if($this->sluzby->deletePosts($id)){
            $this->session->set_flashdata('msg','Služba odstránená');
        }
        else{
            $this->session->set_flashdata('msg','Službu sa nepodarilo odstrániť');
        }
        return redirect('welcome/sluzbaview');
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
        $this->form_validation->set_rules('rok_výroby', 'Rok výroby', 'required');
        $this->form_validation->set_rules('farba', 'Farba', 'required');
        $this->form_validation->set_rules('stav_odometra', 'Stav ODO', 'required');
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

    public function change($ID) {

       $this->form_validation->set_rules('meno', 'Meno', 'required');
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

            return redirect('welcome/taxikariview');
        }
        else {
            $this ->load->view('create');
        }
    }

    public function changeauto($ID) {

        $this->form_validation->set_rules('značka', 'Značka', 'required');
        $this->form_validation->set_rules('model', 'Model', 'required');
        $this->form_validation->set_rules('rok_výroby', 'Rok_výroby', 'required');
        $this->form_validation->set_rules('farba', 'Farba', 'required');
        $this->form_validation->set_rules('stav_odometra', 'Stav_odometra', 'required');
        if($this->form_validation->run()) {
            $data = $this->input->post();
            unset ($data['submit']);
            $this->load->model('auta');
            if( $this->auta->updatePost($data, $ID)){
                $this->session->set_flashdata('msg','Údaje úspešne aktualizované');
            }
            else {
                $this->session->set_flashdata('msg','Údaje sa neaktualizovali!');
            }

            return redirect('welcome/autaview');
        }
        else {
            $this ->load->view('vlozauto');
        }
    }



}
