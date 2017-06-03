<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculator extends CI_Controller {

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
    public function form()
    {
        $this->form_validation->set_rules('calculatorInput', 'Input', 'required');
        $this->form_validation->set_rules('calculatorInput', 'Input', 'callback_validateCalculatorInput');

        if ($this->form_validation->run() === FALSE) {
            $data['validationSuccess'] = "false";
        } else {
            $data['validationSuccess'] = "true";
        }


        $data['mainContent'] = "calculator/form.php";
        $this->load->view('layout/layout.php', $data);
    }

    //TODO: This should be on the calculator model
    //can I add more validation things? - contains at least one operator
    //none of the operands or operators are text
    //there is validation that happens in the Calculator class I already wrote - those should be exposed heres
    public function validateCalculatorInput($inputString)
    {
        //check at least three inputs were sent
        $separateInputs = explode(" ", $inputString);
        if (count($separateInputs) < 3) {
            return false;
        } else {
            return true;
        }

    }

    public function ajaxForm()
    {
        $data['mainContent'] = "calculator/ajaxForm.php";
        $this->load->view('layout/layout.php', $data);
    }

    public function wizard()
    {
        $data['mainContent'] = "calculator/wizard.php";
        $this->load->view('layout/layout.php', $data);
    }

}

