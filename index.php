<?php include 'database/connection.php'; ?>

<?php  session_start();
  $_SESSION['views'] = '';
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="style.css">
     <script src="build/SalsaCalendar.min.js"></script>
     <link rel="stylesheet" type="text/css" href="build/SalsaCalendar.min.css">
      </head>
  <body id="page-top">   
    <page size="A4">
      <form  method="post" action="invoice.php" name="invoice">
    <table  border="0" width="100%">
      <tr><td colspan="4" style="text-align: center;">  શ્રી ગણેશાય નમ: </td></tr>
      <tr><td colspan="4" style="text-align: center; padding-top: 14px;"><h2>  AMAR FASHION </h2>  </td></tr>
      <tr><td colspan="4" ><p align="justify" style="margin-left: 42px;">Plot no 1,2nd floor, Gajera ind. soc, Nr. Divalibuage ind. soc, A.K. road surat,Gujarat,Phone no:1234567890. </p> </td></tr>
      <tr>
        <td colspan="3" class="tdpadding" style="text-align: left;"> PAN: AYOPP0674M </td> 
         <td  style="text-align: center;"> Orignal </td>
      </tr>
      <tr>
        <td colspan="3" class="tdpadding" style="text-align: left;"> GSTIN: 24AYOPP0674M1ZU </td> 
         <td colspan="" style="text-align: center; padding-left: 15px;"> Dublicate </td>
      </tr>
      <tr>
        <td colspan="" style="text-align: center;">  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</td>
        <td colspan="2" style="text-align: center;"><h4> TEXT INVOICE</h4></td>
        <td style="text-align: center; padding-left: 15px;"> Triplicate </td>
      </tr> 
    </table>
    <table border="1" width="90%" style="margin-left: 40px;">
      <tr>
        <td><textarea rows="4" cols="65" name="receiptdetail">To.</textarea></td>
        <td><textarea rows="4" cols="68" name="senderdetail"></textarea></td>
      </tr>
    </table>
    <table border="1" width="90%" style="margin-left: 40px;">
       <th>Sr</th>
        <th  style="width:240px; text-align: center;">Item</th>
        <th style="width:246px; text-align: center;">Description</th>
        <th style="text-align: center;" > Qty</th>
        <th style="text-align: center;">Rate</th>
        <th style="text-align: center;">discount %</th>
        <th style="text-align: center;">Disc Amt</th>
        <th style="text-align: center;">Total</th>
  
        <?php 
           for ($x = 1; $x <= 15; $x++) { ?>
        <tr><td><?php echo $x ?></td>
        <td><input type="text" name=<?php echo 'discription_'.$x; ?> style="text-align: center;" id=<?php echo 'discription_'.$x; ?>></td>
        <td><input type="text" style="text-align: center;" name=<?php echo 'dis_'.$x; ?>></td>
        <td><input type="text" style="text-align: center;" name="<?php echo 'qty_'.$x; ?>" id=<?php echo 'qty_'.$x; ?>></td>
        <td><input type="text" style="text-align: center;" name=<?php echo 'rate_'.$x; ?> id=<?php echo 'rate_'.$x; ?>></td>
        <td><input type="number" style="text-align: center;" name=<?php echo 'discountrate_'.$x; ?> id=<?php echo 'discountrate_'.$x; ?> ></td>
        <td><input type="text" style="text-align: center;" name=<?php echo 'discountamout_'.$x; ?>  id=<?php echo 'discountamout_'.$x; ?>></td>
        <td><input type="text" style="background-color:white; text-align: center;"  name=<?php echo 'total_'.$x; ?> id=<?php echo 'total_'.$x; ?>></td>
       </tr> <?php  }      ?>
        <tr>
        <td colspan="4" style="text-align: center;">Total:</td>
        <td colspan="4" style="padding-left: 130px;">INR:  <input type="text" name="grandtotal" id='grantotal'  style="width: 100px; margin-left: 141px; text-align: center;"></td>
       </tr>
       <tr>
       <td colspan="4" class="border-lb" style="text-align: center; border-right:none">
        <p style="float: left;" >Amount in words(INR)<p><br>
        <p style="float: left;"><b id='amountinword'>  </b> <input type="hidden" name="amountinword" id="amounttext"></p>
        </td>
       <td colspan="4" class="border-rb" id="gross" style="padding-left: 130px;"><!-- GrossAmount: <b id='final'></b>  --></td>
        
        </tr>
        <tr>
          <td colspan="2" style="text-align: center; border-right:none"><p style="float: left;" class="payment-detail" >Payment Details: </p><br></td>
          <td colspan="6" class="Cash-Cheque">Cash/Cheque</td>
        </tr>
         <tr>
         <td colspan="8" style="padding-left: 16px;">Date &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:
         <input type="text"  id="checkout" class="salsa-calendar-input" style="width: 80%; text-align: center;" 
          autocomplete="off" name="invoivedate"  value="" />
        </td>
        </tr> 
        <tr>
         <td colspan="8" style="padding-left: 16px;">Bank: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:  <input type="text" name="bankname" id='grantotal' style="width: 80%; text-align: center;"></td>
        </tr> 
        
        <tr>
         <td colspan="8" style="padding-left: 16px;">Account &nbsp:  <input type="text" id='grantotal' name="bankaccount" style="width: 80%; text-align: center;"></td>
        </tr> 
          <tr>
         <td colspan="8" style="padding-left: 16px;">
          <p>Term & Condition</p>
            <ul>
              <li>Subject to Surat Juridiction.</li>
              <li>Goods once sold will not be taken back.</li>
              <li>Any complaint regarding this bill must be settled immediately.</li>
              <li>Any complaint will not entertain after laying any materials.</li>
              <li>interest @ 24% pa. will not be charged on all bills remaining unpaid after due date.</li>
            </ul>
         </td>
        </tr> 

        <tr class="reciever">
          <td colspan="4" class="border-lb" style="text-align: center; border-right:none">
           <p style="float: left;position: relative;top: -31px;left: 14px;"><u>Reciever Signature</u><p><br>
            <p style="float: left;margin-top:24px;margin-left:19px;position: relative;top: 27px;">.....................................</p>
            </td>
           <td colspan="4" class="border-rb" style="padding-left: 130px;position:relative;bottom:40px;left:120px;">
            <p>For, AMAR FASHION</p>
            <p class="Authorised">Authorised signatory</p>
          </td>
        </tr>
    </table>
 
    <!-- Bootstrap core JavaScript -->
   
   </table>
  </td> </tr>
  </table>
  <!--  <table border="1" width="90%" style="margin-left: 40px;">
  <tr> <td colspan="4"> <p id='final'> Total: </p> </td></tr> </table>
 -->
    <input type="submit" name="save" value="save" style="border-right-width: -40; margin-right: -40; width: 1020px; margin-left: 40px;"/>
     </form>
    </page> 

    <!-- Bootstrap core JavaScript -->
    <script src="jquery.min.js"></script>
  
   <script type="text/javascript">
        var calendar_from = new SalsaCalendar({
          inputId: 'checkout',
          lang: 'en',
          calendarPosition: 'right',
          fixed: false,
          connectCalendar: true
        });
        new SalsaCalendar.Connector({
          from: calendar_from,
         // to: calendar_to,
          maximumInterval: 21,
          minimumInterval: 1
        });

   </script>

   
  </body>

</html>
 <script src="pricecalulation.js"></script>
<script>
</script>


