<?php
    // print_r($users[0]->name);
    // exit;
?>


<!Doctype html>
<html lang='en'>
    <head>
        <title>Users</title>
        
    </head>
    <body>
        <h1>This is the list of Users</h1>

        <?php

            if(count($users) > 0){
                $sn = 0;
                foreach($users as $row){?>
                    <table border = 1 width='100%'>

                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Fullname</td>
                                <td>Email</td>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td><?= ++$sn; ?></td>
                                <td><?= $row->name; ?></td>
                                <td><?= $row->email; ?></td>
                            </tr>


                        </tbody>

                    </table>
                <?php }
            }else{
               echo 'No user available'; 
            }


        ?>


    </body>
</html>