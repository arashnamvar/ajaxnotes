<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class notes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model("note");
	}

  public function index_html()
  {
    $data["notes"] = $this->note->all();
    $this->load->view("partials/notes", $data);
  }

   public function create_title()
  {

    $new_note = $this->input->post();
    $this->note->create($new_note);
    $data["notes"] = $this->note->all();
    $this->load->view("partials/notes", $data);
  }

     public function destroy($id)
  {
    $this->note->destroy($id);
    $data["notes"] = $this->note->all();
    $this->load->view("partials/notes", $data);
  }

     public function update_description()
  {
    $update_note = $this->input->post();
    $this->note->update($update_note);
    $data["notes"] = $this->note->all();
    $this->load->view("partials/notes", $data);
  }

	public function index()
	{
		$this->load->view("index");
	}
}

//end of main controller