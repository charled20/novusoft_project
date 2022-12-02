<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Novusoft Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>

        /* Important part */
        .modal-dialog{
            overflow-y: initial !important
        }
        .modal-body{
            height: 80vh;
            overflow-y: auto;
        }
        .table-bordered > tbody > tr > th.borderless {
        border:none !important;
        border-right: none !important;
        border-left: none !important;
        border-top: none !important;
        border-right-style: none !important;
        border-left-style: none !important;
        }
        .table-bordered > tbody > tr.borderless {
        border:none !important;
        border-right: none !important;
        border-left: none !important;
        border-top: none !important;
        border-right-style: none !important;
        border-left-style: none !important;
        }
        .table-bordered > tbody > tr > td.no-line {
        border:none !important;
        border-right: none !important;
        border-left: none !important;
        border-top: none !important;
        border-right-style: none !important;
        border-left-style: none !important;
        }
        .table-bordered > tbody > tr > td.expanded {
        width:80px none !important;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                </div>
                <div class="sidebar-brand-text mx-3">Novusoft</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link text-center" href="index.html">
                    <span>Dashboard Protoype</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->

            <!--Novusoft Customized Dashboard Items-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin"
                    aria-expanded="true" aria-controls="collapseAdmin">
                    <span>Administration</span>
                </a>
                <div id="collapseAdmin" class="collapse" aria-labelledby="headingAdmin" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">Choose Company</a>
                        <a class="collapse-item" href="#">Exchange Rates</a>
                        <a class="collapse-item" href="#" data-toggle="collapse" data-target="#collapseSysInit"
                            aria-expanded="true" aria-controls="collapseSysInit">
                            <span>System Initialization</span>
                        </a>
                            <div id="collapseSysInit" class="collapse" aria-labelledby="headingSysInit" data-parent="#collapseAdmin">
                                <div class="py-1 collapse-inner rounded">
                                    <a class="collapse-item" href="#">Company Details</a>
                                    <a class="collapse-item" href="#" data-toggle="modal" data-target="#admin_gen_settings">General Settings</a>
                                    <a class="collapse-item" href="#" data-toggle="modal" data-target="#posting_periods">Posting Periods</a>
                                    <a class="collapse-item" href="#">Authorizations</a>
                                    <a class="collapse-item" href="#">Document Numbering</a>
                                    <a class="collapse-item" href="#">Document Settings</a>
                                    <a class="collapse-item" href="#">Print Preferences</a>
                                    <a class="collapse-item" href="#">Menu Structure</a>
                                    <a class="collapse-item" href="#">Menu Alias Searching</a>
                                    <a class="collapse-item" href="#">E-mail Settings</a>
                                    <a class="collapse-item" href="#">Opening Balances</a>
                                    <a class="collapse-item" href="#">Implementation Centre</a>
                                    <a class="collapse-item" href="#">Tooltip Preview</a>
                                </div>
                            </div>
                        <a class="collapse-item" href="#" data-toggle="collapse" data-target="#collapseAdminSetup"
                            aria-expanded="true" aria-controls="collapseAdminSetup">
                            <span>Setup</span>
                        </a>
                        <div id="collapseAdminSetup" class="collapse" aria-labelledby="headingSysInit" data-parent="#collapseAdmin">
                                <div class="py-1 collapse-inner rounded">
                                    <a class="collapse-item" href="#">General</a>
                                    <a class="collapse-item" href="#">Financials</a>
                                    <a class="collapse-item" href="#">Opportunities</a>
                                    <a class="collapse-item" href="#">Sales</a>
                                    <a class="collapse-item" href="#">Purchasing</a>
                                    <a class="collapse-item collapsed" href="#" data-toggle="collapse" data-target="#collapseAdminBP"
                                        aria-expanded="true" aria-controls="collapseAdminBP">
                                        <span>Business Partners</span>
                                    </a>
                                        <div id="collapseAdminBP" class="collapse" aria-labelledby="headingAdminSetup" data-parent="#collapseAdminSetup">
                                            <div class="py-1 collapse-inner rounded">
                                            <a class="collapse-item" href="#">Countries</a>
                                            <a class="collapse-item" href="#">Address Formats</a>
                                            <a class="collapse-item" href="#">Customer Groups</a>
                                            <a class="collapse-item" href="#">BP Properties</a>
                                            <a class="collapse-item" href="#">BP Priorities</a>         
                                            <a class="collapse-item" href="#">Dunning Levels</a>
                                            <a class="collapse-item" href="#">Dunning Terms</a>
                                            <a class="collapse-item" href="#" data-toggle="modal" data-target="#admin_payment_terms">Payment Terms</a>
                                            <a class="collapse-item" href="#">Payment Blocks</a>
                                            <a class="collapse-item" href="#">Target Group</a>
                                            <a class="collapse-item" href="#">E-mail Group</a>
                                            </div>
                                        </div>
                                    <a class="collapse-item" href="#">Banking</a>
                                    <a class="collapse-item" href="#">Stock Management</a>
                                    <a class="collapse-item" href="#">Resources</a>
                                    <a class="collapse-item" href="#">Service</a>
                                    <a class="collapse-item" href="#">Project Management</a>
                                    <a class="collapse-item" href="#">Production</a>
                                </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFinancials"
                    aria-expanded="true" aria-controls="collapseFinancials">
                    <span>Financials</span>
                </a>
                <div id="collapseFinancials" class="collapse" aria-labelledby="headingFinancials" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#" data-toggle="modal" data-target="#coa">Charts of Accounts</a>
                        <a class="collapse-item" href="#">Journal Entry</a>
                        <a class="collapse-item" href="#">Journal Vouchers</a>
                        <a class="collapse-item" href="#">Posting Templates</a>
                        <a class="collapse-item" href="#">Recurring Postings</a>
                        <a class="collapse-item" href="#">Reverse Transactions</a>
                        <a class="collapse-item" href="#">Exchange Rate Differences</a>
                        <a class="collapse-item" href="#">Conversion Differences</a>
                        <a class="collapse-item" href="#">Financial Report Templates</a>
                        <a class="collapse-item" href="#">Process Checklist</a>
                        <a class="collapse-item" href="#">Document Printing</a>
                        <a class="collapse-item" href="#">Journal Voucher Report</a>
                        <a class="collapse-item" href="#">Fixed Assets</a>
                        <a class="collapse-item" href="#">Internal Reconciliations</a>
                        <a class="collapse-item" href="#">Budget Setup</a>
                        <a class="collapse-item" href="#">Cost Accounting</a>
                        <a class="collapse-item" href="#">Financial Reports</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                    <span class="nav-link collapsed">Opportunities</span>
            </li>

            <li class="nav-item">
                    <span class="nav-link collapsed">Sales A/R</span>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <span>Purchasing A/P</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#" data-toggle="modal" data-target="#purchase_req">Purchase Request</a>
                        <a class="collapse-item" href="#">Purchase Consolidation</a>
                        <a class="collapse-item" href="#" data-toggle="modal" data-target="#purchase_q">Purchase Quotation</a>
                        <a class="collapse-item" href="#" data-toggle="modal" data-target="#purchase_order">Purchase Order</a>
                        <a class="collapse-item" href="#" data-toggle="modal" data-target="#grpo">Goods Receipt</a>
                        <a class="collapse-item" href="#" data-toggle="modal" data-target="#ap_invoice">A/P Invoice</a>
                        <a class="collapse-item" href="#">PO/PR Approval</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <span>Business Partners</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="#" data-toggle="modal" data-target="#bp_m_data">BP Master Data</a>
                        <a class="collapse-item" href="#">Activity</a>
                        <a class="collapse-item" href="#">Campaign Generation</a>
                        <a class="collapse-item" href="#">Campaign</a>
                        <a class="collapse-item" href="#">Internal Reconciliations</a>
                        <a class="collapse-item" href="#">Business Partner Reports</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                    <span class="nav-link collapsed">Banking</span>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                    <span>Inventory</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="#" data-toggle="modal" data-target="#item_m_data">Item Master Data</a>
                        <a class="collapse-item" href="#">Bar Codes</a>
                        <a class="collapse-item" href="#">Document Printing</a>
                        <a class="collapse-item" href="#">Item Management</a>
                        <a class="collapse-item" href="#">Inventory Transactions</a>
                        <a class="collapse-item" href="#">Price List</a>
                        <a class="collapse-item" href="#">Pick and Pack</a>
                        <a class="collapse-item" href="#">Inventory Reports</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                    <span class="nav-link collapsed">Resources</span>
            </li>

            <li class="nav-item">
                    <span class="nav-link collapsed">Production</span>
            </li>

            <li class="nav-item">
                    <span class="nav-link collapsed">MRP</span>
            </li>

            <li class="nav-item">
                    <span class="nav-link collapsed">Service</span>
            </li>

            <li class="nav-item">
                    <span class="nav-link collapsed">Human Resources</span>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
                    aria-expanded="true" aria-controls="collapseFive">
                    <span>Project Management</span>
                </a>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="#" data-toggle="modal" data-target="#pm_budget">Budget</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                    <span class="nav-link collapsed">Reports</span>
            </li>


            <li class="nav-item">
                    <span class="nav-link collapsed">Excel Reports</span>
            </li>

            <!--Novusoft Customized Dashboard Items-->

            <!--Novusoft Customized Modals-->
                <!-- PR Modal -->
                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" id="purchase_req" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title text-light" id="purchase_req_h5">Purchase Request</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                                <?php include 'Pages/purchase_request.php'; ?>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
                </div>

                <!-- PQ Modal -->
                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" id="purchase_q" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title text-light" id="purchase_q_h5">Purchase Quotation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                                <?php include 'Pages/purchase_quotation.php'; ?>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
                </div>

                <!-- PO Modal -->
                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" id="purchase_order" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title text-light" id="purchase_q_h5">Purchase Order</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                                <?php include 'Pages/purchase_order.php'; ?>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
                </div>

                <!-- GRPO Modal -->
                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" id="grpo" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title text-light" id="purchase_q_h5">Goods Receipt PO</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                                <?php include 'Pages/goods_receipt_po.php'; ?>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
                </div>

                <!-- AP Invoice Modal -->
                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" id="ap_invoice" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title text-light" id="ap_invoice_h5">A/P Invoice</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                                <?php include 'Pages/ap_invoice.php'; ?>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
                </div>

                <!-- Item Master Data Modal -->
                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" id="item_m_data" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title text-light" id="item_m_data_h5">Item Master Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                                <?php include 'Pages/item_master_data.php'; ?>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
                </div>

                <!-- Business Partner Master Data Modal -->
                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" id="bp_m_data" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title text-light" id="item_m_data_h5">Business Partner Master Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                                <?php include 'Pages/bp_master_data.php'; ?>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
                </div>

                <!-- Project Management Budget Modal -->
                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" id="pm_budget" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title text-light" id="pm_budget_h5">Budget</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                                <?php include 'Pages/pm_budget.php'; ?>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
                </div>

                <!-- Chart of Accounts Modal -->
                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" id="coa" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title text-light" id="coa_h5">Chart of Accounts</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                                <?php include 'Pages/coa.php'; ?>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
                </div>

                <!--Admin // General Settings Modal -->
                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" id="admin_gen_settings" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title text-light" id="coa_h5">General Settings</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                                <?php include 'Pages/admin_gen_settings.php'; ?>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
                </div>

                <!--Admin Payment Term Modal -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="admin_payment_terms" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-secondary">
                                <h5 class="modal-title text-light" id="admin_payment_terms_h5">Payment Terms - Setup</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                    <?php include 'Pages/sub_pages/admin_pay_terms.php'; ?>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>

                <!--Posting Periods Modal -->
                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" id="posting_periods" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-xl">
                        <div class="modal-content">
                            <div class="modal-header bg-secondary">
                                <h5 class="modal-title text-light" id="posting_periods_h5">Posting Periods</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                    <?php include 'Pages/posting_periods.php'; ?>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>
            <!--Novusoft Customized Modals-->

            
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Utilities Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> -->


            <!-- Sidebar Toggler (Sidebar) -->
            <!-- <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div> -->

            <!-- Sidebar Message
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2022</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2022</div>
                                        Php290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2022</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Earnings (Monthly)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Php 40,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Earnings (Annual)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Php 215,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Direct
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Social
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Referral
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Server Migration <span
                                            class="float-right">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Sales Tracking <span
                                            class="float-right">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Customer Database <span
                                            class="float-right">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Payout Details <span
                                            class="float-right">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Account Setup <span
                                            class="float-right">Complete!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color System -->
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-primary text-white shadow">
                                        <div class="card-body">
                                            Primary
                                            <div class="text-white-50 small">#4e73df</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Success
                                            <div class="text-white-50 small">#1cc88a</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-info text-white shadow">
                                        <div class="card-body">
                                            Info
                                            <div class="text-white-50 small">#36b9cc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-warning text-white shadow">
                                        <div class="card-body">
                                            Warning
                                            <div class="text-white-50 small">#f6c23e</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Danger
                                            <div class="text-white-50 small">#e74a3b</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-secondary text-white shadow">
                                        <div class="card-body">
                                            Secondary
                                            <div class="text-white-50 small">#858796</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-light text-black shadow">
                                        <div class="card-body">
                                            Light
                                            <div class="text-black-50 small">#f8f9fc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-dark text-white shadow">
                                        <div class="card-body">
                                            Dark
                                            <div class="text-white-50 small">#5a5c69</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/undraw_posting_photo.svg" alt="...">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                                        unDraw &rarr;</a>
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                                </div>
                                <div class="card-body">
                                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                        CSS bloat and poor page performance. Custom CSS classes are used to create
                                        custom components and custom utility classes.</p>
                                    <p class="mb-0">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>