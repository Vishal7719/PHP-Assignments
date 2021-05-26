
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form View</title>
</head>

<body>
    <form action="form1.php" method="post">
        Name :- <input type="text" name="name" id="name" required><br>
        Email :- <input type="email" name="email" id="email" required><br>
        Phone No :- <input type="tel" name="phoneNo" id="phoneNo" required><br>
        Gender :- <br>
        <input type="radio" name="gender" id="male"> <label for="male">Male</label>
        <input type="radio" name="gender" id="female"> <label for="female">Female</label>
        <input type="submit" value="Submit">
    </form>
    <?php
    if (isset($_POST['name'])) {
        extract($_POST);
    ?>
        <table border="1px">
            <tr>
                <td>
                    Name
                </td>
                <td>
                    <?php echo $name; ?>

                </td>
            </tr>
            <tr>
                <td>
                    Email
                </td>
                <td>
                    <?php echo $email; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Phone Number
                </td>
                <td>
                    <?php echo $phoneNo; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Gender
                </td>
                <td>
                    <?php echo $gender; ?>
                </td>
            </tr>
        </table>
    <?php
    }
    ?>
</body>

</html>