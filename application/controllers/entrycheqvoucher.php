<?php
    class entrycheqvoucher extends CI_Controller{

        function __construct(){
            parent::__construct();
            //Database here.
            $this->load->model("cheqentry_m");
        }

        function index(){
            $data["Title"] = "Vouchering";

            $this->load->view("common/aheader",$data);
            $this->load->view("common/anavbar");
            $this->load->view("common/bcss");
            $this->load->view("entrycheqvoucher_v");
            $this->load->view("common/cfooter");
        }

        function viewCheqdata_c(){
            $data["success"] = false;

            $data["data"] = $this->cheqentry_m->viewCheqdata_m();

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function listAccount_c(){
            $data["success"] = false;

            $data["data"] = $this->cheqentry_m->listAccount_m();

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function getRequest_c(){
            $data["success"] = false;

            $rfpno = $this->input->post("txtnmRfpno");

            $data["data"] = $this->cheqentry_m->getRequest_m($rfpno);

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

            $response = $this->cheqentry_m->saveCheq_m($values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function showStaled_c(){
            $data["success"] = false;

            $checkdate = $this->input->post("txtnmCheckdate");

            $data["data"] = $this->cheqentry_m->showStaled_m($checkdate);

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function selectBank_c(){
            $data["success"] = false;
            
            $accountno = $this->input->post("txtnmAccountno");

            $data["data"] = $this->cheqentry_m->selectBank_m($accountno);

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function cheqnoExist_c(){
            $data["success"] = false;

            $checkno = $this->input->post("txtnmCheckno");

            $data["data"] = $this->cheqentry_m->cheqnoExist_m($checkno);

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function vouchernoExist_c(){
            $data["success"] = false;

            $checkvoucherno = $this->input->post("txtnmVoucherno");

            $data["data"] = $this->cheqentry_m->vouchernoExist_m($checkvoucherno);

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function checkRemark_c(){
            $data["success"] = false;

            $rfpno = $this->input->post("txtnmRfpno");

            $response = $this->cheqentry_m->checkRemark_m($rfpno);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function checkExistingstatus_c(){
            $data["success"] = false;

            $checkno = $this->input->post("txtnmUpdatecheckno");
            $status = $this->input->post("txtnmUpdatestatus");

            $response = $this->cheqentry_m->checkExistingstatus_m($checkno,$status);

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

            $response = $this->cheqentry_m->updateStatus_m($checkno,$values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function searchCheqno_c(){
            $data["success"] = false;

            $checkno = $this->input->post("txtnmCheckno");

            $data["data"] = $this->cheqentry_m->searchCheqno_m($checkno);

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function revertStatus_c(){
            $data["success"] = false;

            $checkno = $this->input->post("txtnmCheckno");

            $values = array(
                "status" => $this->input->post("txtnmStatus"),
                "date" => $this->input->post("txtnmDate")
            );

            $response = $this->cheqentry_m->revertStatus_m($checkno,$values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function cashAdvance_c(){
            $data["success"] = false;

            $rfpno = $this->input->post("txtnmRfpno");

            $response = $this->cheqentry_m->cashAdvance_m($rfpno);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function saveCheqprop_c(){
            $data["success"] = false;

            $values = array(
                "bankname" => $this->input->post("txtnmBankname"),
                "accountno" => $this->input->post("txtnmAccountno"),
                "payee" => $this->input->post("txtnmPayee"),
                "division" => $this->input->post("txtnmDivision"),
                "rfpno" => $this->input->post("txtnmRfpno"),
                "daterequest" => $this->input->post("txtnmReceivedate"),
                "availableamount" => $this->input->post("txtnmAvailableamount"),
                "checkno" => $this->input->post("txtnmCheckno"),
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
                "datestaled" => $this->input->post("txtnmDatestaled")
            );

            $response = $this->cheqentry_m->saveCheqprop_m($values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function removeCheqstatus_c(){
            $data["success"] = false;

            $checkno = $this->input->post("txtnmCheckno");

            $response = $this->cheqentry_m->removeCheqstatus_m($checkno);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function getDifference_c(){
            $data["success"] = false;

            $dummyamount = $this->input->post("txtnmAvailableamount");
            $checkamount = $this->input->post("txtnmAmount");
            $rfpno = $this->input->post("txtnmRfpno");

            $data["data"] = $this->cheqentry_m->getDifference_m($dummyamount,$checkamount,$rfpno);

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function updateRequestamount_c(){
            $data["success"] = false;

            $rfpno = $this->input->post("txtnmRfpno");
            $values = array(
                "dummyamount" =>$this->input->post("txtnmAvailableamount")
            );

            $response = $this->cheqentry_m->updateRequestamount_m($rfpno,$values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function exceedRequest_c(){
            $data["success"] = false;

            $rfpno = $this->input->post("txtnmRfpno");
            $checkamount = $this->input->post("txtnmAmount");

            $response = $this->cheqentry_m->exceedRequest_m($rfpno,$checkamount);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function closeRequest_c(){
            $data["success"] = false;

            $rfpno = $this->input->post("txtnmRfpno");

            $response = $this->cheqentry_m->closeRequest_m($rfpno);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function remarkClose_c(){
            $data["success"] = false;

            $rfpno = $this->input->post("txtnmRfpno");
            $values = array(
                "receiveremarks" => $this->input->post("txtnmRequestremark")
            );

            $response = $this->cheqentry_m->remarkClose_m($rfpno,$values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }
    }
?>