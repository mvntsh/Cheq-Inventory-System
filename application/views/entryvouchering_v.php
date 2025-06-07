<style>
    @media screen{
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    }
</style>
<div class="card" style="background-color: transparent; border-color: transparent; zoom: 50%; margin: .5em;">
    <form id="frmInputs">
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <th>RFP No.</th>
                    <th>Payee</th>
                    <th>Transaction type</th>
                    <th>Available amount</th>
                    <th>Request status</th>
                    <th>Request remark</th>
                    <th>Received date</th>
                </tr>
                <tr>
                    <td class="input-group" style="border-color: transparent;">
                        <input type="text" name="txtnmRfpno" class="form-control form-control-lg" id="inputnmRfpno">
                        <button id="btnRfpnodata" class="btn btn-warning" style="height: 61px; border-radius: 0px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg>
                        </button>
                        <div id="divGetrfdata" hidden></div>
                    </td>
                    <td><input type="text" name="txtnmPayee" class="form-control form-control-lg" readonly id="inputnmPayee"></td>
                    <td><input type="text" name="txtnmTransactiontype" class="form-control form-control-lg" readonly id="inputnmTransactiontype"></td>
                    <td><input type="text" name="txtnmAvailableamount" class="form-control form-control-lg" readonly id="inputnmAvailableamount"></td>
                    <td><input type="text" name="txtnmRequeststatus" class="form-control form-control-lg" readonly id="inputnmRequeststatus"></td>
                    <td><input type="text" name="txtnmRequestremark" class="form-control form-control-lg" readonly id="inputnmRequestremark"></td>
                    <td><input type="date" name="txtnmReceivedate" class="form-control form-control-lg" readonly id="inputnmRequestdate"></td>
                </tr>
                <tr>
                    <td colspan="7" height="20pt;"></td>
                </tr>
                <tr>
                    <th>Accountno</th>
                    <th>Check date</th>
                    <th>Check No.</th>
                    <th>Voucherdate</th>
                    <th>Voucher No.</th>
                    <th>Amount</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>
                        <select name="txtnmAccountno" id="inputnmAccountno" class="form-control form-control-lg">
                            <option value="1301-0327-29">1301-0327-29</option>
                        </select>
                    </td>
                    <td><input type="date" name="txtnmCheckdate" class="form-control form-control-lg" id="inputnmCheckdate"><div id="divCheckdate" hidden></div></td>
                    <td><input type="text" name="txtnmCheckno" class="form-control form-control-lg" id="inputnmCheckno"></td>
                    <td><input type="date" name="txtnmVoucherdate" class="form-control form-control-lg" id="inputnmVoucherdate"></td>
                    <td><input type="text" name="txtnmVoucherno" class="form-control form-control-lg" id="inputnmVoucherno"></td>
                    <td><input type="text" name="txtnmAmount" class="form-control form-control-lg" id="inputnmAmount"></td>
                    <td><input type="text" name="txtnmDescription" class="form-control form-control-lg" id="inputnmDescription"></td>
                </tr>
            </tbody>
        </table>
    </form>
    <div class="card" style="zoom: 90%; border-radius: 0px; margin-top: 1em; overflow-y: scroll; height: 590px; scrollbar-width: thin; scrollbar-color: #8c8c8c #454443; border-color: #8c8c8c;">
        <table style="width: 100%;" class="table table-hover table-striped table-dark" id="tblCheqdata">
            <thead style="position: sticky; top:0;">
                <tr>
                    <td style="background-color: #8c8c8c;">Check No.</td>
                    <td style="background-color: #8c8c8c;">Payee</td>
                    <td style="background-color: #8c8c8c;">Check Date</td>
                    <td style="background-color: #8c8c8c;">Voucher No.</td>
                    <td style="background-color: #8c8c8c;">Voucher Date</td>
                    <td style="background-color: #8c8c8c;">Amount</td>
                    <td style="background-color: #8c8c8c;">Description</td>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <div class="row" style="margin-top: 1em;">
        <div class="col-md-8"></div>
        <div class="col-md-2 d-grid">
            <button class="btn btn-danger">Edit.</button>
        </div>
        <div class="col-md-2 d-grid">
            <button class="btn btn-dark" style="height: 80pt;" id="btnSave">Save.</button>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        viewCheqdata_v();
        listAccount_v();
        function viewCheqdata_v(){
            $.ajax({
                type:'ajax',
                method:'POST',
                url:'entryvouchering/viewCheqdata_c',
                dataType:'json',
                success:function(response){
                    if(response.success){
                        var tbody = '';

                        response.data.forEach(function(x){
                            tbody += `
                                <tr>
                                    <td>${x['checkno']}</td>
                                    <td>${x['payee']}</td>
                                    <td>${x['checkdate']}</td>
                                    <td>${x['checkvoucherno']}</td>
                                    <td>${x['voucherdate']}</td>
                                    <td>${x['amount']}</td>
                                    <td>${x['checkdescription']}</td>
                                </tr>
                            `;
                        })
                        $("#tblCheqdata tbody").html(tbody);
                    }
                }
            })
        }

        function listAccount_v(){
            $.ajax({
                type:'ajax',
                method:'POST',
                url:'entryvouchering/listAccount_c',
                dataType:'json',
                success:function(response){
                    if(response.success){
                        var option = '';
                        response.data.forEach(function(x){
                            option += `
                            <option value="${x['accountno']}">${x['accountno']}</option>`;
                        })
                        $("#inputnmAccountno").html(option);
                    }
                }
            })
        }
    })
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#btnRfpnodata").click(function(e){
            e.preventDefault();
            getRequest_v();
        })

        function getRequest_v(){
            $.ajax({
                type:'ajax',
                method:'POST',
                url:'entryvouchering/getRequest_c',
                data:$("#inputnmRfpno").serialize(),
                dataType:'json',
                success:function(response){
                    if(response.success){
                        var div = '';

                        response.data.forEach(function(x){
                            div += `
                                <button id="btnGetrequestdata" data-payee="${x['payee']}" data-payment="${x['payment']}" data-availableamount="${x['dummyamount']}" data-receivestatus="${x['receivestatus']}" data-receiveremark="${x['receiveremarks']}" data-datareceived="${x['datareceived']}" data-description="${x['description']}"</button>
                            `;
                        })
                        $("#divGetrfdata").html(div);
                        $("#btnGetrequestdata").click();
                    }
                }
            })
        }

        $(document).on("click","#btnGetrequestdata",function(e){
            e.preventDefault();
            $("#inputnmPayee").val($(this).attr("data-payee"));
            $("#inputnmTransactiontype").val($(this).attr("data-payment"));
            $("#inputnmAvailableamount").val($(this).attr("data-availableamount"));
            $("#inputnmRequeststatus").val($(this).attr("data-receivestatus"));
            $("#inputnmRequestremark").val($(this).attr("data-receiveremark"));
            $("#inputnmRequestdate").val($(this).attr("data-datareceived"));
            $("#inputnmDescription").val($(this).attr("data-description"));
            $("#inputnmCheckdate").focus();
        })

        $("#btnSave").click(function(e){
            e.preventDefault();
            showStaled_v();
        })

        function showStaled_v(){
            $.ajax({
                type:'ajax',
                method:'POST',
                url:'entryvouchering/showStaled_c',
                data:$("#inputnmCheckdate").serialize(),
                dataType:'json',
                success:function(response){
                    if(response.success){
                        var div = '';

                        response.data.forEach(function(x){
                            div += `
                                <input type="date" name="txtnmDatestaled" value="${x['dateStaled']}" id="inputnmDatestaled">
                            `;
                        })
                        $("#divCheckdate").html(div);
                        alert("Success");
                    }
                }
            })
        }
    })
</script>