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

        function viewPayee_c(){
            $data["success"] = false;

            $data["data"] = $this->receiving_m->viewPayee_m();

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function viewTrxntype_c(){
            $data["success"] = false;

            $data["data"] = $this->receiving_m->viewTrxntype_m();

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function updateData_c(){
            $data["success"] = false;

            $re_id = $this->input->post("txtnmReceivingid");
            $values = array(
                "payee" => $this->input->post("txtnmUpdatepayee"),
                "payment" => $this->input->post("txtnmUpdatetrxntype"),
                "amount" => $this->input->post("txtnmUpdateamount"),
                "description" => $this->input->post("txtnmUpdatedescription")
            );

            $response = $this->receiving_m->updateData_m($re_id,$values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }
    }
?>