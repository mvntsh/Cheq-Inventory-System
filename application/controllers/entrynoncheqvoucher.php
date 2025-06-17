<?php
    class entrynoncheqvoucher extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model("noncheqentry_m");
        }        

        function index(){
            $data["Title"] = "Non-Cheq Entry";

            $this->load->view("common/aheader",$data);
            $this->load->view("common/anavbar");
            $this->load->view("common/bcss");
            $this->load->view("entrynoncheqvoucher_v");
            $this->load->view("common/cfooter");
        }

        function viewNoncheq_c(){
            $data["success"] = false;

            $data["data"] = $this->noncheqentry_m->viewNoncheq_m();

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }
    }
?>