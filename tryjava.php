
<script type="text/javascript">
function changestatus(){
    var method =  document.getElementById("method");
    var dvPassportxx = document.getElementById("dvPassportxx");
    var Vodafonex = document.getElementById("Vodafonex");
    dvPassportxx.style.display = method.value == "2" ? "block" : "none";
    Vodafonex.style.display = method.value == "3" ? "block" : "none";
}
</script>
<div id="dvPassportxx" style="display: none">
    Visa card number:
    <input type="number" name="cardnumber" id="txtvisa" />
    <input type="date" class="form-input" name="dob" id="dob" placeholder="Expire date" required/>
    <input type="number" class="form-input" name="sec" id="sec" placeholder="Security code" required/>
</div>

<div id="Vodafonex" style="display: none">
    <input type="number" name="Phonenumber" id="PhoneNumber" placeholder="Phone Number" required/>
   
    <input type="number" class="form-input" name="Amount" id="Amount" placeholder="Amount" required/>
</div>
<select id="method" onchange="changestatus()">
    <option value="" disabled="disabled" selected>Donation Type</option>
<?php
        include 'DonationMethodModel.php';
        class DonationMethodView
        {
             public function Show_AllDMethods()
            {
                $Result= array();
                $Result=DonationMethod::SelectAllMethodsInDB();
                $i=0;
                while($Result[$i]!=NULL)
                {
                        ?>
                        <option value="<?php echo $i ?>"><?php echo $Result[$i]->getName(); ?></option>
                        
                        <?php
                    $i++;
                }
            }
        }
        
    $dmv=new DonationMethodView();
    $dmv->Show_AllDMethods();
    ?>

    </select>