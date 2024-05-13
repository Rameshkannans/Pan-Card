
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update PAN</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Link to your custom CSS file -->
    <!-- <link rel="stylesheet" type="text/css" href="../styles.css"> -->
    <link rel="stylesheet" href="../style.css">
</head>

<body style=" background-color:#e5e5e5; ">

    <div class="">
        <section class="get-in-touch p-5 bg-white border rounded-3 shadow-lg">
            <a href="../index.php"> <button class="btn btn-danger mb-5">
                    <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        viewBox="0 0 1024 1024">
                        <path
                            d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z">
                        </path>
                    </svg>
                    <span>Back</span>
                </button></a>
            <h1 class="title bg-dark">Update Pan Card</h1>
            <form class="contact-form row" action="../forms_datas.php" method="post" enctype="multipart/form-data">
                <div class="custom-file mt-2">
                    <label for="oldpan" class="exlable fs-5 mb-3">Old Pan Card Upload</label>
                    <input class="form-control form-control-lg border border-primary mb-2" id="oldpan" type="file"
                        name="update_old_pan_doc" accept=".pdf,.doc,.docx" multiple required />
                    <small class="fs-6 text-success js-input fw-bold">Only PDF, DOC, DOCX files allowed.</small>
                </div>

                <div class="form-field col-lg-12">
                    <input id="updatename" oninput="validateInput()" pattern="[a-zA-Z\s]+" class="input-text js-input"
                        name="update_call_name" type="text" required>
                    <label class="label" for="updatename">Name</label>
                </div>

                <div class="form-field col-lg-12">
                    <input type="text" id="aadharNumber" class="input-text js-input" name="update_aadharNumber"
                        ttitle="Please enter a Valid Aadhar number" maxlength="14" oninput="formatAadhar()" required>
                    <label class="label" for="aadharNumber">Aadhar Number</label>
                </div>
                <div id="messageaadhaar"></div>



                <div class="form-field col-lg-12 ">
                    <input id="mobileNumber" class="input-text js-input" name="update_mobileNumber" type="text" required
                        oninput="this.value = this.value.replace(/[^6789\d]/g, '');" pattern="[6789]\d{9}"
                        title="Please enter a 10-digit number starting with 6, 7, 8, or 9" maxlength="10">
                    <label class="label" for="mobileNumber">Mobile Number</label>
                </div>
                <div id="messagemobile"></div>


                <div class="form-field col-lg-12 ">
                    <input id="updateemail" class="input-text js-input" name="update_email" type="text" required>
                    <label class="label" for="updateemail">Email</label>
                </div>

                <div class="form-field col-lg-12">
                    <input type="checkbox" class="form-check-input border-dark mt-2" id="enableFileUploadu">
                    <label class="exlable fs-5" for="enableFileUploadu">Upload Aadhaar Card only if you are
                        willing</label>

                    <div class="custom-file " id="fileUploadContaineru" style="display: none;">

                        <label for="fileUpload" class="form-label mt-2">Upload Aadhaar</label>
                        <input type="file" class="form-control form-control-lg border border-primary mb-2"
                            id="fileUpload" name="update_AadhaarUpload" accept=".pdf,.doc,.docx" multiple>
                        <small class="fs-6 text-success js-input fw-bold">Only PDF, DOC, DOCX files allowed.</small>
                    </div>
                </div>
                <div class="form-field col-lg-12">
                    <div class="row">
                        <label for="profilePictureUpload" class="mb-3 fs-5 exlable">Upload Profile Picture</label>
                        <div class="col">
                            <div class="input-group mb-3">
                                <input name="update_profile_Picture" type="file" class="form-control form-control-lg"
                                    id="profilePictureUpload" accept="image/*" required>
                            </div>
                            <div class="border rounded-lg text-center p-3">

                                <img src="https://via.placeholder.com/140?text=IMAGE" width="20%" height="20%"
                                    class="img-fluid" id="preview" alt="Preview" />
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <label for="signatureImageUpload" class=" fs-5 mb-3 exlable">Upload Signature Image</label>
                        <div class="col">
                            <div class="input-group mb-3">
                                <input name="update_signature_Image" type="file" class="form-control form-control-lg"
                                    id="signatureImageUpload" accept="image/*" required>
                            </div>
                            <div class="border rounded-lg text-center p-3">
                                <img src="https://via.placeholder.com/140?text=IMAGE" width="20%" height="20%"
                                    class="img-fluid" id="preview1" alt="Preview" />
                            </div>
                        </div>
                    </div>
                </div>

                <h1 class="mt-5 title bg-dark" style="font-size: 2.2rem;">Correction Details</h1>
                <!-- <h1 class="mt-5 display-1">Correction Deatails</h1> -->

                <div class="my-3">
                    <input type="checkbox" class="form-check-input border-dark mt-2" id="yourNameCheckbox"
                        onchange="toggleYourNameFields()">
                    <label class="exlable fs-5" for="yourNameCheckbox">Your Name</label><br>

                    <div id="yourNameFields" style="display: none;">
                        <label for="firstName" class="form-label mt-4">First Name:</label>
                        <input type="text" oninput="validateInput('firstName')" class="form-control" id="firstName"
                            name="update_firstName"><br>

                        <label for="middleName" class="form-label">Middle Name:</label>
                        <input type="text" oninput="validateInput('middleName')" class="form-control" id="middleName"
                            name="update_middleName"><br>

                        <label for="lastName" class="form-label">Last Name:</label>
                        <input type="text" oninput="validateInput('lastName')" class="form-control" id="lastName"
                            name="update_lastName"><br>

                        <label for="yourNameDocument" class="form-label text-success">Upload Name Proof:</label>
                        <input type="file" class="form-control" id="yourNameDocument" name="update_name_doc"
                            accept=".pdf,.doc,.docx"><br>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="checkbox" class="form-check-input border-dark mt-2 " id="fatherNameCheckbox"
                        onchange="toggleFatherNameFields()">
                    <label class="exlable fs-5" for="fatherNameCheckbox">Father's Name</label><br>

                    <div id="fatherNameFields" style="display: none;">
                        <label for="fatherName" class="form-label mt-4">Father's Name:</label>
                        <input type="text" class="form-control" oninput="validateInput('fatherName')" id="fatherName"
                            name="update_fatherName"><br>

                        <label for="fatherNameDocument" class="form-label text-success">Upload Father's Name
                            Document:</label>
                        <input type="file" class="form-control" id="fatherNameDocument" name="update_father_name_doc"
                            accept=".pdf,.doc,.docx"><br>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="checkbox" class="form-check-input border-dark mt-2" id="dobCheckbox"
                        onchange="toggleDOBFields()">
                    <label class="exlable fs-5" for="dobCheckbox">Date of Birth</label><br>

                    <div id="dobFields" style="display: none;">
                        <label for="dob" class="form-label mt-4">Date of Birth:</label>
                        <input type="date" class="form-control" id="dob" name="update_dob"><br>

                        <label for="dobDocument" class="form-label text-success">Upload DOB Proof:</label>
                        <input type="file" class="form-control" id="dobDocument" accept=".pdf,.doc,.docx"
                            name="update_dob_doc"><br>
                    </div>
                </div>


                <div class="form-field col-lg-12 text-center">
                    <input class="submit-btn" name="update_pan_submit" type="submit" value="Submit">
                </div>
            </form>
        </section>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#mobileNumber').keyup(function () {
                var update_mobileNumber = $(this).val();
                $.ajax({
                    url: '../forms_datas.php',
                    type: 'post',
                    data: { update_mobileNumber: update_mobileNumber },
                    success: function (response) {
                        $('#messagemobile').html(response);
                    }
                });
            });
        });

        $(document).ready(function () {
            $('#aadharNumber').keyup(function () {
                var update_aadharNumber = $(this).val();
                $.ajax({
                    url: '../forms_datas.php',
                    type: 'post',
                    data: { update_aadharNumber: update_aadharNumber },
                    success: function (response) {
                        $('#messageaadhaar').html(response);
                    }
                });
            });
        });

        $(document).ready(function () {
            // Get file and preview image
            $("#profilePictureUpload").on('change', function () {
                var input = $(this)[0];
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#preview').attr('src', e.target.result); // Set source directly
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            });
        });

        $(document).ready(function () {
            // Get file and preview image
            $("#signatureImageUpload").on('change', function () {
                var input = $(this)[0];
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#preview1').attr('src', e.target.result); // Set source directly
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            const inputs = document.querySelectorAll('.js-input');

            inputs.forEach(input => {
                input.addEventListener('input', function () {
                    if (this.value.trim() !== '') {
                        this.classList.add('not-empty');
                    } else {
                        this.classList.remove('not-empty');
                    }
                });
            });
        });

        function formatAadhar() {
            var aadharInput = document.getElementById("aadharNumber");
            var value = aadharInput.value.replace(/\D/g, '');
            var formattedValue = '';

            for (var i = 0; i < value.length; i++) {
                if (i === 0 && (value[i] < '2' || value[i] > '9')) {
                    continue;
                }
                if (i > 0 && i % 4 === 0) {
                    formattedValue += ' ';
                }
                formattedValue += value[i];
            }
            aadharInput.value = formattedValue;
        }


        function validateInput(inputId) {
            const inputField = document.getElementById(inputId);
            const input = inputField.value;
            const regex = /^[a-zA-Z\s]*$/;
            if (!regex.test(input)) {
                inputField.value = input.replace(/[^a-zA-Z\s]/g, '');
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-a7M8NThdh8Q+qk5IQN92L/mqs5Dh5G+RTq9RZF3V9b4ktz2GXAwC1NCTK+4P2rsz"
        crossorigin="anonymous"></script>
    <!-- Link to your external JavaScript file -->
    <script src="update_pan.js"></script>

</body>

</html>