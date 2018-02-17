<?php include 'database/connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body id="page-top">
    <page size="A4">
    <table  border="0" width="100%">
      <tr><td colspan="4" style="text-align: center;">  શ્રી ગણેશાય નમ: </td></tr>
      <tr><td colspan="4" style="text-align: center; padding-top: 14px;"><h2>  AMAR FASHION </h2>  </td></tr>
      <tr><td colspan="4" ><p align="justify">Plot no 1,2nd floor, Gajera ind. soc, Nr. Divalibuage ind. soc, A.K. road surat,Gujarat,Phone no:1234567890. </p> </td></tr>
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
        <td><textarea rows="4" cols="65">To.</textarea></td>
        <td><textarea rows="4" cols="68"></textarea></td>
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
        <td><input type="text" style="text-align: center;" id=<?php echo 'discription_'.$x; ?>></td>
        <td><input type="text" style="text-align: center;"></td>
        <td><input type="text" style="text-align: center;" id=<?php echo 'qty_'.$x; ?>></td>
        <td><input type="text" style="text-align: center;" id=<?php echo 'rate_'.$x; ?>></td>
        <td><input type="number" style="text-align: center;" id=<?php echo 'discountrate_'.$x; ?> ></td>
        <td><input type="text" style="text-align: center;"  id=<?php echo 'discountamout_'.$x; ?>></td>
        <td><input type="text" disabled style="background-color:white; text-align: center;" id=<?php echo 'total_'.$x; ?>></td>
       </tr> <?php  }      ?>
        <tr>
        <td colspan="4" style="text-align: center;">Total:</td>
        <td colspan="4" style="padding-left: 130px;">INR:  <input type="text" id='grantotal' style="width: 100px; margin-left: 141px; text-align: center;"></td>
       </tr>
       <tr>
       <td colspan="4" class="border-lb" style="text-align: center; border-right:none">
        <p style="float: left;" >Amount in words(INR)<p><br>
        <p style="float: left;"><b id='amountinword'></p>
        </td>
       <td colspan="4" class="border-rb" id="gross" style="padding-left: 130px;"><!-- GrossAmount: <b id='final'></b>  --></td>
        
        </tr>
        <tr>
          <td colspan="2" style="text-align: center; border-right:none"><p style="float: left;" class="payment-detail" >Payment Details: </p><br></td>
          <td colspan="6" class="Cash-Cheque">Cash/Cheque</td>
        </tr>
         <tr>
         <td colspan="8" style="padding-left: 16px;">Date &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:  <input type="text" id='grantotal' style="width: 80%; text-align: center;"></td>
        </tr> 
        <tr>
         <td colspan="8" style="padding-left: 16px;">Bank: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:  <input type="text" id='grantotal' style="width: 80%; text-align: center;"></td>
        </tr> 
        
        <tr>
         <td colspan="8" style="padding-left: 16px;">Account &nbsp:  <input type="text" id='grantotal' style="width: 80%; text-align: center;"></td>
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


        <!-- <td colspan="8" id="grossamount">
          <b>Amount in words(INR)</b>
          <p>Seventy Thousand Rupees.</p>
          <p class='GrossAmount'> GrossAmount: </p><input id='final'/>

        </td> -->

    </table>
 <?php /*
  <table border="1" width="90%" style="margin-left: 40px;">
 <tr> <td>
<table border="1" width="100%">

  <tr> <td colspan="1">Amount in word:  <p id='grantotal'> </p> </p> </td> 
  </tr>
  <tr>
    <td colspan="1">Amount in word:</td>
      
        
        <td style="text-align: right;"> 
         <?php 
               for ($x = 1; $x <= 15; $x++) { ?>

        <p id=<?php echo 'discountdis_'.$x; ?> ></p> <?php } ?> </td> 
         <td style="text-align: right;"> 
         <?php 
               for ($x = 1; $x <= 15; $x++) { ?>
       
        <p style="padding-right: 33px;" id=<?php echo 'grosstotal_'.$x; ?>> </p> <?php } ?> </p> </td> 
       </tr>

   <?php /* <tr>
     <td style="text-align: right;" colspan="2" > <input type="text" disabled placeholder="Remark" style="background-color:white"></td>
       <td style="text-align: right;" colspan="2" > <input type="text" disabled placeholder="Remark" style="background-color:white"></td>

      <td> 
         <?php 
               for ($x = 1; $x <= 15; $x++) { ?>

        <p id=<?php echo 'discountdis_'.$x; ?>></p> <?php } ?> </td> 
         <td > 
         <?php 
               for ($x = 1; $x <= 15; $x++) { ?>
       
        <p id=<?php echo 'grosstotal_'.$x; ?>> </p> <?php } ?> </p> </td> 

     <!--  <td > <input type="text" style="text-align: center;" disabled id="grosstotal"></td>  -->
    </tr> */ ?>
    <!-- Bootstrap core JavaScript -->
   
   </table>
  </td> </tr>
  </table>
  <!--  <table border="1" width="90%" style="margin-left: 40px;">
  <tr> <td colspan="4"> <p id='final'> Total: </p> </td></tr> </table>
 -->
   
   <span style="float:right;"><a href="javascript:window.print()" type="button" class="btn">PRINT</a></span>
    </page>
    <!-- Bootstrap core JavaScript -->
    <script src="jquery.min.js"></script>
   
  </body>

</html>
 <script src="pricecalulation.js"></script>
<script>
</script>
