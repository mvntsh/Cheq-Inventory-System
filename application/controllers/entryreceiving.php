<?php
    class entryreceiving extends CI_Controller{
        
        function __construct(){
            parent::__construct();
            //Database here.
            $this->load->model("receiving_m");
        }

        function index(){
            $data["Title"] = "Receiving Entry";

            $this->load->view("common/aheader",$data);
            $this->load->view("common/bcss");
            $this->load->view("entryreceiving_v");
            $this->load->view("common/cfooter");
        }

        function viewReceived_c(){
            $data["success"] = false;

            $data["data"] = $this->receiving_m->viewReceived_m();

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function getRfpdata_c(){
            $data["success"] = false;

            $rfpno = $this->input->post("txtnmSearch");

            $data["data"] = $this->receiving_m->getRfpdata_m($rfpno);

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }
    }
?>