<?php 
include("global.php");
include("header.php");
?>

<span style="color: red;"><?php echo $errormessage;?></span>

<br>
<div class="row">
  <div class="medium-6 medium-centered large-4 large-centered columns">

    <form action="checkout_process.php" method="post" enctype="multipart/form-data">
      <div class="row column">
        <h4 class="text-center">Checkout Form</h4>
        <label>Name
          <input type="text" name="name" value="<?echo $name;?>" placeholder="John Doe">
        </label>
        <label>Address
          <input type="text" name="address" value="<?echo $address;?>"placeholder="123 Fake Street">
        </label>
        <label>City
          <input type="text" name="city"  value="<?echo $city;?>" placeholder="Juno">
        </label>
        <label>State
        <select name="state">
				<option value="AL">Alabama</option>
				<option value="AK">Alaska</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="DC">District Of Columbia</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="HI">Hawaii</option>
				<option value="ID">Idaho</option>
				<option value="IL">Illinois</option>
				<option value="IN">Indiana</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="ME">Maine</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NV">Nevada</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NM">New Mexico</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="ND">North Dakota</option>
				<option value="OH">Ohio</option>
				<option value="OK">Oklahoma</option>
				<option value="OR">Oregon</option>
				<option value="PA">Pennsylvania</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="SD">South Dakota</option>
				<option value="TN">Tennessee</option>
				<option value="TX">Texas</option>
				<option value="UT">Utah</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WA">Washington</option>
				<option value="WV">West Virginia</option>
				<option value="WI">Wisconsin</option>
				<option value="WY">Wyoming</option>
		</select>				
        </label>
        <label>Zip Code
        <input type="text" name="zip"  value="<? echo $zip; ?>" placeholder="12321">
        </label>
        <input type="submit" value="Checkout" class="button expanded">
       </div>
    </form>

  </div>
</div>


<?
include("footer.php");
?>