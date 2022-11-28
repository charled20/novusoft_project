<div class="col-sm-12">
<table class="table table-bordered">
    <td>
    <div class="my-4"></div>

    <div class="row col-sm-12 d-flex justify-content-between">
            <div class="col-sm-6">
                <div class="col-sm-12">
                    <h5>House Bank</h5>
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Country</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="requster_name" placeholder="Philippines" >
                        </div>
                    </div>  
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Bank</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="requster_name" placeholder="Bank of Commerce" >
                        </div>
                    </div>     
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Account</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="branch" placeholder="999-999-9999">
                        </div>
                    </div>  
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Branch</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="department" placeholder="Main" disabled>
                        </div>
                    </div> 
                    <div class="form-group-sm row">
                            <label class="col col-form-label">IBAN</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="department" placeholder="">
                        </div>
                    </div> 
                    <div class="form-group-sm row">
                            <label class="col col-form-label">BIC/SWIFT Code</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="department" placeholder="" disabled>
                        </div>
                    </div> 
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Control Number</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="department" placeholder="" disabled>
                        </div>
                    </div> 

                    <div style="height: 20px;"></div>

                    <div class="container row d-flex justify-content-between">
                    <div class="form-group-sm row">
                            <input type="checkbox"><label class="col col-form-label mr-2">Payment Block</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="department" placeholder="">
                        </div>
                        
                    </div>   
                        
                    </div>

                        <div class="mx-auto">
                            <input type="checkbox" class="mr-3">Single Payment
                        </div>
                        <div class="mx-auto">
                            <input type="checkbox" class="mr-3">Collection Authorization
                        </div>
                </div>
            </div>

            <div class="col-sm-5">
                <h5>Payment Methods</h5>
                <table class="table table-bordered text-center">
                    <thead class="bg-secondary text-white">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Code</th>
                        <th scope="col">Description</th>
                        <th scope="col">Include</th>
                        <th scope="col">Active</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Incoming BT</td>
                            <td class="expanded">Incoming Bank Transfer to BOC</td>
                            <td><input type="checkbox"></td>
                            <td><input type="checkbox" disabled></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Incoming BT 02</td>
                            <td class="expanded">Incoming Bank Transfer to BDO</td>
                            <td><input type="checkbox"></td>
                            <td><input type="checkbox" disabled></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Incoming BT 03</td>
                            <td class="expanded">Incoming Bank Transfer to MBTC</td>
                            <td><input type="checkbox"></td>
                            <td><input type="checkbox" disabled></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td class="expanded"></td>
                            <td><input type="checkbox"></td>
                            <td><input type="checkbox" disabled></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td class="expanded"></td>
                            <td><input type="checkbox"></td>
                            <td><input type="checkbox" disabled></td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-between">
                <button class="btn btn-primary">Clear Default</button>
                <button class="btn btn-primary">Set As Default</button>
                </div>
            </div>

            

            
        </div>

        <div style="height:40px;"></div>
        </td>
</table>
</div>