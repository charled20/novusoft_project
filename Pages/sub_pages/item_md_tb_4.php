<div class="col-sm-8">
<table class="table table-bordered text-center">

    <div class="my-4"></div>

    <div class="row col-sm-12 d-flex justify-content-between">
            <div class="col-sm-6">
                <div class="col-sm-12">
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Set Inventory Method by</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="requster_name" placeholder="Warehouse" disabled >
                        </div>
                    </div>  
                    <div class="form-group-sm row">
                            <label class="col col-form-label">UoM Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="requster_name" placeholder="" >
                        </div>
                    </div>     
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Weight</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="branch" placeholder="">
                        </div>
                    </div> 

                    <div style="height: 100px;"></div>
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Valuation Method</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="branch" placeholder="Moving Average" disabled>
                        </div>
                    </div>  
                </div>
            </div>

            <div class="col-sm-5">
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="py-1 ml-2 form-check-label" for="flexCheckDefault">
                            Manage Inventory by Warehouse
                        </label>
                </div> 
                <hr>
                <h5>Inventory Level</h5>
                <div class="form-group-sm row col">
                        <label class="col col-form-label">Required (Purchasing UoM)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="posting_date" placeholder='' disabled>
                    </div>
                </div> 
                <div class="form-group-sm row col">
                        <label class="col col-form-label">Minimum</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="valid_until" placeholder='' disabled> 
                    </div>
                </div> 
                <div class="form-group-sm row col">
                        <label class="col col-form-label">Maximum</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="document_date" placeholder="" disabled>
                    </div>
                </div> 
            </div>
        </div>

        
</table>
</div>

<div class="container">
            <table class="table table-bordered text-center">
                <thead class="bg-secondary text-white">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Warehouse No</th>
                    <th scope="col">Warehouse Name</th>
                    <th scope="col">Location</th>
                    <th scope="col">In Stock</th>
                    <th scope="col">Committed</th>
                    <th scope="col">Ordered</th>
                    <th scope="col">Available</th>
                    <th scope="col">Item Cost</th>
                    <th scope="col">Cycle Code</th>
                    <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>01</td>
                        <td>San Vicente</td>
                        <td> <input type="checkbox"></td>
                        <td>1,022</td>
                        <td>250</td>
                        <td>200</td>
                        <td>1,233</td>
                        <td>999.00</td>
                        <td>Monthly</td>
                        <td>6/24/2022</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>13</td>
                        <td>Ambago</td>
                        <td> <input type="checkbox"></td>
                        <td>500</td>
                        <td>144</td>
                        <td>88</td>
                        <td>344</td>
                        <td>432.00</td>
                        <td>Weekly</td>
                        <td>6/28/2022</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td> <input type="checkbox" disabled></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td> <input type="checkbox" disabled></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td> <input type="checkbox" disabled></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="borderless">
                        <td scope="row" class="no-line"></td>
                        <td class="no-line"></td>
                        <td class="no-line"></td>
                        <td class="no-line"></td>
                        <td>1,522</td>
                        <td>394</td>
                        <td>288</td>
                        <td>1,577</td>
                        <td class="no-line"></td>
                        <td class="no-line"></td>
                        <td class="no-line"></td>
                    </tr>
                </tbody>
            </table>
        </div>