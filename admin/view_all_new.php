<?php
session_start();
if (!isset($_SESSION['admin_reg_id'])) {
    header('Location: adminlogin.php');
    exit();
}
include '../server.php';
if (isset($_POST['admin_new_pan_id_submit'])) {
    $admin_new_pan_id = $_POST['admin_new_pan_id'];
    $_SESSION['$admin_new_pan_id'] = $admin_new_pan_id;
    $admin_new_pan_ids = $_SESSION['$admin_new_pan_id'];

    $db = new Database();
    $fetched_new_pan_id = $db->select_new_pan_data_id($admin_new_pan_ids);

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
            <div> <a href="#" class="nav_logo"><i class='bx bxs-color'></i><span class="nav_logo-name">PAN CARD</span>
                </a>
                <div class="nav_list">
                    <a href="index.php" class="nav_link "> <i class='bx bxs-dashboard'></i>
                        <span class="nav_name">Dashboard</span> </a>
                    <a href="rec_new_pan.php" class="nav_link active"> <i class='bx bx-id-card'></i> <span
                            class="nav_name">New Pan</span> </a>
                    <a href="rec_update_pan.php" class="nav_link"> <i class='bx bxs-card'></i>
                        <span class="nav_name">Update Pan</span> </a>
                    <!-- <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span
                            class="nav_name">Bookmark</span></a> -->
                    <a href="enquiries_details.php" class="nav_link"> <i class='bx bx-comment-dots'
                            style="font-size: 20px;"></i><span class="nav_name">Enquiries</span> </a>
                    <a href="admin.php" class="nav_link"> <i style="font-size: 28px;"
                            class='bx bx-user-check '></i><span class="nav_name">ADMIN</span> </a>
                </div>
            </div> <a href="adminlogout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">SignOut</span> </a>
        </nav>
    </div>

    <div class="container-fluid" style="margin-top: 100px;">
        <span class=""><a href="rec_new_pan.php" class="btn btn-danger btn-sm rounded-0"><i
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
                                <img src="../<?php echo $fetched_new_pan_id['new_profile_picture']; ?>"
                                    alt="Profile Photo" class="img-fluid rounded-1 my-2 "
                                    style="width: 100px; height: 100px;">
                                <a class="btn btn-outline-warning bg-sm my-2 mx-2"
                                    href="../<?php echo $fetched_new_pan_id['new_profile_picture']; ?>" download><i
                                        class='bx bx-download'></i></a>
                                <a class="btn btn-outline-success bg-sm"
                                    href="../<?php echo $fetched_new_pan_id['new_profile_picture']; ?>"
                                    target="_blank"><i class='bx bxs-image-alt'></i></a>
                            </div>
                            <div class="col-md-2 p-2 d-flex align-items-center justify-content-center">
                                <span class="me-2"
                                    style="font-weight: 900;">ID:</span><span><?php echo $fetched_new_pan_id['new_pan_id']; ?></span>
                            </div>
                            <div class="col-md-3 p-2 d-flex align-items-center justify-content-center">
                                <span class="me-2"
                                    style="font-weight: 900;">Name:</span><span><?php echo $fetched_new_pan_id['new_call_name']; ?></span>
                            </div>
                            <div class="col-md-3 p-2 d-flex align-items-center justify-content-center">
                                <span class="me-2"
                                    style="font-weight: 900;">Email:</span><span><?php echo $fetched_new_pan_id['new_email']; ?></span>
                            </div>
                            <div class="col-md-2 p-2 d-flex align-items-center justify-content-center">
                                <span class="me-2"
                                    style="font-weight: 900;">Mobile:</span><span><?php echo $fetched_new_pan_id['new_mobile_number']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12 col-sm-12 p-2 bgs bg-opacity-50">
                        <div class="row p-2 ">
                            <div class="col-md-2 p-2 d-flex align-items-center justify-content-center">
                                <img src="../<?php echo $fetched_new_pan_id['new_signature']; ?>" alt="Profile Photo"
                                    class="img-fluid my-2 rounded-2" style="width: 100px; height: 100px;">
                                <a class="btn btn-outline-warning my-2 mx-2"
                                    href="../<?php echo $fetched_new_pan_id['new_signature']; ?>" download><i
                                        class='bx bx-download'></i></a>
                                <a class="btn btn-outline-success"
                                    href="../<?php echo $fetched_new_pan_id['new_signature']; ?>" target="_blank"><i
                                        class='bx bxs-image-alt'></i></a>
                            </div>
                            <div class="col-md-2 p-2 d-flex align-items-center justify-content-center">
                                <span class="me-2"
                                    style="font-weight: 900;">Gender:</span><span><?php echo $fetched_new_pan_id['new_gender']; ?></span>
                            </div>
                            <div class="col-md-3 p-2 d-flex align-items-center justify-content-center">
                                <span class="me-2" style="font-weight: 900;">Father
                                    name:</span><span><?php echo $fetched_new_pan_id['new_pan_father']; ?></span>
                            </div>
                            <div class="col-md-3 p-2 d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary" style="border-radius: 0%;"
                                    href="../<?php echo $fetched_new_pan_id['new_aadhaar_doc']; ?>" target="_blank">
                                    Aadhaar <i class='bx bx-download'></i></a>
                            </div>
                            <div class="col-md-2 p-2 d-flex align-items-center justify-content-center">
                                <span class="me-2"
                                    style="font-weight: 900;">Aadhaar:</span><span><?php echo $fetched_new_pan_id['new_aadhaar_number']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />

                <div class="row">
                    <div
                        class="col-sm-12 col-md-3 p-5 bgs bg-opacity-50 d-flex align-items-center justify-content-center">
                        <span class="me-2" style="font-weight: 900;">Date of
                            Birth:</span><span><?php echo $fetched_new_pan_id['new_pan_dob']; ?></span>
                    </div>
                    <?php if (isset($fetched_new_pan_id['new_parent']) && !empty($fetched_new_pan_id['new_parent'])) { ?>
                        <div class="col-sm-12 col-md-9 bgs bg-opacity-50">

                            <div class="row">
                                <div class="col-md-4 p-2 d-flex align-items-center justify-content-center">
                                    <span class="me-2" style="font-weight: 900;">Parent Photo And
                                        Signature:</span><span><?php echo $fetched_new_pan_id['new_parent']; ?></span>
                                </div>
                                <div class="col-md-4 p-2 d-flex align-items-center justify-content-center">
                                    <img src="../<?php echo $fetched_new_pan_id['new_fm_profile_picture']; ?>"
                                        alt="Profile Photo" class="img-fluid rounded-1 my-2 "
                                        style="width: 100px; height: 100px;">
                                    <a class="btn btn-outline-warning bg-sm my-2 mx-2"
                                        href="../<?php echo $fetched_new_pan_id['new_fm_profile_picture']; ?>" download><i
                                            class='bx bx-download'></i></a>
                                    <a class="btn btn-outline-success bg-sm "
                                        href="../<?php echo $fetched_new_pan_id['new_fm_profile_picture']; ?>"
                                        target="_blank"><i class='bx bxs-image-alt'></i></a>
                                </div>
                                <div class="col-md-4 p-2 d-flex align-items-center justify-content-center">
                                    <img src="../<?php echo $fetched_new_pan_id['new_fm_signature_picture']; ?>"
                                        alt="Profile Photo" class="img-fluid rounded-1 my-2 "
                                        style="width: 100px; height: 100px;">
                                    <a class="btn btn-outline-warning bg-sm my-2 mx-2"
                                        href="../<?php echo $fetched_new_pan_id['new_fm_signature_picture']; ?>" download><i
                                            class='bx bx-download'></i></a>
                                    <a class="btn btn-outline-success bg-sm"
                                        href="../<?php echo $fetched_new_pan_id['new_fm_signature_picture']; ?>"
                                        target="_blank"><i class='bx bxs-image-alt'></i></a>
                                </div>
                            </div>

                        </div>
                    <?php } ?>
                </div>

                <!-- <div class="row">
                        <div class="col-md-12 col-sm-12 p-5 bg-opacity-50 text-center bgs">
                            <form action="report.php" method="post" target="_blank" enctype="multipart/form-data">
                                <input type="hidden" name="pdf_new_pan_id"
                                    value="<?php echo $fetched_new_pan_id['new_pan_id']; ?>">
                                <input type="hidden" name="pdf_new_pan_name"
                                    value="<?php echo $fetched_new_pan_id['new_call_name']; ?>">
                                <input type="hidden" name="pdf_new_pan_email"
                                    value="<?php echo $fetched_new_pan_id['new_email']; ?>">
                                <input type="hidden" name="pdf_new_pan_mobnumber"
                                    value="<?php echo $fetched_new_pan_id['new_mobile_number']; ?>">
                                <input type="hidden" name="pdf_new_pan_gender"
                                    value="<?php echo $fetched_new_pan_id['new_gender']; ?>">
                                <input type="hidden" name="pdf_new_pan_father"
                                    value="<?php echo $fetched_new_pan_id['new_pan_father']; ?>">
                                <input type="hidden" name="pdf_new_pan_aadhaarno"
                                    value="<?php echo $fetched_new_pan_id['new_aadhaar_number']; ?>">
                                <input type="hidden" name="pdf_new_pan_picture"
                                    value="<?php echo $fetched_new_pan_id['new_profile_picture']; ?>">
                                <input type="hidden" name="pdf_new_pan_sign"
                                    value="<?php echo $fetched_new_pan_id['new_signature']; ?>">
                                <input type="submit" name="pdf_new_pan" class="btn btn-success" value="submit">
                            </form>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
    <table class="table table-warning table-hover" id="example" style="display: none;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Father Name</th>
                <th>Aadhar Number</th>
                <th>Profile Picture</th>
                <th>Sign Picture</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $fetched_new_pan_id['new_pan_id']; ?></td>
                <td><?php echo $fetched_new_pan_id['new_call_name']; ?></td>
                <td><?php echo $fetched_new_pan_id['new_email']; ?></td>
                <td><?php echo $fetched_new_pan_id['new_mobile_number']; ?></td>
                <td><?php echo $fetched_new_pan_id['new_gender']; ?></td>
                <td><?php echo $fetched_new_pan_id['new_pan_dob']; ?></td>
                <td><?php echo $fetched_new_pan_id['new_pan_father']; ?></td>
                <td><?php echo $fetched_new_pan_id['new_aadhaar_number']; ?></td>
                <td><img src="../<?php echo $fetched_new_pan_id['new_profile_picture']; ?>" alt="Profile Photo"
                        class="img-fluid my-2 rounded-2" style="max-width: 100px; max-height: 100px;"></td>
                <td><img src="../<?php echo $fetched_new_pan_id['new_signature']; ?>" alt="Sign Photo"
                        class="img-fluid my-2 rounded-2" style="max-width: 100px; max-height: 100px;"></td>
            </tr>
        </tbody>
    </table>

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