<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Register Form</h1>
    <form action="" method="get">
        <table>
            <tr>
                <td>Khmer Name:</td>
                <td><input type="text" name="name_kh"></td>
            </tr>
            <tr>
                <td>English Name:</td>
                <td><input type="text" name="name_en"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <label for="male">
                        <input type="radio" id="male">Male
                    </label>
                    <label for="female">
                        <input type="radio" id="female">Female
                    </label>
                </td>
            </tr>
            <tr>
                <td>Major:</td>
                <td>
                    <select name="" id="">
                        <option value="CS">CS</option>
                        <option value="TN">TN</option>
                        <option value="DB">DB</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Career:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>CV:</td>
                <td>
                    <label for="web-dev">
                        <input type="file"> 
                    </label>
                </td>
            </tr>
            <tr>
                <td>Description:</td>
                <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
            </tr>

            <tr>
                <td><button>Register</button></td>
            </tr>
        </table>

    </form>
</body>
</html>