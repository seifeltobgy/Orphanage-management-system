<?php
include 'singleton.php';
$Db= DbConnection::getInstance();
$conn = $Db->getConnection();
  $sql ="SELECT * FROM `donations` WHERE Donation_Id = ( SELECT MAX(Donation_Id) ) ORDER BY Donation_Id DESC LIMIT 1";
  $Result = mysqli_query($con, $sql);

 
  while ( $row = mysqli_fetch_array($Result) )
  {
    ?>
    <form action="Donate.php" method="POST">
        <center id="top">
      <div class="logo"></div>
      <div class="info"> 
        <h2>Al-Orman</h2>
      </div>
    </center>
        <div id="mid">
      <div class="info">
        <h2>Contact Info</h2>
        <p> 
            Address : <input type="text" name="FullName" value="<?php echo $row['Address']?>" /></br>
            Email   : <input type="text" name="Email" value="<?php echo $row['Email']?>"/></br>
            Phone   : <input type="text" name="DOB" value="<?php echo $row['PhoneNumber']?>"/></br>
        </p>
      </div>
    </div>
  <div id="invoice-POS">
    <div id="bot">
					<div id="table">
						<table>
							<tr class="tabletitle">
								<td class="item"><h2>Item</h2></td>
								<td class="Hours"><h2>Amount</h2></td>
								<td class="Rate"><h2>Date</h2></td>
							</tr>

							<tr class="service">
								<td class="tableitem"><p class="itemtext"><input type="integer" name="Id" value="<?php echo $row['Donation_Id']?>" /></td>
								<td class="tableitem"><p class="itemtext"><input type="text" name="Gender" value="<?php echo $row['amount']?>"/></td>
								<td class="tableitem"><p class="itemtext">    <input type="text" name="create" value="<?php echo $row['created_at']?>"/></td>
							</tr>
						</table>
					</div>
					<div id="legalcopy">
						<p class="legal"><strong>Thank you for your business!</strong>  Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices. 
						</p>
					</div>
				</div>
  </div>
</form>
  <?php
}
    ?>