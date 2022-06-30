<?php

include("dbConn.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Workbook Quest</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
    <div class = "bg-image"><!--w3Schools.com-->
    <div class = "nav" id="myNav"><!--The IIE, 2013-->
            <ul>                
                <li><a href="workbookQuest.php">How it works</a><!--w3Schools.com--></li>
                <li><a href="bookListAdmin.php" class = "active">Book List</a></li>
                <li><a href="contactUs.php">Contact Us</a></li>
                <li><a href="register.php"  style="color:rgb(17, 38, 91);">Register</a></li>
                <li><a href="login.php" style="color:white;">Login</a></li>
            </ul>
        </div>
        
       <div class="top" style="height: 100px; background-color: transparent"></div>
       <div class="main" style="background-color: transparent">
       <h1 style="font-size: 40px; color: white; text-align:left">Payment</h1>

       <form action = "" method = "POST">
        
       <div class="reg">
                <label for="surnameLb" class="formLabel">Bill To</label>
            </div> 

            <div class="reg">
                <label for="nameLb" class="formLabel">First Name</label>
            </div>    
                
            <div class="reg">
                <input type="text" placeholder="Input Field" name="Name" class="formtext" value="<?php echo $name; ?>">
                <span class="formErrorLabel"><?php echo $name_error; ?></span>
            </div>

            <div class="reg">
                <label for="surnameLb" class="formLabel">Last Name</label>
            </div>    
                
            <div class="reg">
                <input type="text" placeholder="Input Field" name="ltName" class="formtext" value="<?php echo $surname; ?>">
                <span class="formErrorLabel"><?php echo $ltName_error; ?></span>
            </div>

            <div class="reg">
                <label for="emailLb" class="formLabel">Contact Email</label>
                </div>    
                
            <div class="reg">
                <input type="email" placeholder="Input Field" name="email" class="formtext" value="<?php echo $email; ?>">
                <span class="formErrorLabel"><?php echo $email_error; ?></span>
            </div>

            <div class="reg">
                <label for="numLb" class="formLabel">Mobile Number</label>
                </div>    
                
            <div class="reg">
                <input type="text" placeholder="Input Field" name="num" class="formtext" value="<?php echo $num; ?>">
                <span class="formErrorLabel"><?php echo $num_error; ?></span>
            </div>

            <div class="reg">
                <label for="altNumLb" class="formLabel">Alternative Number</label>
                </div>    
                
            <div class="reg">
                <input type="text" placeholder="Input Field" name="altNum" class="formtext" value="<?php echo $altNum; ?>">
                <span class="formErrorLabel"><?php echo $altNum_error; ?></span>
            </div>

            <div class="reg">
                <label for="detailsLb" class="formLabel">Enter your payment details</label>
                </div>

            <div class="reg">
                <label for="cardNumLb" class="formLabel">Card Number</label>
                </div>    
                
            <div class="reg">
                <input type="text" placeholder="Input Field"  name="cardNum" class="formtext" value="<?php echo $cardNumber; ?>">
                <span class="formErrorLabel"><?php echo $cardNum_error ; ?></span>
            </div>

            <div class="reg">
                <label for="exDateLb" class="formLabel">Expiry Date </label>
                </div>    
                
            <div class="reg">
                <input type="text" placeholder="Input Field"  name="exDate" class="formtext" value="<?php echo $exDate; ?>">
                <span class="formErrorLabel"><?php echo $exDate_error ; ?></span>
            </div>

            <div class="reg">
                <label for="cvvLb" class="formLabel">Cvv</label>
                </div>    
                
            <div class="reg">
                <input type="text" placeholder="Input Field"  name="intCvv" class="formtext" value="<?php echo $inCvv; ?>">
                <span class="formErrorLabel"><?php echo $cvv_error ; ?></span>
            </div>

            <div class="reg">
                <label for="nameCardLb" class="formLabel">Name of Card</label>
                </div>    
                
            <div class="reg">
                <input type="text" placeholder="Input Field"  name="nameCard" class="formtext" value="<?php echo $nameCard; ?>">
                <span class="formErrorLabel"><?php echo $nameCard_error ; ?></span>
            </div>

            <div class="reg">
                <label for="billingAddLb" class="formLabel">Billing Address</label>
                </div>    

            <div class="reg">
                <label for="Addresslb" class="formLabel">Address</label>
            </div> 
                
            <div class="reg">
                <input type="text" placeholder="Input Field" styles="width: 450px; height: 450px;"  name="address" class="formtext" value="<?php echo $address; ?>">
                <span class="formErrorLabel"><?php echo $address_error ; ?></span>
            </div>

            <div class="reg">
                <label for="Suburblb" class="formLabel">Suburb</label>
            </div> 
                
            <div class="reg">
                <input type="text" placeholder="Input Field"  name="suburb" class="formtext" value="<?php echo $suburb; ?>">
                <span class="formErrorLabel"><?php echo $suburb_error ; ?></span>
            </div>
                    
            <div class="reg">
                <label for="cityOrTownLb" class="formLabel">City / Town</label>
            </div> 
                
            <div class="reg">
                <input type="text" placeholder="Input Field"  name="cityOrTown" class="formtext" value="<?php echo $CityOrTown; ?>">
                <span class="formErrorLabel"><?php echo $cityOrTown_error ; ?></span>
            </div>

            <div class="reg">
                <label for="provinceLb" class="formLabel">Province</label>
            </div> 
                
            <div class="reg">
                <input type="text" placeholder="Input Field"  name="province" class="formtext" value="<?php echo $province; ?>">
                <span class="formErrorLabel"><?php echo $province_error ; ?></span>
            </div>

            <div class="reg">
                <label for="postalCodeLb" class="formLabel">Postal Code</label>
            </div> 
                
            <div class="reg">
                <input type="text" placeholder="Input Field"  name="postalCode" class="formtext" value="<?php echo $postalCode; ?>">
                <span class="formErrorLabel"><?php echo $postalCode_error ; ?></span>
            </div>

            <div class="reg">
                <br><button type="submit" name="makePayment" class="btn" style="margin-left: 350px; height: 50px; width: 200px;">PAY</button>
            </div>
    </form>


       

        </div>
       </div>
    </body>
</html>