<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Form</title>
</head>

    <h6> - Denotes Required Information </h6>
     <h6> > 1 Donation > 2 Confirmation > Thank You!</h6>

     <h2 style="color:red">Donor Information</h2>
    
    
     <form action="" method="">


         <table style="text-align:center;" >
         <tr>

     <td>First Name</td>
     <td>
         <input type="text" id="firstname" name="firstname";>
        </td>
    </tr>

    <tr>
        <td>Last Name</td>
        <td><input type="text" id="lastname" name="lastname"></td>
    </tr>
     
    <tr>
        <td>Company</td>
        <td><input type="text" id="company" name="company"></td>
    </tr>

     <tr>
         <td>Address 1</td>
         <td> <input type="text" id="address1" name="address1"></td>
     </tr>

    <tr>
        <td>Address 2</td>
        <td><input type="text" id="address2" name="address2"></td>
    </tr>

    <tr>
        <td>City</td>
        <td><input type="text" id="city" name="city"></td>
    </tr>


     
     <tr>
         <td>State</td>
    
     <td>
     <select name="Select a State">
    <option value="Select a State">Select a State</option>
     <option value="Dhaka">Dhaka</option>
     <option value="Dhaka">Chittagong</option>
     <option value="Dhaka">Cumilla</option>
     <option value="Dhaka">Rajshahi</option>
    </select>
</td>
</tr>


<tr>
    <td>Zip Code</td>
    <td><input type="text" id="zipcode"name="zipcode"></td>
</tr>


<tr>
    <td>Country</td>

    <td>
    
    <select name="Select a country">
    <option value="Select a country">Select a country</option>
    <option value="Dhaka">Bangladesh</option>
    <option value="Khulna">India</option>
    <option value="Khulna">Pakistan</option>
    <option value="Khulna">Nepal</option>
    <option value="Khulna">Bhutan</option>
    <option value="Khulna">USA</option>
    
    </select>
</td>
</tr>



<tr>
    <td>Phone</td>
    <td><input type="text" id="phone" name="phone"></td>
</tr>

<tr>
<td>Fax</td>
<td><input type="text" id="fax" name="fax"></td>
</tr>

    <tr>
        <td>Email</td>
        <td><input type="text" id="email" name="email"></td>
        
    </tr>

     	<tr style="text-align:right;" >

        <td>Donation Amount</td>
        <td><input type="radio" id="email" name="email">$50</td>

        <td><input type="radio" id="email" name="email">$75</td>

        <td><input type="radio" id="email" name="email">$100</td>

        <td><input type="radio" id="email" name="email">Other</td>
     </tr>

     <tr>
         <td>Other Amount $</td>
         <td><input type="text" id="otheramount" name="otheramount"></td>
     </tr>

     <tr>
         <td>Recurring Donation</td>
         <td><input type="checkbox">I am interested in giving on a regular basis.</td>
     </tr>
    

    </table>
</form>


<br>

<h3 style="color:red">Honorarium and Memorial Donation Information</h3>


<form action="" method="">

         	<table style="text-align:center;" >
    
            <tr>
                <td>I would like to make this donation</td>
                <td><input type="radio" id="email" name="email">To Honor </td>
                <td><input type="radio" id="email" name="email">In Memory of</td>
            </tr>

            <tr>
                <td>Name</td>
                <td>
                    <input type="text" id="name" name="name">
                </td>
            </tr>

            <tr>
                <td>Acknowledge Donation to</td>
                <td> <input type="text" id="donation" name="donation"></td>
            </tr>

            <tr>
                <td>Address</td>
                <td> <input type="text" id="address" name="address"></td>
            </tr>
            
            <tr>
                <td>City</td>
                <td> <input type="text" id="city" name="city"></td>
            </tr>

            <tr>
                <td>State</td>
    
     <td>
     <select name="Select a State">
    <option value="Select a State">Select a State</option>
     <option value="Dhaka">Dhaka</option>
     <option value="Dhaka">Khulna</option>
     <option value="Dhaka">barisal</option>
    </select>
</td>
            </tr>

            <tr>
                <tr>
                    <td>Zip</td>
                    <td><input type="text" id="zip" name="zip"></td>
                </tr>
            </tr>
        </table>
        </form>
    

    <h3 style="color:red">Additional Information</h3>

    <h4>please enter your name,company or organization as you would like it to appear in our publication:</h4>
        <form action="" method="">
            <table>
                <tr style="text-align:right;" >
                    <td>Name</td>
                
                     
                    <td>
                    	<input type="text" id="n" name="n">
                    </td>
                    
                </tr>
                <tr style="text-align:center;" >
                    <td>
                    	<input type="checkbox">I am interested in giving on a regula.
                    </td>
                </tr>
                <tr>
                <td style="text-align:center;" >

                	<input type="checkbox">I am interested in giving on a regular basi.
                </td>
            </tr>
            <td style="text-align:center;" >

            	<input type="checkbox">I am interested in giving on a regular basis.
            </td>
           
                </tr>

                <tr style="text-align:right;" >
                    <td>Comment</td>
                    <td><input type="textarea"></td>
                
                </tr>

                <tr style="text-align:center;" >

                    <td>How may we contact you?</td>
                 </tr>

                 <tr style="text-align:left;" >
                    <td><input type="checkbox">E-mail</td>
                </tr>

                <tr style="text-align:left;" >
                    <td><input type="checkbox">Postal mail</td>
                </tr>

                <tr style="text-align:left;" >
                <td><input type="checkbox">Telephone</td>
                </tr>

                <tr style="text-align:left;" >
                <td><input type="checkbox">Fax</td>
                </tr>

                <tr style="text-align:left;" >
                    <td><input type="checkbox">I would like information about volunteering with the</td>
                </tr>

            </table>
        </form>
    
    <button>Reset</button>
    <button>Continue</button>
</body>
</html>