<?php
/*
Template Name: Registered Members Template
*/
global $wpdb;

$result = $wpdb-> get_results("select * from members");
?>
<div class="container" style="background-color:pink;width:400px;text-align:center;">
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
            //loop record in DB
            foreach( $result as $member){
                $id = $member -> id;
        ?>
            <tr>
                <td>
                    <?php echo $member -> name; ?>
                </td>
                <td>
                    <?php echo $member -> email ?>
                </td>
                <td>
                <form action="" method="POST" >
                   <input type="submit" name="delete" value="Delete User <?php echo $member -> id ; ?>">
                   <input type="hidden" id="custId" name="custId" value="<?php echo $member -> id ; ?>">
                </form>
                </td>
                <td>
                    <form>
                        <a href="http://localhost/scrollfield/registered-members/'.<?php echo $id;?>.'">
                            <input type="button" name="edit" value="Edit User">
                        </a>
                    </form>
                </td>
            </tr>
            <?php } ?>
    </tbody>
</table>
</div>





