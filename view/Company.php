<html>
    <body>

        <div class="Side_body"> 
            <ul>
                <li><a href="?page=AddProduct">ADD Product</a></li>
                <li><a href=?page=EditProfile>Edit Profile </a></li>
                <li><a href="?page=UploadFiles">My Images</a></li>
                <li><a href="?page=CustomersOfCompany">My Customers</a></li>

            </ul>

        </div>

        <div id="LatestProject">
            <h1>My Products:</h1>

            <?php
            $c_mail = $_SESSION['useremail'];
            $data = new Display('product');
            $DisplayAllDataVariable = $data->DisplayAllProductByCompanyEmail($c_mail);
// print_r($DisplayAllDataVariable); if ($DisplayAllDataVariable) {

            if ($DisplayAllDataVariable) {
                for ($i = 0; $i < count($DisplayAllDataVariable); $i++) {

                    $uploadDirectory = "uploaded/" . $DisplayAllDataVariable[$i]['c_mail'] . "/";
                    ?>
                    <div class="Project">
                        <?php
                        $dir = scandir($uploadDirectory);
                        $dirAfterDeleted = array_diff($dir, array(".", ".."));
                        if ($dirAfterDeleted) {
                            foreach ($dirAfterDeleted as $value) {
                                if ($value == $DisplayAllDataVariable[$i]['product_image']) {
                                    $imageName = $DisplayAllDataVariable[$i]['name'];
                                    echo"<img width='140' height='100' src='$uploadDirectory$value' alt='$imageName'> ";
                                }//end of if $value == $DisplayAllDataVariable[$i]['product_image']
                            }//end of foeach
                        }//end of if dirAfterDeleted
                        ?>
                        <h2>
                            <?php
                            ?></h2>

                        <p>
                            <?php
                            echo'<br />  Price:<font color="red"> <b>$' . $DisplayAllDataVariable[$i]['price'] . '</font></b>';
                            echo'<br /> Date:' . $DisplayAllDataVariable[$i]['date'];

                            echo'<br />Edit:';
                            echo"<a href='?page=Delete_Product&action=Edit&id={$DisplayAllDataVariable[$i]['product_code']}&product_image={$DisplayAllDataVariable[$i]['product_image']}'>Edit</a>";
                            echo'<br />Delete:';
                            echo " <a href='?page=Delete_Product&action=delete&id={$DisplayAllDataVariable[$i]['product_code']}&product_image={$DisplayAllDataVariable[$i]['product_image']}'>Delete</a><br />";
                            echo"<br /><a href='?page=ProductPage&id=" . $DisplayAllDataVariable[$i]['product_code'] . "'>";


                            echo $DisplayAllDataVariable[$i]['name'];
                            echo"</a>";
                            ?>
                        </p>
                    </div>
        <?php
    }//end of for loop
}//end of $DisplayAllDataVariable
else {
    echo '<font color="blue">You did not Add Any Products until now  ^_^  </font>';
}
?>



        </div><!-- End of LatestProject -->



    </body>
</html>