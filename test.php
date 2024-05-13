<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <!-- DataTables Buttons CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css">


    <style>
        body {
            margin: 2em;
        }

        td:last-child {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="alert alert-danger" role="alert"><strong>Info!</strong> Add row and Delete row are working. Edit row
        displays modal with row cells information.</div>
    <a class="btn btn-success" style="float:left;margin-right:20px;" href="https://codepen.io/collection/XKgNLN/"
        target="_blank">Other examples on Codepen</a>
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Order</th>
                <th>Description</th>
                <th>Deadline</th>
                <th>Status</th>
                <th>Amount</th>
                <th style="text-align:center;width:100px;">Add row <button type="button" data-func="dt-add"
                        class="btn btn-success btn-xs dt-add">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </button></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Alphabet puzzle</td>
                <td>2016/01/15</td>
                <td>Done</td>
                <td>1000</td>
                <td>
                    <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Layout for poster</td>
                <td>2016/01/31</td>
                <td>Planned</td>
                <td>1834</td>
                <td>
                    <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Image creation</td>
                <td>2016/01/23</td>
                <td>To Do</td>
                <td>1500</td>
                <td>
                    <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Create font</td>
                <td>2016/02/26</td>
                <td>Done</td>
                <td>1200</td>
                <td>
                    <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Sticker production</td>
                <td>2016/02/18</td>
                <td>Planned</td>
                <td>2100</td>
                <td>
                    <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Glossy poster</td>
                <td>2016/03/17</td>
                <td>To Do</td>
                <td>899</td>
                <td>
                    <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>Beer label</td>
                <td>2016/05/28</td>
                <td>Confirmed</td>
                <td>2499</td>
                <td>
                    <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                </td>
            </tr>

        </tbody>
    </table>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Row information</h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <!-- DataTables Buttons JavaScript -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <!-- DataTables Buttons Column Visibility Extension JavaScript -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js"></script>
    <!-- DataTables Buttons HTML5 Export Extension JavaScript -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <!-- DataTables Buttons Print Extension JavaScript -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- DataTables Bootstrap JavaScript -->
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <!-- DataTables Buttons Bootstrap Extension JavaScript -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js"></script>
    <!-- JSZip JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <!-- pdfmake JavaScript -->
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            //Only needed for the filename of export files.
            //Normally set in the title tag of your page.
            document.title = 'Simple DataTable';
            // DataTable initialisation
            $('#example').DataTable(
                {
                    "dom": '<"dt-buttons"Bf><"clear">lirtp',
                    "paging": false,
                    "autoWidth": true,
                    "columnDefs": [
                        { "orderable": false, "targets": 5 }
                    ],
                    "buttons": [
                        'colvis',
                        'copyHtml5',
                        'csvHtml5',
                        'excelHtml5',
                        'pdfHtml5',
                        'print'
                    ]
                }
            );
            //Add row button
            $('.dt-add').each(function () {
                $(this).on('click', function (evt) {
                    //Create some data and insert it
                    var rowData = [];
                    var table = $('#example').DataTable();
                    //Store next row number in array
                    var info = table.page.info();
                    rowData.push(info.recordsTotal + 1);
                    //Some description
                    rowData.push('New Order');
                    //Random date
                    var date1 = new Date(2016,01,01);
                    var date2 = new Date(2018, 12, 31);
                    var rndDate = new Date(+date1 + Math.random() * (date2 - date1));//.toLocaleDateString();
                    rowData.push(rndDate.getFullYear() + '/' + (rndDate.getMonth() + 1) + '/' + rndDate.getDate());
                    //Status column
                    rowData.push('NEW');
                    //Amount column
                    rowData.push(Math.floor(Math.random() * 2000) + 1);
                    //Inserting the buttons ???
                    rowData.push('<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button><button type="button" class="btn btn-danger btn-xs dt-delete"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>');
                    //Looping over columns is possible
                    //var colCount = table.columns()[0].length;
                    //for(var i=0; i < colCount; i++){			}

                    //INSERT THE ROW
                    table.row.add(rowData).draw(false);
                    //REMOVE EDIT AND DELETE EVENTS FROM ALL BUTTONS
                    $('.dt-edit').off('click');
                    $('.dt-delete').off('click');
                    //CREATE NEW CLICK EVENTS
                    $('.dt-edit').each(function () {
                        $(this).on('click', function (evt) {
                            $this = $(this);
                            var dtRow = $this.parents('tr');
                            $('div.modal-body').innerHTML = '';
                            $('div.modal-body').append('Row index: ' + dtRow[0].rowIndex + '<br/>');
                            $('div.modal-body').append('Number of columns: ' + dtRow[0].cells.length + '<br/>');
                            for (var i = 0; i < dtRow[0].cells.length; i++) {
                                $('div.modal-body').append('Cell (column, row) ' + dtRow[0].cells[i]._DT_CellIndex.column + ', ' + dtRow[0].cells[i]._DT_CellIndex.row + ' => innerHTML : ' + dtRow[0].cells[i].innerHTML + '<br/>');
                            }
                            $('#myModal').modal('show');
                        });
                    });
                    $('.dt-delete').each(function () {
                        $(this).on('click', function (evt) {
                            $this = $(this);
                            var dtRow = $this.parents('tr');
                            if (confirm("Are you sure to delete this row?")) {
                                var table = $('#example').DataTable();
                                table.row(dtRow[0].rowIndex - 1).remove().draw(false);
                            }
                        });
                    });
                });
            });
            //Edit row buttons
            $('.dt-edit').each(function () {
                $(this).on('click', function (evt) {
                    $this = $(this);
                    var dtRow = $this.parents('tr');
                    $('div.modal-body').innerHTML = '';
                    $('div.modal-body').append('Row index: ' + dtRow[0].rowIndex + '<br/>');
                    $('div.modal-body').append('Number of columns: ' + dtRow[0].cells.length + '<br/>');
                    for (var i = 0; i < dtRow[0].cells.length; i++) {
                        $('div.modal-body').append('Cell (column, row) ' + dtRow[0].cells[i]._DT_CellIndex.column + ', ' + dtRow[0].cells[i]._DT_CellIndex.row + ' => innerHTML : ' + dtRow[0].cells[i].innerHTML + '<br/>');
                    }
                    $('#myModal').modal('show');
                });
            });
            //Delete buttons
            $('.dt-delete').each(function () {
                $(this).on('click', function (evt) {
                    $this = $(this);
                    var dtRow = $this.parents('tr');
                    if (confirm("Are you sure to delete this row?")) {
                        var table = $('#example').DataTable();
                        table.row(dtRow[0].rowIndex - 1).remove().draw(false);
                    }
                });
            });
            $('#myModal').on('hidden.bs.modal', function (evt) {
                $('.modal .modal-body').empty();
            });
        });
    </script>
