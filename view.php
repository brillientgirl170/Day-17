<?php
    require_once 'Demo.php';
    $t= new Demo;
    $res= $t->demo();
?>
<form action="" method="post">
    <table>
        <tr>
            <th>First Number</th>
            <td><input type="text" name="first_number"></td>
        </tr>
        <tr>
            <th>Last Number</th>
            <td><input type="text" name="last_number"></td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input type="radio" name="check" value="odd">ODD
                <input type="radio" name="check" value="even">EVEN
            </td>
        </tr>
        <tr>
            <th>Result</th>
            <td><textarea name="text_area" cols="30" rows="10"><?php echo $res;?></textarea></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="SubmiT"></td>
        </tr>
    </table>
</form>
