<?php
include 'server.php';
// new pan card datas
if (isset($_POST['new_pan_submit'])) {

    $new_call_name = $_POST['new_call_name'];
    $new_aadharNumber = $_POST['new_aadharNumber'];
    $new_mobileNumber = $_POST['new_mobileNumber'];
    $new_email = $_POST['new_email'];

    $new_pan_dob = $_POST['new_pan_dob'];
    $new_choose_fm = $_POST['new_choose_fm'];

    $new_fm_profile_name = $_FILES['fm_new_profile_Picture']['name'];
    $new_fm_profile_path = $_FILES['fm_new_profile_Picture']['tmp_name'];
    $new_fm_profile_folder = "newpanimage/" . $new_fm_profile_name;
    move_uploaded_file($new_fm_profile_path, $new_fm_profile_folder);

    $new_fm_signature_name = $_FILES['fm_new_signature_Image']['name'];
    $new_fm_signature_path = $_FILES['fm_new_signature_Image']['tmp_name'];
    $new_fm_new_signature_folder = "newpanimage/" . $new_fm_signature_name;
    move_uploaded_file($new_fm_signature_path, $new_fm_new_signature_folder);

    $new_gender = $_POST['gender'];
    $new_fatherName = $_POST['new_fatherName'];

    $new_aadhaar_doc_name = $_FILES['new_AadhaarUpload']['name'];
    $new_aadhaar_doc_path = $_FILES['new_AadhaarUpload']['tmp_name'];
    $new_aadhaar_doc_folder = "newpandocx/" . $new_aadhaar_doc_name;
    move_uploaded_file($new_aadhaar_doc_path, $new_aadhaar_doc_folder);

    $new_profile_name = $_FILES['new_profile_Picture']['name'];
    $new_profile_path = $_FILES['new_profile_Picture']['tmp_name'];
    $new_profile_folder = "newpanimage/" . $new_profile_name;
    move_uploaded_file($new_profile_path, $new_profile_folder);

    $new_signature_name = $_FILES['new_signature_Image']['name'];
    $new_signature_path = $_FILES['new_signature_Image']['tmp_name'];
    $new_signature_folder = "newpanimage/" . $new_signature_name;
    move_uploaded_file($new_signature_path, $new_signature_folder);

    $querys = new Database();
    $querys->insert_new_pan_db($new_call_name, $new_aadharNumber, $new_mobileNumber, $new_email, $new_pan_dob, $new_choose_fm, $new_fm_profile_folder, $new_fm_new_signature_folder, $new_gender, $new_fatherName, $new_aadhaar_doc_folder, $new_profile_folder, $new_signature_folder);

}



// update pan card datas
if (isset($_POST['update_pan_submit'])) {

    $update_oldpan_doc_name = $_FILES['update_old_pan_doc']['name'];
    $update_oldpan_doc_path = $_FILES['update_old_pan_doc']['tmp_name'];
    $update_oldpan_doc_folder = "updatepandocx/" . $update_oldpan_doc_name;
    move_uploaded_file($update_oldpan_doc_path, $update_oldpan_doc_folder);

    $update_call_name = $_POST['update_call_name'];
    $update_aadharNumber = $_POST['update_aadharNumber'];
    $update_mobileNumber = $_POST['update_mobileNumber'];
    $update_email = $_POST['update_email'];

    $update_aadhaar_doc_name = $_FILES['update_AadhaarUpload']['name'];
    $update_aadhaar_doc_path = $_FILES['update_AadhaarUpload']['tmp_name'];
    $update_aadhaar_doc_folder = "updatepandocx/" . $update_aadhaar_doc_name;
    move_uploaded_file($update_aadhaar_doc_path, $update_aadhaar_doc_folder);

    $update_profile_name = $_FILES['update_profile_Picture']['name'];
    $update_profile_path = $_FILES['update_profile_Picture']['tmp_name'];
    $update_profile_folder = "newpanimage/" . $update_profile_name;
    move_uploaded_file($update_profile_path, $update_profile_folder);

    $update_signature_name = $_FILES['update_signature_Image']['name'];
    $update_signature_path = $_FILES['update_signature_Image']['tmp_name'];
    $update_signature_folder = "updatepanimage/" . $update_signature_name;
    move_uploaded_file($update_signature_path, $update_signature_folder);

    $update_firstName = $_POST['update_firstName'];
    $update_middleName = $_POST['update_middleName'];
    $update_lastName = $_POST['update_lastName'];

    $update_nameproof_doc_name = $_FILES['update_name_doc']['name'];
    $update_nameproof_doc_path = $_FILES['update_name_doc']['tmp_name'];
    $update_nameproof_doc_folder = "updatepandocx/" . $update_nameproof_doc_name;
    move_uploaded_file($update_nameproof_doc_path, $update_nameproof_doc_folder);

    $update_fatherName = $_POST['update_fatherName'];

    $update_fathernameproof_doc_name = $_FILES['update_father_name_doc']['name'];
    $update_fathernameproof_doc_path = $_FILES['update_father_name_doc']['tmp_name'];
    $update_fathernameproof_doc_folder = "updatepandocx/" . $update_fathernameproof_doc_name;
    move_uploaded_file($update_fathernameproof_doc_path, $update_fathernameproof_doc_folder);

    $update_dob = $_POST['update_dob'];

    $update_dobproof_doc_name = $_FILES['update_dob_doc']['name'];
    $update_dobproof_doc_path = $_FILES['update_dob_doc']['tmp_name'];
    $update_dobproof_doc_folder = "updatepandocx/" . $update_dobproof_doc_name;
    move_uploaded_file($update_dobproof_doc_path, $update_dobproof_doc_folder);

    $querys = new Database();
    $querys->insert_update_pan_db(
        $update_oldpan_doc_folder,
        $update_call_name,
        $update_aadharNumber,
        $update_mobileNumber,
        $update_email,
        $update_aadhaar_doc_folder,
        $update_profile_folder,
        $update_signature_folder,
        $update_firstName,
        $update_middleName,
        $update_lastName,
        $update_nameproof_doc_folder,
        $update_fatherName,
        $update_fathernameproof_doc_folder,
        $update_dob,
        $update_dobproof_doc_folder
    );
}

