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
                "bankname" => $this->input->post("txtnmBankname"),
                "accountno" => $this->input->post("txtnmAccountno"),
                "payee" => $this->input->post("txtnmPayee"),
                "division" => $this->input->post("txtnmDivision"),
                "checkno" => $this->input->post("txtnmCheckno"),
                "rfpno" => $this->input->post("txtnmRfpno"),
                "daterequest" => $this->input->post("txtnmReceivedate"),
                "payment" => $this->input->post("txtnmTransactiontype"),
                "availableamount" => $this->input->post("txtnmAvailableamount"),
                "checkdate" => $this->input->post("txtnmCheckdate"),
                "checkvoucherno" => $this->input->post("txtnmVoucherno"),
                "voucherdate" => $this->input->post("txtnmVoucherdate"),
                "amount" => $this->input->post("txtnmAmount"),
                "netofvat" => $this->input->post("txtnmNOV"),
                "taxable" => $this->input->post("txtnmTax"),
                "taxamount" => $this->input->post("txtnmTaxamount"),
                "checkamount" => $this->input->post("txtnmAmount"),
                "status" => $this->input->post("txtnmStatus"),
                "checkdescription" => $this->input->post("txtnmDescription"),
                "date" => $this->input->post("txtnmDate"),
                "datestaled" => $this->input->post("txtnmDatestaled"),
                "availablecheck" => $this->input->post("txtnmCount")
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

        function selectBank_c(){
            $data["success"] = false;
            
            $accountno = $this->input->post("txtnmAccountno");

            $data["data"] = $this->vouchering_m->selectBank_m($accountno);

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function cheqnoExist_c(){
            $data["success"] = false;

            $checkno = $this->input->post("txtnmCheckno");

            $data["data"] = $this->vouchering_m->cheqnoExist_m($checkno);

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function vouchernoExist_c(){
            $data["success"] = false;

            $checkvoucherno = $this->input->post("txtnmVoucherno");

            $data["data"] = $this->vouchering_m->vouchernoExist_m($checkvoucherno);

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function checkRemark_c(){
            $data["success"] = false;

            $rfpno = $this->input->post("txtnmRfpno");

            $response = $this->vouchering_m->checkRemark_m($rfpno);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function checkExistingstatus_c(){
            $data["success"] = false;

            $checkno = $this->input->post("txtnmUpdatecheckno");
            $status = $this->input->post("txtnmUpdatestatus");

            $response = $this->vouchering_m->checkExistingstatus_m($checkno,$status);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function updateStatus_c(){
            $data["success"] = false;

            $checkno = $this->input->post("txtnmUpdatecheckno");

            $values = array(
                "status" => $this->input->post("txtnmUpdatestatus"),
                "date" => $this->input->post("txtnmUpdatedate")
            );

            $response = $this->vouchering_m->updateStatus_m($checkno,$values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function searchCheqno_c(){
            $data["success"] = false;

            $checkno = $this->input->post("txtnmCheckno");

            $data["data"] = $this->vouchering_m->searchCheqno_m($checkno);

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function requestStatus_c(){
            $data["success"] = false;
            
            $rfpno = $this->input->post("txtnmRfpno");
            $values = array(
                "receivestatus" => $this->input->post("txtnmRequeststatus")
            );

            $response = $this->vouchering_m->requestStatus_m($rfpno,$values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function revertStatus_c(){
            $data["success"] = false;

            $rfpno = $this->input->post("txtnmRfpno");

            $values = array(
                "status" => $this->input->post("txtnmStatus"),
                "date" => $this->input->post("txtnmDate")
            );

            $response = $this->vouchering_m->revertStatus_m($checkno,$values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }
    }
?>