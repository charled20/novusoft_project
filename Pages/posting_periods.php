<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posting Periods</title>

    <link href="../novusoft_proj/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../novusoft_proj/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        html {
            font-size: 10px;
        } 
        .form-group {
            margin-bottom: 6px;
        }
    </style>
</head>
<body>
    <div style="height: 400px;" class="col-sm-12 border overflow-auto">
        <table class="table table-bordered text-center">
            <thead class="" style="position: sticky;">
                <tr>
                <th scope="col"></th>
                <th scope="col"  colspan="3">General</th>
                <th scope="col"  colspan="2">Posting Date</th>
                <th scope="col"  colspan="2">Due Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">#</th>
                    <td>Period Code</td>
                    <td>Period Name</td>
                    <td>Period Status</td>
                    <td>From</td>
                    <td>To</td>
                    <td>From</td>
                    <td>To</td>
                </tr>
        <?php include 'sub_pages/pp_iframe_tb_1.php'; ?>
         </tbody>
        </table>

    </div>

    <div>
        <input type="checkbox" style="margin-top: 20px; margin-bottom: 20px; margin-right: 10px;" checked> Automatically Change of Period Status to 'Closing Period' 
    </div>

    <div>
        Date When Automatic Change is Applied <input type="text" placeholder="">
    </div>

    
    <div style="height: 30px;"></div>

    <div class="d-flex justify-content-between">
        <div>
            <button class="btn btn-warning">OK</button>
            <button class="btn btn-warning">Cancel</button>
        </div>
        <div>
            <button class="btn btn-warning" data-toggle="modal" data-target="#pp_sub_2">New Period</button>
        </div>        
    </div>

    <!--Posting Periods (New Period) Modal -->
                <div class="modal fade bd-example-modal" tabindex="-1" role="dialog" id="pp_sub_2" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <h5 class="modal-title text-light" id="pp_sub_2_h5">Posting Period</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                    <?php include 'sub_pages/pp_iframe_tb_2.php'; ?>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../novusoft_proj/vendor/jquery/jquery.min.js"></script>
    <script src="../novusoft_proj/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../novusoft_proj/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../novusoft_proj/js/sb-admin-2.min.js"></script>


</body>
</html>