</body>

</html>














Your form
<input type="text" id="newname" oninput="validateInput('newname')" pattern="[a-zA-Z\s]+" class="input-text js-input" name="new_call_name" required>
<label class="label" for="newname">Name</label>
<div id="message"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#newname').keyup(function () {
            var new_call_name = $(this).val();
            $.ajax({
                url: 'check_data.php', // PHP script to check data
                type: 'post',
                data: { new_call_name: new_call_name },
                success: function (response) {
                    $('#message').html(response); // Display response message
                }
            });
        });
    });
</script>






<?php
class Database {
    private $conn;

    // Constructor to connect to database
    public function __construct(){
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "your_database";

        $this->conn = new mysqli($servername, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // Function to check if data exists in the database
    public function check_data_exist($new_call_name){
        $new_call_name = $this->conn->real_escape_string($new_call_name); // Prevent SQL injection
        $sql = "SELECT * FROM new_pan WHERE new_call_name = '$new_call_name'";
        $result = $this->conn->query($sql);

        if ($result && $result->num_rows > 0) {
            return true; // Data exists
        } else {
            return false; // Data is available
        }
    }
}
?>





<?php
include 'server.php';

if(isset($_POST['new_call_name'])){
    $new_call_name = $_POST['new_call_name'];
    $querys = new Database();
    $result = $querys->check_data_exist($new_call_name);

    if($result){
        echo '<span style="color:red;">Data exists!</span>';
    } else {
        echo '<span style="color:green;">Data is available.</span>';
    }
}
?>
