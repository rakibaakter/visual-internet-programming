<?php
    $handle = fopen("info.csv", "r");
    $rows = count(file("info.csv"));
    $data = fgetcsv($handle, 1000,",");
    $record[] =[];
    while(( $data = fgetcsv($handle, 1000,",")) !== FALSE){
        $record[] = $data;
    } 
    fclose($handle);
?>

<?php
    include("header.php");
?>

<div class="container p-5">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Contact No</th>
                    <th scope="col">Department</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Description</th>

                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i=0;
                        for($i=0; $i<$rows; $i++){ ?>
                            <tr>
                                <?php
                                    foreach($record[$i] as $item){ ?>
                                        <td><?=$item?></td>
                                <?php } ?>
                            </tr>
                            <?php
                         }?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
    include("footer.php");
?>
