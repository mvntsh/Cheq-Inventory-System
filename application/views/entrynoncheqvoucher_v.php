    <div class="row">
        <div class="col-md-6">
            <div class="card" style="border-radius: 0px; margin: 1em; background-color: #b8b7b6; border-color: transparent; zoom: 70%;">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form id="frmInputs" style="margin:1em;">
                            <div class="input-group">
                                <input type="text" autocomplete="off" class="form-control form-control-lg" placeholder="RFP No." aria-label="RFP No." aria-describedby="basic-addon2">
                                <button class="btn btn-warning" id="basic-addon2" style="height: 45pt;"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg></button>
                            </div>
                            <input type="text" autocomplete="off" class="form-control form-control-lg" placeholder="Payee">
                            <select name="txtnmAccountno" class="form-control form-control-lg" id="inputnmAccountno">
                                <option value="123456">---Select Account No.---</option>
                            </select>
                            <input type="date" name="txtnmVoucherdate" class="form-control form-control-lg" id="inputnmVoucherdate">
                            <div class="input-group">
                                <input type="text" autocomplete="off" name="txtnmVoucherno" class="form-control form-control-lg" id="inputnmVoucherno" placeholder="Voucher No.">
                                <button class="btn btn-warning" id="basic-addon2" style="height: 45pt;"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg></button>
                            </div>
                            <input type="date" autocomplete="off" name="txtnmTransactiondate" class="form-control form-control-lg" id="inputnmTransactiondate">
                            <select name="txtnmTransactiontype" class="form-control form-control-lg" id="inputnmTransactiontype">
                                <option value="123456">---Select Transaction type---</option>
                            </select>
                            <input type="text" autocomplete="off" name="txtnmAmount" class="form-control form-control-lg" id="inputnmAmount" placeholder="Amount">
                            <textarea name="txtnmDescription" autocomplete="off" class="form-control form-control-lg" id="inputnmDescription" style="height: 6em;" placeholder="Description"></textarea>
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6 d-grid">
                                    <button class="btn btn-success btn-lg">Save.</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="border-radius: 0px; margin: 1em; background-color: #b8b7b6; border-color: black; zoom: 50%; overflow-y: scroll; height: 1190px; scrollbar-width: thin; scrollbar-color: #8c8c8c #454443;">
                <table style="width: 100%;" class="table table-striped table-dark table-hover" id="tblNoncheq">
                    <thead style="position: sticky; top:0;">
                        <tr>
                            <th colspan="6" style="text-align: center; font-size: 30pt;">Non Cheq Details.</th>
                        </tr>
                        <tr style="text-align: center; font-size: 12pt;">
                            <th>Voucher No.</th>
                            <th>Payee</th>
                            <th>Transaction type</th>
                            <th>Amount</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>123456</td>
                            <td>Marvin B. Batitay</td>
                            <td>Bank Online BPI</td>
                            <td>123,456.00</td>
                            <td>Sample description for voucher no. 123456</td>
                            <td>
                                <button class="btn btn-primary">Update</button>
                            </td>
                        </tr>
                        <tr>
                            <td>123456</td>
                            <td>Marvin B. Batitay</td>
                            <td>Bank Online BPI</td>
                            <td>123,456.00</td>
                            <td>Sample description for voucher no. 123456</td>
                            <td>
                                <button class="btn btn-primary">Update</button>
                            </td>
                        </tr>
                        <tr>
                            <td>123456</td>
                            <td>Marvin B. Batitay</td>
                            <td>Bank Online BPI</td>
                            <td>123,456.00</td>
                            <td>Sample description for voucher no. 123456</td>
                            <td>
                                <button class="btn btn-primary">Update</button>
                            </td>
                        </tr>
                        <tr>
                            <td>123456</td>
                            <td>Marvin B. Batitay</td>
                            <td>Bank Online BPI</td>
                            <td>123,456.00</td>
                            <td>Sample description for voucher no. 123456</td>
                            <td>
                                <button class="btn btn-primary">Update</button>
                            </td>
                        </tr>
                        <tr>
                            <td>123456</td>
                            <td>Marvin B. Batitay</td>
                            <td>Bank Online BPI</td>
                            <td>123,456.00</td>
                            <td>Sample description for voucher no. 123456</td>
                            <td>
                                <button class="btn btn-primary">Update</button>
                            </td>
                        </tr>
                        <tr>
                            <td>123456</td>
                            <td>Marvin B. Batitay</td>
                            <td>Bank Online BPI</td>
                            <td>123,456.00</td>
                            <td>Sample description for voucher no. 123456</td>
                            <td>
                                <button class="btn btn-primary">Update</button>
                            </td>
                        </tr>
                        <tr>
                            <td>123456</td>
                            <td>Marvin B. Batitay</td>
                            <td>Bank Online BPI</td>
                            <td>123,456.00</td>
                            <td>Sample description for voucher no. 123456</td>
                            <td>
                                <button class="btn btn-primary">Update</button>
                            </td>
                        </tr>
                        <tr>
                            <td>123456</td>
                            <td>Marvin B. Batitay</td>
                            <td>Bank Online BPI</td>
                            <td>123,456.00</td>
                            <td>Sample description for voucher no. 123456</td>
                            <td>
                                <button class="btn btn-primary">Update</button>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            viewNoncheq_c();
            function viewNoncheq_c(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entrynoncheqvoucher/viewNoncheq_c',
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            var tbody = '';

                            response.data.forEach(function(x){
                                tbody += `
                                    <tr>
                                        <td>${x['voucherno']}</td>
                                        <td>${x['payee']}</td>
                                        <td>${x['transactiontype']}</td>
                                        <td>${x['amount']}</td>
                                        <td>${x['description']}</td>
                                        <td>
                                            <button class="btn btn-primary">Update</button>
                                        </td>
                                    </tr>
                                `;
                            })
                            $("#tblNoncheq tbody").html(tbody);
                        }
                    }
                })
            }
        })
    </script>