
<div class="container">
    <table class="col-sm-12 table-borderless">
            <thead class="">
                <tr>
                <th scope="col"><h5>Payment Terms Code</h5></th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Due Date Based On</th>
                    <td>
                        <label for="sel"> </label>
                            <select style="width: 125px;" name="pd" id="pd">
                                <option select>Posting Date</option>
                                <option >System Date</option>
                                <option >Document Date</option>
                            </select>                
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Start From 
                          
                        <label for="sel"></label>
                            <select style="width: 125px;" name="pd" id="pd">
                                <option select>Month End</option>
                                <option >Half Month</option>
                                <option >Month Start</option>
                                <option > </option>
                            </select>    
                        
                        +
                    </th>
                    <td><input class="mr-1" type="text" placeholder="0">Months + <input type="text" placeholder="30"> Days</td>
                </tr>
                <tr>
                    <th scope="row">Tolerance Days</th>
                    <td><input type="text" placeholder=""></td>
                </tr>
                <tr>
                    <th scope="row">No. of Installments</th>
                    <td><input type="text" placeholder="0" disabled></td>
                </tr>
                <tr style="height: 20px;">
                    <th scope="row"></th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Open Incoming Payment</th>
                    <td>
                        <label for="sel"></label>
                            <select style="width: 125px;" name="pd" id="pd">
                                <option select>No</option>
                                <option >Yes</option>
                                <option > </option>
                            </select>  
                    </td>
                </tr>
                <tr>
                    <th scope="row">Cash Discount Name</th>
                    <td><input type="text" placeholder=""></td>
                </tr>
                <tr style="height: 20px;">
                    <th scope="row"></th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row"><h5>BP Fields</h5></th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Total Discount %</th>
                    <td><input type="text" placeholder="0.00"></td>
                </tr>
                <tr>
                    <th scope="row">Interest % on Receivables</th>
                    <td><input type="text" placeholder="0.00"></td>
                </tr>
                <tr>
                    <th scope="row">Price List</th>
                    <td>
                        <label for="sel"></label>
                            <select style="width: 125px;" name="pd" id="pd">
                                <option select>Regular Sales Price</option>
                                <option >Lower Sales Price</option>
                                <option >Higher Sales Price</option>
                                <option >Custom Sales Price</option>
                            </select>  
                    </td>
                </tr>
                <tr>
                    <th scope="row">Max Credit</th>
                    <td><input type="text" placeholder="0.00"></td>
                </tr>
                <tr>
                    <th scope="row">Commitment Limit</th>
                    <td><input type="text" placeholder="0.00"></td>
                </tr>
            </tbody>
        </table>

        <div style="height: 30px;"></div>
        <div class="col-sm-12 row">
            <button class="mr-2 btn btn-warning">Update</button>
            <button class="btn btn-warning">Cancel</button>
        </div>
</div>