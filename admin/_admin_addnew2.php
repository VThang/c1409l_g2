<?php
require 'inc_header.php';
?>
<form action="process/admin?do=add_new" method="post">
    <table>
        <tr>
            <th>Username</th>
            <td><input type="text" name="username" id="username" /></td>
        </tr>

        <tr>
            <th>Password</th>
            <td><input type="password" name="password" id="password" /></td>
        </tr>				


        <tr>
            <th>Fullname</th>
            <td><input type="text" name="fullname" id="fullname" /></td>
        </tr>

        <tr>
            <th><input type="submit" value="Thêm mới" /></th>
            <td><input type="reset" value="Hủy" /></td>
        </tr>							
    </table>
</form>
<?php
require 'inc_footer.php';
?>