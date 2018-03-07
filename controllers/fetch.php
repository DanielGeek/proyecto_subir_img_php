<?php

include('../db/database_connection.php');

$query = "select * from tbl_img order by image_id desc";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$number_of_rows = $statement->rowCount();

$output = '
    <table class="table table-bordered table-striped">
        <tr>
            <th>Sr. No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
';

if($number_of_rows > 0)
{
    $count = 0;
    foreach($result as $row)
    {
        $count = $count + 1;
    }
}
else
{
    $output .= '
        <tr>
            <td colspan="6" align="center">No Data Found</td>
        </tr>
    ';
}

?>