if (isset($_POST['admin_new_pan_id_submit'])) {
    $admin_new_pan_id = $_POST['admin_new_pan_id'];
    $querys = new Database();
    $querys->select_new_pan_data_id($admin_new_pan_id);
}

// Admin Register
if (isset($_POST['admin_reg_submit'])) {
    $admin_reg_name = $_POST['admin_reg_name'];
    $admin_reg_email = $_POST['admin_reg_email'];
    $admin_reg_mobile = $_POST['admin_reg_mobile'];
    $admin_reg_pass = $_POST['admin_reg_pass'];
    $admin_reg_cpass = $_POST['admin_reg_cpass'];

    $admin_reg_profile_name = $_FILES['admin_reg_profile']['name'];
    $admin_reg_profile_path = $_FILES['admin_reg_profile']['tmp_name'];
    $admin_reg_profile_folder = "admin/adminprofile/" . $admin_reg_profile_name;
    move_uploaded_file($admin_reg_profile_path, $admin_reg_profile_folder);

    $querys = new Database();
    $querys->insert_admin_reg($admin_reg_profile_folder, $admin_reg_name, $admin_reg_email, $admin_reg_mobile, $admin_reg_pass, $admin_reg_cpass);
}

// UserRegister
// if (isset($_POST['user_reg_submit'])) {
//     $user_reg_name = $_POST['user_reg_name'];
//     $user_reg_email = $_POST['user_reg_email'];
//     $user_reg_mobile = $_POST['user_reg_mobile'];
//     $querys = new Database();
//     $querys->insert_user_reg($user_reg_name, $user_reg_email, $user_reg_mobile);
// }

if (isset($_POST['enquiry_data_submit'])) {
    $enquiry_name = $_POST['enquiry_name'];
    $enquiry_email = $_POST['enquiry_email'];
    $enquiry_mobile = $_POST['enquiry_mobile'];
    $enquiry_description = $_POST['enquiry_description'];
    $querys = new Database();
    $querys->insert_enquiry($enquiry_name, $enquiry_email, $enquiry_mobile, $enquiry_description);
}


if (isset($_POST['new_mobileNumber'])) {
    $new_mobileNumber = $_POST['new_mobileNumber'];
    $querys = new Database();
    $result = $querys->check_data_exist_nmobile($new_mobileNumber);

    if ($result) {
        echo '<span style="color:red;">Mobile Data exists!</span>';
    } else {
        // echo '<span style="color:green;">Mobile Data is available.</span>';
    }
}

if (isset($_POST['new_aadharNumber'])) {
    $new_aadharNumber = $_POST['new_aadharNumber'];
    $querys = new Database();
    $result = $querys->check_data_exist_naadhaar($new_aadharNumber);

    if ($result) {
        echo '<span style="color:red;">Aadhaar Data exists!</span>';
    } else {
        // echo '<span style="color:green;">Aadhaar Data is available.</span>';
    }
}

if (isset($_POST['update_mobileNumber'])) {
    $update_mobileNumber = $_POST['update_mobileNumber'];
    $querys = new Database();
    $result = $querys->check_data_exist_umobile($update_mobileNumber);

    if ($result) {
        echo '<span style="color:red;">Mobile Data exists!</span>';
    } else {
        // echo '<span style="color:green;">Mobile Data is available.</span>';
    }
}


if (isset($_POST['update_aadharNumber'])) {
    $update_aadharNumber = $_POST['update_aadharNumber'];
    $querys = new Database();
    $result = $querys->check_data_exist_uaadhaar($update_aadharNumber);

    if ($result) {
        echo '<span style="color:red;">Aadhaar Data exists!</span>';
    } else {
        // echo '<span style="color:green;">Aadhaar Data is available.</span>';
    }
}


if (isset($_POST['delete_new_pan'])) {
    $delete_new_pan_id = $_POST['delete_new_pan_id'];
    $querys = new Database();
    $querys->moveDataToDeletedNewPan();
    $querys->deleteDataFromNewPan($delete_new_pan_id);
}

if (isset($_POST['delete_update_pan'])) {
    $delete_update_pan_id = $_POST['delete_update_pan_id'];
    $querys = new Database();
    $querys->moveDataToDeletedUpdatePan();
    $querys->deleteDataFromUpdatePan($delete_update_pan_id);
}

if (isset($_POST['status_new_pan_submit'])) {
    $new_pan_status_update_id = $_POST['new_pan_status_update_id'];
    $status_update = $_POST['status_update'];
    $querys = new Database();
    $querys->newPanStatusUpdate($new_pan_status_update_id, $status_update);
}
if (isset($_POST['status_update_pan_submit'])) {
    $update_pan_status_update_id = $_POST['update_pan_status_update_id'];
    $status_update = $_POST['status_update'];
    $querys = new Database();
    $querys->updatePanStatusUpdate($update_pan_status_update_id, $status_update);
}
?>