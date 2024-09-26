<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Users extends Controller {

    public function __construct()
    {
        parent::__construct();
        $this->call->model('users_model');
    }

    public function read() {  
        $data['use'] = $this->users_model->read();
        $data['name'] = "List of Users";
  
        $this->call->view('users/display', $data);
    }

    public function create() {
        if ($this->form_validation->submitted()) {
            $this->form_validation
                ->name('vvm_last_name')
                ->required()
                ->alpha()
                ->name('vvm_first_name')
                ->required()
                ->min_length(2)
                ->name('vvm_email')
                ->required()
                ->min_length(2)
                ->name('vvm_gender')
                ->required()
                ->min_length(2)
                ->name('vvm_address')
                ->required()
                ->min_length(2);
            
            if ($this->form_validation->run()) {
                $vvm_last_name = $this->io->post('vvm_last_name');
                $vvm_first_name = $this->io->post('vvm_first_name');
                $vvm_email = $this->io->post('vvm_email');
                $vvm_gender = $this->io->post('vvm_gender');
                $vvm_address = $this->io->post('vvm_address');

                if ($this->users_model->create($vvm_last_name, $vvm_first_name, $vvm_email, $vvm_gender, $vvm_address)) {
                    set_flash_alert('success', 'User added successfully.');
                    redirect('users/add');
                }
            } else {
                set_flash_alert('danger', $this->form_validation->errors());
                redirect('users/add');
            }
        }
        $this->call->view('users/create');
    }

    public function update($id) {
        if ($this->form_validation->submitted()) {
            $this->form_validation
                ->name('vvm_last_name')
                ->required()
                ->alpha()
                ->name('vvm_first_name')
                ->required()
                ->min_length(5)
                ->name('vvm_email')
                ->required()
                ->min_length(5)
                ->name('vvm_gender')
                ->required()
                ->min_length(5)
                ->name('vvm_address')
                ->required()
                ->min_length(5);
            
            if ($this->form_validation->run()) {
                $vvm_last_name = $this->io->post('vvm_last_name');
                $vvm_first_name = $this->io->post('vvm_first_name');
                $vvm_email = $this->io->post('vvm_email');
                $vvm_gender = $this->io->post('vvm_gender');
                $vvm_address = $this->io->post('vvm_address');

                if ($this->users_model->update($vvm_last_name, $vvm_first_name, $vvm_email, $vvm_gender, $vvm_address, $id)) {
                    set_flash_alert('success', 'User updated successfully.');
                    redirect('users/display');
                }
            } else {
                set_flash_alert('danger', $this->form_validation->errors());
                redirect('users/display');
            }
        }
        $data['users'] = $this->users_model->get_one($id);
        $this->call->view('users/update', $data);
    }

    public function delete($id) {
        if ($this->users_model->delete($id)) {
            set_flash_alert('success', 'User was deleted successfully.');
            redirect('users/display');
        } else {
            set_flash_alert('danger', 'Something went wrong.');
            redirect('users/display');
        }
    }
}
?>
