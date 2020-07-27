<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang dang ky</title>
</head>
<body>
    <h1>Trang dang ky thanh vien</h1>
    <form action="xuly.php" method="post">
        <table>
            <tr>
                <td>Ten dang nhap:</td>
                <td>
                    <input type="text" name="txtUsername" size="50" />
                </td>
            </tr>
            <tr>
                <td>Mat khau:</td>
                <td>
                    <input type="password" name="txtPassword" size=50 />
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>
                    <input type="text" name="txtEmail" size="50" />
                </td>
            </tr>
            <tr>
                <td>Ho va ten:</td>
                <td>
                    <input type="text" name="txtFullname" size="50" />
                </td>
            </tr>
            <tr>
                <td>Ngay sinh</td>
                <td>
                    <input type="text" name="txtBirthday" size="50">
                </td>
            </tr>
            <tr>
                <td>Gioi tinh</td>
                <td>
                    <select name="txtSex" id="">
                        <option value=""></option>
                        <option value="Nam">Nam</option>
                        <option value="Nu">Nu</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="Dang ky">
        <input type="reset" value="Nhap lai">
    </form>

</body>
</html>