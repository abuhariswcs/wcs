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
	{    $this->load->database();
        $this->load->model('Common_model');
        $posts=$this->Common_model->getpost();
        $this->load->view('welcome_message',['post'=>$posts]);
	}
    public function create()
    {
        $this->load->helper('form');
        $this->load->view('create');
    }
    public function save()
    {
        // $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if($this->form_validation->run())
        {
            $data = array(
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),

            );
//            print_r($data);
            $this->load->model('Common_model');
            $this->Common_model->addpost($data);

            return redirect('Welcome');
        }
        else
        {
            echo"error";
        }
    }



    public function update($id){

        $this->load->database();
        $this->load->model('Common_model');
        $posts=$this->Common_model->update_view($id);
        $this->load->view('update',['post'=>$posts]);

    }




    public function delete_row($id)   //Created a controller class //
    {

        $this->load->model('Common_model'); //Load model Managecat here
        $this->Common_model->deleteRecord($id); //send the parameter $id in Managecat  there I have created a function name deleteRecord

            return redirect('Welcome');


    }


}
?>