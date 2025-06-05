<?php
    class entryvouchering extends CI_Controller{

        function __construct(){
            parent::__construct();
            //Database here.
            $this->load->model("vouchering_m");
        }

        function index(){
            $data["Title"] = "Vouchering";

            $this->load->view("common/aheader",$data);
            $this->load->view("common/anavbar");
            $this->load->view("common/bcss");
            $this->load->view("entryvouchering_v");
            $this->load->view("common/cfooter");
        }

        function viewCheqdata_c(){
            $data["success"] = false;

            $data["data"] = $this->vouchering_m->viewCheqdata_m();

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function listAccount_c(){
            $data["success"] = false;

            $data["data"] = $this->vouchering_m->listAccount_m();

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function getRequest_c(){
            $data["success"] = false;

            $rfpno = $this->input->post("txtnmRfpno");

            $data["data"] = $this->vouchering_m->getRequest_m($rfpno);

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }
    }
?>