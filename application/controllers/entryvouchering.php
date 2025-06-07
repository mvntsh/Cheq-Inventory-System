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

        function saveCheq_c(){
            $data["success"] = false;

            $values = array(
                "bankname" => $this->input->post(""),
                "accountno" => $this->input->post("txtnmAccountno"),
                "payee" => $this->input->post("txtnmPayee"),
                "division" => $this->input->post(""),
                "checkno" => $this->input->post("txtnmCheckno"),
                "rfpno" => $this->input->post("txtnmRfpno"),
                "daterequest" => $this->input->post("txtnmReceivedate"),
                "payment" => $this->input->post("txtnmTransactiontype"),
                "availableamount" => $this->input->post("txtnmAvailableamount"),
                "checkdate" => $this->input->post("txtnmCheckdate"),
                "checkvoucherno" => $this->input->post("txtnmVoucherno"),
                "voucherdate" => $this->input->post("txtnmVoucherdate"),
                "amount" => $this->input->post("txtnmAmount"),
                "netofvat" => $this->input->post(""),
                "taxable" => $this->input->post(""),
                "taxamount" => $this->input->post(""),
                "checkamount" => $this->input->post("txtnmAmount"),
                "status" => $this->input->post(""),
                "checkdescription" => $this->input->post("txtnmDescription"),
                "date" => $this->input->post(""),
                "datestaled" => $this->input->post("txtnmDatestaled"),
                "availablecheck" => $this->input->post("")
            );

            $response = $this->vouchering_m->saveCheq_m($values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function showStaled_c(){
            $data["success"] = false;

            $checkdate = $this->input->post("txtnmCheckdate");

            $data["data"] = $this->vouchering_m->showStaled_m($checkdate);

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }
    }
?>