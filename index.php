<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGASAN 2</title>

</head>

<body>
    <h1>Register</h1>
    <form action="papar.php" method="post">
        <table>
            <tr>
                <td>Name :</td>
                <td>
                    <input type="text" size="50" name="name">
                </td>
            </tr>
            <tr>
                <td>Email :</td>
                <td>
                    <input type="text" size="30" name="email">
                </td>
            </tr>
            <tr>
                <td>Age :</td>
                <td>
                    <input type="text" size="30" name="age">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <br><button type="submit">SUBMIT</button>
                </td>
            </tr>

        </table>

        <?php
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        echo nl2br(fread($myfile, filesize("webdictionary.txt")));
        fclose($myfile);
        ?>


    </form>
</body>

</html>