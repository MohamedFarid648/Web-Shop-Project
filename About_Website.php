

<?php
if (isset($_GET['page'])) {
    ?>
    <html>

        <body>
            <div class="Description">
                
                <h3>Description:</h3>
                <h2>
                    <!-- This website is working as an agent between
client and company:
                Guest can see products and companies.
                     Company can register, log in , 
                            offer their products ,
                           delete and update them ,and edit it's profile,
                           Specify the Recieving Date for Product
                     Customer can register, log in, edit his profile and buy products.
                       Admin can log in, add admin, edit his profile, and delete admins, customers ,companies.-->
                    This website is working as an agent between
client and company:
                </h2>
                    
                <ul>
                    <li><h1>Guest can see products and companies.</h1></li>
                     <li><h1>Company can register, log in , 
                             <br>offer their products ,
                             <br>delete and update them ,and edit it's profile,
                             <br><font color="red">Specify the Recieving Date for Product</font>.</h1></li>
                     <li><h1>Customer can register, log in, edit his profile and <font color="red">buy products</font>.</h1></li>
                       <li><h1>Admin can log in, add admin, edit his profile, and delete admins, customers ,companies.</h1></li>
                </ul>
             
                
            </div>
    </body>
    </html>
    <?php
} else {
    header("Location:../index.php");
}
?>