<?php
include '../server.php';
session_start();
if (!isset($_SESSION['admin_reg_id'])) {
    header('Location: adminlogin.php');
    exit();
}
if (isset($_POST['admin_update_pan_id_submit'])) {
    $admin_update_pan_id = $_POST['admin_update_pan_id'];
    $db = new Database();
    $fetched_update_pan_id = $db->select_update_pan_data_id($admin_update_pan_id);

    $ad_pro = $_SESSION['admin_reg_id'];
    $admin_profile = $db->feth_admin_pro($ad_pro);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dash Board</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="all.css">
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <span style="font-weight: 1000;">ID:<span style="font-weight: 600;"
                class="ms-2"><?php echo $admin_profile['admin_reg_id']; ?></span> </span>
        <span style="font-weight: 1000;">Name:<span style="font-weight: 600;"
                class="ms-2"><?php echo $admin_profile['admin_reg_name']; ?></span> </span>
        <div class="header_img"> <img src="../<?php echo $admin_profile['admin_reg_profile']; ?>" alt="Profile Photo"
                class="img-fluid rounded-5 my-2 "> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bxs-color'></i><span class="nav_logo-name">PAN CARD</span>
                </a>
                <div class="nav_list">
                    <a href="index.php" class="nav_link"> <i class='bx bxs-dashboard'></i>
                        <span class="nav_name">Dashboard</span> </a>
                    <a href="rec_new_pan.php" class="nav_link"> <i class='bx bx-id-card'></i> <span class="nav_name">New
                            Pan</span> </a>
                    <a href="rec_update_pan.php" class="nav_link active"><i class='bx bxs-card'></i>
                        <span class="nav_name">Update Pan</span> </a>
                    <!-- <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span
                            class="nav_name">Bookmark</span></a> -->
                     <a href="enquiries_details.php" class="nav_link"> <i class='bx bx-comment-dots' style="font-size: 20px;"></i><span
                            class="nav_name">Enquiries</span> </a>
                    <a href="admin.php" class="nav_link"> <i style="font-size: 28px;" class='bx bx-user-check '></i> <span
                            class="nav_name">ADMIN</span> </a>
                </div>
            </div> <a href="adminlogout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">SignOut</span> </a>
        </nav>
    </div>

    <div class="container-fluid" style="margin-top: 100px;">
        <span class=""><a href="rec_update_pan.php" class="btn btn-danger btn-sm rounded-0"><i
                    class='bx bx-arrow-back'></i>
                BACK</a></span>
        <div class="card" style="border-radius: 0%;">
            <div class="card-header p-4" style="background-color: bisque;">
                <span style="font-weight: 900;">Candidate Details (New Pan card) </span>
            </div>
            <div class="card-body p-3 " style="background-color: gainsboro;">
                <div class="row">
                    <div class="col-md-12 col-sm-12 p-2 bgs bg-opacity-50">
                        <div class="row p-2">
                            <div class="col-md-2 p-2 d-flex align-items-center justify-content-center">
                                <img src="../<?php echo $fetched_update_pan_id['update_profile_picture']; ?>"
                                    alt="Profile Photo" class="img-fluid rounded-1 my-2 "
                                    style="width: 100px; height: 100px;">
                                <a class="btn btn-outline-warning bg-sm mx-2 my-2"
                                    href="../<?php echo $fetched_update_pan_id['update_profile_picture']; ?>"
                                    download><i class='bx bx-download'></i></a>
                                <a class="btn btn-outline-success bg-sm"
                                    href="../<?php echo $fetched_update_pan_id['update_profile_picture']; ?>"
                                    target="_blank"><i class='bx bxs-image-alt'></i></a>
                            </div>
                            <div class="col-md-2 p-2 d-flex align-items-center justify-content-center">
                                <span class="me-2"
                                    style="font-weight: 900;">ID:</span><span><?php echo $fetched_update_pan_id['update_pan_id']; ?></span>
                            </div>
                            <div class="col-md-3 p-2 d-flex align-items-center justify-content-center">
                                <span class="me-2"
                                    style="font-weight: 900;">Name:</span><span><?php echo $fetched_update_pan_id['update_call_name']; ?></span>
                            </div>
                            <div class="col-md-3 p-2 d-flex align-items-center justify-content-center">
                                <span class="me-2"
                                    style="font-weight: 900;">Email:</span><span><?php echo $fetched_update_pan_id['update_email']; ?></span>
                            </div>
                            <div class="col-md-2 p-2 d-flex align-items-center justify-content-center">
                                <span class="me-2"
                                    style="font-weight: 900;">Mobile:</span><span><?php echo $fetched_update_pan_id['update_mobile_number']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12 col-sm-12 p-2 bgs bg-opacity-50">
                        <div class="row p-2">
                            <div class="col-md-2 p-2 d-flex align-items-center justify-content-center">
                                <img src="../<?php echo $fetched_update_pan_id['update_signature']; ?>"
                                    alt="Profile Photo" class="img-fluid my-2 rounded-2"
                                    style="width: 100px; height: 100px;">
                                <a class="btn btn-outline-warning mx-2 my-2"
                                    href="../<?php echo $fetched_update_pan_id['update_signature']; ?>" download><i
                                        class='bx bx-download'></i></a>
                                <a class="btn btn-outline-success"
                                    href="../<?php echo $fetched_update_pan_id['update_signature']; ?>"
                                    target="_blank"><i class='bx bxs-image-alt'></i></a>
                            </div>
                            <div class="col-md-2 d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary" style="border-radius: 0%;"
                                    href="../<?php echo $fetched_update_pan_id['update_oldpan_doc']; ?>"
                                    target="_blank">
                                    Old PAN <i class='bx bx-download'></i></a>
                            </div>
                            <div class="col-md-3 p-5 d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary" style="border-radius: 0%;"
                                    href="../<?php echo $fetched_update_pan_id['update_aadhaar_doc']; ?>"
                                    target="_blank">
                                    Aadhaar <i class='bx bx-download'></i></a>
                            </div>
                            <div class="col-md-5 shadow d-flex align-items-center justify-content-center">
                                <div class="row justify-content-center">
                                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                                        <a class="btn btn-outline-primary" style="border-radius: 0%;"
                                            href="../<?php echo $fetched_update_pan_id['update_name_proof']; ?>"
                                            target="_blank">
                                            Name Proof <i class='bx bx-download'></i></a>
                                    </div>
                                    <div class="col-md-7 p-4 ">
                                        <div class="row">
                                            <div class="col-md-12 ps-5 my-1">
                                                <span style="font-weight: 900;">F.
                                                    Name:
                                                </span><span><?php echo $fetched_update_pan_id['update_first_name']; ?></span>
                                            </div>
                                            <div class="col-md-12 ps-5 my-1">
                                                <span style="font-weight: 900;">M.
                                                    Name:
                                                </span><span><?php echo $fetched_update_pan_id['update_middle_name']; ?></span>
                                            </div>
                                            <div class="col-md-12 ps-5 my-1">
                                                <span style="font-weight: 900;">L.
                                                    Name:
                                                </span><span><?php echo $fetched_update_pan_id['update_lastname']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="row justify-content-center">
                    <div class="col-md-12 col-sm-12 bgs p-2 bg-opacity-50">
                        <div class="row p-2 shadow">
                            <div class="col-md-3 p-5 d-flex align-items-center justify-content-center">
                                <span style="font-weight: 900;" class="me-2">
                                    Aadhaar NO.:
                                </span><span><?php echo $fetched_update_pan_id['update_aadhaar_number']; ?></span>
                            </div>
                            <div class="col-md-6 p-5 d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary" style="border-radius: 0%;"
                                    href="../<?php echo $fetched_update_pan_id['update_fathername_proof']; ?>"
                                    target="_blank">
                                    Father Name Proof <i class='bx bx-download'></i></a>
                            </div>
                            <div class="col-md-3 p-5 d-flex align-items-center justify-content-center">
                                <span style="font-weight: 900;" class="me-2">
                                    Father Name:
                                </span><span><?php echo $fetched_update_pan_id['update_father_name']; ?></span>
                            </div>

                        </div>
                    </div>
                </div>

                

                <div class="row justify-content-center">
                    <div class="col-md-12 col-sm-12 bgs p-2 bg-opacity-50">
                        <div class="row p-2 shadow">
                            <div class="col-md-6 p-5 d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary" style="border-radius: 0%;"
                                    href="../<?php echo $fetched_update_pan_id['update_dob_proof']; ?>" target="_blank">
                                    DOB Proof <i class='bx bx-download'></i></a>
                            </div>
                            <div class="col-md-6 p-5 d-flex align-items-center justify-content-center">
                                <span style="font-weight: 900;" class="me-2">
                                    DOB:
                                </span><span><?php echo $fetched_update_pan_id['update_dob']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <hr />

                <!-- <div class="row">
                    <div class="col-md-12 col-sm-12 p-5 bg-opacity-50 text-center bgs">
                        <button class="btn btn-danger">Download Candidate Details (PDF)</button>
                    </div>
                </div> -->
            </div>
        </div>
    </div>


    <div class="table-responsive">
        <table class="table table-warning table-hover" id="example" style="display: none;">
            <thead>
                <tr>
                    <th>ID</th>
                    <!-- <th>Old Pan</th> -->
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Aadhar Number</th>
                    <th>Profile Picture</th>
                    <th>Sign Picture</th>
                    <!-- <th>Name Proof</th> -->
                    <th>F. Name</th>
                    <th>M. Name</th>
                    <th>L. Name</th>
                    <!-- <th>Father Proof</th> -->
                    <th>Father Name</th>
                    <!-- <th>DOB Proof </th> -->
                    <th> DOB</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $fetched_update_pan_id['update_pan_id']; ?></td>
                    <!-- <td><a class="btn btn-outline-primary" style="border-radius: 0%;"
                            href="../<?php echo $fetched_update_pan_id['update_oldpan_doc']; ?>" target="_blank">
                            Old Pan card <i class='bx bx-download'></i></a></td> -->
                    <td><?php echo $fetched_update_pan_id['update_call_name']; ?></td>
                    <td><?php echo $fetched_update_pan_id['update_email']; ?></td>
                    <td><?php echo $fetched_update_pan_id['update_mobile_number']; ?></td>
                    <td><?php echo $fetched_update_pan_id['update_aadhaar_number']; ?></td>
                    <td><img src="../<?php echo $fetched_update_pan_id['update_profile_picture']; ?>"
                            alt="Profile Photo" class="img-fluid my-2 rounded-2"
                            style="max-width: 100px; max-height: 100px;"></td>
                    <td><img src="../<?php echo $fetched_update_pan_id['update_signature']; ?>" alt="Sign Photo"
                            class="img-fluid my-2 rounded-2" style="max-width: 100px; max-height: 100px;"></td>

                    <!-- <td><a class="btn btn-outline-primary" style="border-radius: 0%;"
                            href="../<?php echo $fetched_update_pan_id['update_name_proof']; ?>" target="_blank">
                            Name Proof <i class='bx bx-download'></i></a></td> -->
                    <td> <span style="font-weight: 900;">F.
                            Name:
                        </span><span><?php echo $fetched_update_pan_id['update_first_name']; ?></span></td>
                    <td><span style="font-weight: 900;">M.
                            Name:
                        </span><span><?php echo $fetched_update_pan_id['update_middle_name']; ?></span></td>
                    <td><span style="font-weight: 900;">L.
                            Name:
                        </span><span><?php echo $fetched_update_pan_id['update_lastname']; ?></span></td>

                    <!-- <td><a class="btn btn-outline-primary" style="border-radius: 0%;"
                            href="../<?php echo $fetched_update_pan_id['update_fathername_proof']; ?>" target="_blank">
                            Father Name Proof <i class='bx bx-download'></i></a></td> -->
                    <td><span style="font-weight: 900;" class="me-2">
                            Father Name:
                        </span><span><?php echo $fetched_update_pan_id['update_father_name']; ?></span></td>
                    <!-- <td><a class="btn btn-outline-primary" style="border-radius: 0%;"
                            href="../<?php echo $fetched_update_pan_id['update_dob_proof']; ?>" target="_blank">
                            DOB Proof <i class='bx bx-download'></i></a></td> -->
                    <td><span style="font-weight: 900;" class="me-2">
                            DOB:
                        </span><span><?php echo $fetched_update_pan_id['update_dob']; ?></span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            document.title = 'Candidate details';
            $('#example').DataTable({
                "dom": '<"dt-buttons my-5"B>',
                "paging": false,
                "buttons": [
                    {
                        extend: 'print',
                        className: 'btn btn-outline-danger rounded-0',
                        text: 'Candidate Details <br/> <i class="bx bxs-file-pdf" style="font-size: 50px;"></i>'
                    }
                ]
            });
        });
    </script>



    <script>
        document.addEventListener("DOMContentLoaded", function (event) {
            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId)
                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
                        nav.classList.toggle('show')
                        toggle.classList.toggle('bx-x')
                        bodypd.classList.toggle('body-pd')
                        headerpd.classList.toggle('body-pd')
                    })
                }
            }
            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')
            const linkColor = document.querySelectorAll('.nav_link')
            function colorLink() {
                if (linkColor) {
                    linkColor.forEach(l => l.classList.remove('active'))
                    this.classList.add('active')
                }
            }
            linkColor.forEach(l => l.addEventListener('click', colorLink))
        });
    </script>

</body>

</html>