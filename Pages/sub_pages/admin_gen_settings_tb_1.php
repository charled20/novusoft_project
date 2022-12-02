<table class="table">
            <thead class="">
                <tr>
                <th scope="col">Customer Activity Restrictions</th>
                <th scope="col"></th>
                <th scope="col">Set Commission by</th>
                <th scope="col">Approval Process</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><input type="checkbox" name="" id="" style="margin-right: 10px;" checked>Credit Limit</th>
                    <td><input type="checkbox" style="margin-right: 10px;"> AR Invoice</td>
                    <td><input type="checkbox" style="margin-right: 10px;" checked> Sales Employees</td>
                    <td><input type="checkbox" style="margin-right: 10px;" checked> Enable Approval Process</td>
                </tr>
                <tr>
                    <th scope="row"><input type="checkbox" name="" id="" style="margin-right: 10px;">Commitment Limit</th>
                    <td><input type="checkbox" style="margin-right: 10px;"> Delivery</td>
                    <td><input type="checkbox" style="margin-right: 10px;"> Items</td>
                    <td><input type="checkbox" style="margin-right: 10px;" checked> Enable Approval Process in DI</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><input type="checkbox" style="margin-right: 10px;" checked> Sales Order</td>
                    <td><input type="checkbox" style="margin-right: 10px;"> Customers</td>
                    <td><input type="checkbox" style="margin-right: 10px;" checked> Enable Updating the Document Generated/Updated by Approval Process</td>
                </tr>
                <tr>
                    <th scope="row"><input type="checkbox" name="" id="" style="margin-right: 10px;" checked>Consider Deliveries Balance</th>
                    <td><input type="checkbox" style="margin-right: 10px;"> Pick List</td>
                    <td></td>
                    <td><input type="checkbox" style="margin-right: 10px;" checked> Enable Updating the Document Draft in Pending/Approved Status</td>
                </tr>
            </tbody>
        </table>

<table class="col-sm-12 table-borderless">
            <thead class="">
                <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="col-sm-12">
                <tr class="col-sm-6">
                    <th scope="row">Default Payment Method for Customer</th>
                    <td><input class="ml-1" type="text" placeholder="Incoming BT AIB"></td>
                    <td><h5>Payment Terms Preferences</h5></td>
                    <td></td>
                </tr>
                <tr class="col-sm-6">
                    <th scope="row">Default Payment Method for Supplier</th>
                    <td><input class="ml-1" type="text" placeholder="Outgoing BT AIB"></td>
                    <td>Default Payment Term for Customer</td>
                    <td> <a href="" data-toggle="modal" data-target="#payment_term">&#11035;</a> <input class="ml-1" type="text" placeholder="AR Net 30"></td>
                </tr>
                <tr class="col-sm-6">
                    <th scope="row">Submit Credit Vouchers</th>
                    <td><input class="ml-1" type="text" placeholder="Automatically"></td>
                    <td>Default Payment Term for Supplier</td>
                    <td> <a href="" data-toggle="modal" data-target="#payment_term">&#11035;</a> <input class="ml-1" type="text" placeholder="AR Net 30"></td>
                </tr>
                <tr class="col-sm-6">
                    <th scope="row">Default Dunning Term for Customer</th>
                    <td><input class="ml-1" type="text" placeholder="Standard"></td>
                    <td><input type="checkbox" style="margin-right: 10px;">Apply Changes in BP Fields to New Business Partners Only</td>
                    <td></td>
                </tr>
            </tbody>
</table>

<!--Payment Term Modal -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="payment_term" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-secondary">
                                <h5 class="modal-title text-light" id="payment_term_h5">Payment Terms - Setup</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                    <?php include 'admin_pay_terms.php'; ?>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>