
<?php include './../pages/header.php'; ?>
<?php include './../pages/sidebar.php'; ?>
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">  -->
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">User Management</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="#">
                                <i class="flaticon-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">User</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">User Dashboard</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">User List</h4>
                                    <div class="ml-auto">
                                        <a href="./add.php">
                                            <button
                                                class="btn btn-primary btn-round "
                                            >
                                                <i class="fa fa-plus"></i>
                                                Add
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Modal -->
                                <div
                                    class="modal fade"
                                    id="addRowModal"
                                    tabindex="-1"
                                    role="dialog"
                                    aria-hidden="true"
                                >
                                    <div
                                        class="modal-dialog"
                                        role="document"
                                    >
                                        <div class="modal-content">
                                            <div
                                                class="modal-header no-bd"
                                            >
                                                <h5 class="modal-title">
                                                    <span
                                                        class="fw-mediumbold"
                                                    >
                                                        New</span
                                                    >
                                                    <span
                                                        class="fw-light"
                                                    >
                                                        Row
                                                    </span>
                                                </h5>
                                                <button
                                                    type="button"
                                                    class="close"
                                                    data-dismiss="modal"
                                                    aria-label="Close"
                                                >
                                                    <span
                                                        aria-hidden="true"
                                                        >&trash;</span
                                                    >
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="small">
                                                    Create a new row
                                                    using this form,
                                                    make sure you fill
                                                    them all
                                                </p>
                                                <form>
                                                    <div class="row">
                                                        <div
                                                            class="col-sm-12"
                                                        >
                                                            <div
                                                                class="form-group form-group-default"
                                                            >
                                                                <label
                                                                    >Name</label
                                                                >
                                                                <input
                                                                    id="addName"
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="fill name"
                                                                />
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-md-6 pr-0"
                                                        >
                                                            <div
                                                                class="form-group form-group-default"
                                                            >
                                                                <label
                                                                    >Position</label
                                                                >
                                                                <input
                                                                    id="addPosition"
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="fill position"
                                                                />
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-md-6"
                                                        >
                                                            <div
                                                                class="form-group form-group-default"
                                                            >
                                                                <label
                                                                    >Office</label
                                                                >
                                                                <input
                                                                    id="addOffice"
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="fill office"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div
                                                class="modal-footer no-bd"
                                            >
                                                <button
                                                    type="button"
                                                    id="addRowButton"
                                                    class="btn btn-primary"
                                                >
                                                    Add
                                                </button>
                                                <button
                                                    type="button"
                                                    class="btn btn-danger"
                                                    data-dismiss="modal"
                                                >
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table
                                        id="add-row"
                                        class="display table table-striped table-hover nowrap"
                                    >
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th style="width: 10%">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>
                                                    System Architect
                                                </td>
                                                <td>Edinburgh</td>
                                                <td>
                                                    <div
                                                        class="form-button-action"
                                                    >
                                                    <a href="./edit.php">
                                                        <a href="./edit.php">
                                                        <button
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            class="btn btn-link btn-primary btn-lg"
                                                            data-original-title="Edit"
                                                        >
                                                            <i
                                                                class="fa fa-edit"
                                                            ></i>
                                                        </button>
                                                    </a>
                                                    </a>
                                                        <button
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            class="btn btn-link btn-danger"
                                                            data-original-title="Remove"
                                                            id="deleteAlert"
                                                        >
                                                            <i
                                                                class="fa fa-trash"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>
                                                    <div
                                                        class="form-button-action"
                                                    >
                                                        <a href="./edit.php">
                                                        <button
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            class="btn btn-link btn-primary btn-lg"
                                                            data-original-title="Edit"
                                                        >
                                                            <i
                                                                class="fa fa-edit"
                                                            ></i>
                                                        </button>
                                                    </a>
                                                        <button
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            class="btn btn-link btn-danger"
                                                            data-original-title="sdsdf"
                                                            id="deleteAlert"
                                                        >
                                                            <i
                                                                class="fa fa-trash"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>
                                                    Junior Technical
                                                    Author
                                                </td>
                                                <td>San Francisco</td>
                                                <td>
                                                    <div
                                                        class="form-button-action"
                                                    >
                                                        <a href="./edit.php">
                                                        <button
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            class="btn btn-link btn-primary btn-lg"
                                                            data-original-title="Edit"
                                                        >
                                                            <i
                                                                class="fa fa-edit"
                                                            ></i>
                                                        </button>
                                                    </a>
                                                        <button
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            class="btn btn-link btn-danger"
                                                            data-original-title="Remove"
                                                            id="deleteAlert"
                                                        >
                                                            <i
                                                                class="fa fa-trash"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>
                                                    Senior Javascript
                                                    Developer
                                                </td>
                                                <td>Edinburgh</td>
                                                <td>
                                                    <div
                                                        class="form-button-action"
                                                    >
                                                        <a href="./edit.php">
                                                        <button
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            class="btn btn-link btn-primary btn-lg"
                                                            data-original-title="Edit"
                                                        >
                                                            <i
                                                                class="fa fa-edit"
                                                            ></i>
                                                        </button>
                                                    </a>
                                                        <button
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            class="btn btn-link btn-danger"
                                                            data-original-title="Remove"
                                                            id="deleteAlert"
                                                        >
                                                            <i
                                                                class="fa fa-trash"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>
                                                    <div
                                                        class="form-button-action"
                                                    >
                                                        <a href="./edit.php">
                                                        <button
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            class="btn btn-link btn-primary btn-lg"
                                                            data-original-title="Edit"
                                                        >
                                                            <i
                                                                class="fa fa-edit"
                                                            ></i>
                                                        </button>
                                                    </a>
                                                        <button
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            class="btn btn-link btn-danger"
                                                            data-original-title="Remove"
                                                            id="deleteAlert"
                                                        >
                                                            <i
                                                                class="fa fa-trash"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Brielle Williamson
                                                </td>
                                                <td>
                                                    Integration
                                                    Specialist
                                                </td>
                                                <td>New York</td>
                                                <td>
                                                    <div
                                                        class="form-button-action"
                                                    >
                                                        <a href="./edit.php">
                                                        <button
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            class="btn btn-link btn-primary btn-lg"
                                                            data-original-title="Edit"
                                                        >
                                                            <i
                                                                class="fa fa-edit"
                                                            ></i>
                                                        </button>
                                                    </a>
                                                        <button
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            class="btn btn-link btn-danger"
                                                            data-original-title="Remove"
                                                            id="deleteAlert"
                                                        >
                                                            <i
                                                                class="fa fa-trash"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>
                                                    <div
                                                        class="form-button-action"
                                                    >
                                                        <a href="./edit.php">
                                                        <button
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            class="btn btn-link btn-primary btn-lg"
                                                            data-original-title="Edit"
                                                        >
                                                            <i
                                                                class="fa fa-edit"
                                                            ></i>
                                                        </button>
                                                    </a>
                                                        <button
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            class="btn btn-link btn-danger"
                                                            data-original-title="Remove"
                                                            id="deleteAlert"
                                                        >
                                                            <i
                                                                class="fa fa-trash"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>
                                                    Integration
                                                    Specialist
                                                </td>
                                                <td>Tokyo</td>
                                                <td>
                                                    <div
                                                        class="form-button-action"
                                                    >
                                                        <a href="./edit.php">
                                                        <button
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            class="btn btn-link btn-primary btn-lg"
                                                            data-original-title="Edit"
                                                        >
                                                            <i
                                                                class="fa fa-edit"
                                                            ></i>
                                                        </button>
                                                    </a>
                                                        <button
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            class="btn btn-link btn-danger"
                                                            data-original-title="Remove"
                                                            id="deleteAlert"
                                                        >
                                                            <i
                                                                class="fa fa-trash"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>
                                                    Javascript Developer
                                                </td>
                                                <td>San Francisco</td>
                                                <td>
                                                    <div
                                                        class="form-button-action"
                                                    >
                                                        <a href="./edit.php">
                                                        <button
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            class="btn btn-link btn-primary btn-lg"
                                                            data-original-title="Edit"
                                                        >
                                                            <i
                                                                class="fa fa-edit"
                                                            ></i>
                                                        </button>
                                                    </a>
                                                        <button
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            class="btn btn-link btn-danger"
                                                            data-original-title="Remove"
                                                            id="deleteAlert"
                                                        >
                                                            <i
                                                                class="fa fa-trash"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>
                                                    Software Engineer
                                                </td>
                                                <td>Edinburgh</td>
                                                <td>
                                                    <div
                                                        class="form-button-action"
                                                    >
                                                        <a href="./edit.php">
                                                        <button
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            class="btn btn-link btn-primary btn-lg"
                                                            data-original-title="Edit"
                                                        >
                                                            <i
                                                                class="fa fa-edit"
                                                            ></i>
                                                        </button>
                                                    </a>
                                                        <button
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            class="btn btn-link btn-danger"
                                                            data-original-title="Remove"
                                                            id="deleteAlert"
                                                        >
                                                            <i
                                                                class="fa fa-trash"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include './../pages/footer.php'; ?>

<!-- <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>  -->
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> 
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script> 

<script>
    $(document).ready(function() {
        $('#add-row').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );

    //== Class definition
    var SweetAlert2Demo = function() {
        //== Demos
        var initDemos = function() {
            //== Sweetalert Demo 3
            $('#deleteAlert').click(function(e) {
                swal("Are You Sure", "You want to delete this data", {
                    icon : "warning",
                    buttons: {        			
                        confirm: {
                            className : 'btn btn-warning'
                        }
                    },
                });
            });
        };
        return {
            //== Init
            init: function() {
                initDemos();
            },
        };
    }();
    //== Class Initialization
    jQuery(document).ready(function() {
        SweetAlert2Demo.init();
    });
</script>

