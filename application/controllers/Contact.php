<?php

class Contact extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
		$this->template->load('template', 'contact');
    }

}