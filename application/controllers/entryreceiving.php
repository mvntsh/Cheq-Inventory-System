<?php
    class entryreceiving extends CI_Controller{
        
        function __construct(){
            parent::__construct();
            //Database here.
        }

        function index(){
            $data["Title"] = "Receiving Entry";

            $this->load->view("common/aheader",$data);
            $this->load->view("common/bcss");
            $this->load->view("entryreceiving_v");
            $this->load->view("common/cfooter");
        }
    }
?>