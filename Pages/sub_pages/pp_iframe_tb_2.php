<table class="table">
            <thead class="">
                <tr>
                <th scope="col">Period Code</th>
                <th scope="col"><input type="text"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Period Name</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th scope="row">Sub-Periods</th>
                    <td>
                            <label for="sel"></label>
                            <select style="width: 125px;" name="pd" id="pd">
                                <option select>Year</option>
                                <option >Month</option>
                                <option >Week</option>
                            </select>  
                    </td>
                </tr>
                <tr>
                    <th scope="row">No. of Periods</th>
                    <td><input type="text" placeholder="1"></td>
                </tr>
                <tr>
                    <th scope="row">Period Indicator</th>
                    <td>
                            <label for="sel"></label>
                            <select style="width: 125px;" name="pd" id="pd">
                                <option select>Default</option>
                                <option > </option>
                            </select>  
                    </td>
                </tr>

                <div style="height: 20px;"></div>

                <tr>
                    <th scope="row">Period Status</th>
                    <td><input type="text" placeholder="Unlocked" disabled></td>
                </tr>

                <div style="height: 10px;"></div>

                <tr>
                    <td>
                        <h5>Dates</h5>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">Posting Date From </th>
                    <td><input style="margin-left: 10px;" type="text" placeholder="01/01/2023"></td>
                    <td>To <input style="margin-left: 10px;" type="text" placeholder="12/01/2023"></td>
                </tr>
                <tr>
                    <th scope="row">Due Date From </th>
                    <td><input style="margin-left: 10px;" type="text" placeholder="01/01/2023"></td>
                    <td>To <input style="margin-left: 10px;" type="text" placeholder="12/01/2023"></td>
                </tr>
                <tr>
                    <th scope="row">Document Date From</th>
                    <td><input style="margin-left: 10px;" type="text" placeholder="01/01/2023"></td>
                    <td>To <input style="margin-left: 10px;" type="text" placeholder="12/01/2023"></td>
                </tr>
                <div style="height: 10px;"></div>
                <tr>
                    <th scope="row">Start of Fiscal Year <input style="margin-left: 10px;" type="text" placeholder="01/01/2023"></th>
                </tr>
                <tr>
                    <th scope="row">Fiscal Year<input style="margin-left: 10px;" type="text" placeholder="2023"></th>
                </tr>
            </tbody>
        </table>
        <div style="height: 20px;"></div>
        <div class="col-sm-3 row d-flex justify-content-around">
            <button class="btn btn-warning">Add</button>
            <button class="btn btn-warning">Cancel</button>
        </div>