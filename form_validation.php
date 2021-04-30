<center><b>1. Form and Validation<b></center>

<?php

if (isset($_POST['name'])) {
    extract($_POST);
    if ($name == "" || $email == "") {
?>
        <script>
            alert('Name or email not Provided');
            document.location = 'form_validation.php';
        </script>
<?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form and Validation</title>
</head>

<body>
    <div style="padding: 20px; border:ridge;">
        <h2>
            Absolute Class Registration
        </h2>
        <span style="color: red;">* required field</span>
        <form action="form_validation.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="name">
                            Name
                        </label>
                    </td>
                    <td>
                        <input type="text" name="name" id="name" required><span style="color:red;">*</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">
                            Email
                        </label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" required><span style="color:red;">*</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="time">
                            Time:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="time" id="time">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="class">
                            Class
                        </label>
                    </td>
                    <td>
                        <textarea name="class" id="class" cols="30" rows="5"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gender">
                            Gender
                        </label>
                        <input type="radio" name="gender" id="male"><label for="male">Male</label>
                        <input type="radio" name="gender" id="female"><label for="female">Female</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Submit" id="submit">
                    </td>
                </tr>
            </table>
            <?php if (isset($_POST['name'])) {
            ?>
                <div>
                    <h1>
                        Your given Values are:-
                    </h1>
                    <table>
                        <tr>
                            <td> Name:</td>
                            <td><?php echo $name; ?><br></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><?php echo $email; ?><br></td>
                        </tr>
                        <tr>
                            <td> Time:</td>
                            <td><?php echo $time; ?><br></td>
                        </tr>
                        <tr>
                            <td>Class:</td>
                            <td><?php echo nl2br($class); ?><br></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $gender; ?><br></td>
                        </tr>
                    </table>
                </div>
            <?php
            } 
            ?>
        </form>
    </div>
</body>

</html>