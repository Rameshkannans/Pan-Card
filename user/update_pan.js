document.getElementById('enableFileUploadu').addEventListener('change', function () {
    var fileUploadContainer = document.getElementById('fileUploadContaineru');
    fileUploadContainer.style.display = this.checked ? 'block' : 'none';
});

function toggleYourNameFields() {
    var yourNameFields = document.getElementById('yourNameFields');
    yourNameFields.style.display = document.getElementById('yourNameCheckbox').checked ? 'block' : 'none';
}

function toggleFatherNameFields() {
    var fatherNameFields = document.getElementById('fatherNameFields');
    fatherNameFields.style.display = document.getElementById('fatherNameCheckbox').checked ? 'block' : 'none';
}

function toggleAddressFields() {
    var addressFields = document.getElementById('addressFields');
    addressFields.style.display = document.getElementById('addressCheckbox').checked ? 'block' : 'none';
}

function toggleDOBFields() {
    var dobFields = document.getElementById('dobFields');
    dobFields.style.display = document.getElementById('dobCheckbox').checked ? 'block' : 'none';
}