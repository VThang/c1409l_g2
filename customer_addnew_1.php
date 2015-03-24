<?php
require_once './process/_inc.php';
require_once './inc_checklogin.php';
?>
<form action="process/customer_1.php?do=add" method="post">
    <table>
        <tbody> 
            <tr>
                <th>Email</th>
                <td>
                    <input type="text" name="email"/> 
                </td>
            </tr>

            <tr>     
                <th>Name</th>
                <td>
                    <input type="text" name="name"/>
                </td>
            </tr>

            <tr>
                <th>Phone</th>
                <td>
                    <input type="number" name="phone"/>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="submit"/>
                </td>
            </tr>
        </tbody>

    </table>
</form>






<?php
include_once './inc_footer.php';
?>