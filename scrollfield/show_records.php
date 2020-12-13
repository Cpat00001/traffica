<?php
/*
Template Name: Registered Members Template
*/
global $wpdb;

$result = $wpdb-> get_results("select * from members");
?>
<div class="container" style="background-color:pink;width:300px;text-align:center;">
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
        ?>
            <tr>
                <td>
                    <?php echo $member -> name; ?>
                </td>
                <td>
                    <?php echo $member -> email ?>
                </td>
            </tr>
            <?php } ?>
    </tbody>
</table>


</div>

