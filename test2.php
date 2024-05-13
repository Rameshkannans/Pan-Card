<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $messageExists = "exist";
    ?>
    <form action="" method="post" id="myForm">
        <input type="text" name="input_data" id="inputData">
        <div id="messageaadhaar"></div>
        <input type="checkbox" id="toggleCheckbox"> Enable/Disable
        <input type="text" value="submit" id="submitButton" name="old" <?php echo getMessageStatus() ? 'name="old"' : 'name="new"'; ?> >
    </form>

    <?php
    function getMessageStatus()
    {
        global $messageExists;

        if ($messageExists === "exist") {
            return true;
        } else {
            return false;
        }
    }
    ?>

    <script>
        document.getElementById("toggleCheckbox").addEventListener("change", function() {
            var button = document.getElementById("submitButton");
            button.disabled = !this.checked;
            if (!this.checked) {
                button.setAttribute("name", "new");
            } else {
                <?php if ($messageExists === "exist"): ?>
                    button.setAttribute("name", "new");
                <?php elseif ($messageExists === "available"): ?>
                    button.setAttribute("name", "old");
                <?php endif; ?>
            }
        });
    </script>
</body>

</html>



