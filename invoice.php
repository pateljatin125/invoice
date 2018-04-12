<!DOCTYPE html>
<?php  session_start(); ?>
<div class="printinvoice">
<html lang="en">
  <head>
    <link href="bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="style.css">
     <script src="jquery.js" type="text/JavaScript" language="javascript"></script>
        <script src="jquery.PrintArea.js" type="text/JavaScript" language="javascript"></script>
     <script src="build/SalsaCalendar.min.js"></script>
     <link rel="stylesheet" type="text/css" href="build/SalsaCalendar.min.css">
    <style type="text/css">

    textarea {
    background-color:white;
 }
  input {
    background-color:white;
 }

    </style>

  </head>
  <body id="page-top">   

    

<?php 
  if(!empty(($_SESSION['views']))){
     $_SESSION['views'] = $_SESSION['views']+ 1;
  }else{
      $_SESSION['views'] = 1;
   
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "amarfashion";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
               $relative = $_POST['receiptdetail'];
               $sender = $_POST['senderdetail'];
               $total = $_POST['grandtotal'];
               $bankname = $_POST['bankname'];
               $bankaccount = $_POST['bankaccount'];
               $invoivedate = $_POST['invoivedate'];
               $wordamount  = $_POST['amountinword'];
               $currentdate  = date("Y-m-d"); 
               $last_id = '';
           if(!empty($total)){
               $sql = "INSERT INTO invoice_table (invoice_no,invoice_receiver,invoice_sender,invoice_total_amount,invoice_total_amount_word,invoice_date,invoice_bank_name,invoice_bank_account,create_date)
                        VALUES ('','".$relative."','".$sender."','".$total."','".$wordamount."','".$invoivedate."','".$bankname."','".$bankaccount."','".$currentdate."')"; 
  
              if ($conn->query($sql) === TRUE) {
                  $last_id = $conn->insert_id;
              }else{
                   echo "Error: " . $sql . "<br>" . $conn->error;  exit;

              }
            }
            $age[] = '';

            for ($x = 1; $x <= 15; $x++) {
          
                  if(!empty($_POST['qty_'.$x]) && !empty($_POST['rate_'.$x])){
                   $invoicedetail = "INSERT INTO invoice_detail (id,invoice_no,item_no,qty_discription,discription,qty,qty_rate,discount_rate,discount_amount,total,create_date)
                   VALUES ('','".$last_id."','".$x."','".$_POST['discription_'.$x]."','".$_POST['dis_'.$x]."','".$_POST['qty_'.$x]."','".$_POST['rate_'.$x]."','".$_POST['discountrate_'.$x]."'
      ,'".$_POST['discountamout_'.$x]."','".$_POST['total_'.$x]."','".$currentdate."')"; 

             if ($conn->query($invoicedetail) === TRUE) {
              } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;  exit;
              }
           }
  }  
}
?>  

 <page size="A4">
          <table  border="0" width="100%">
            <tr><td colspan="4" style="text-align: center;">  શ્રી ગણેશાય નમ: </td></tr>
            <tr><td colspan="4" style="text-align: center; padding-top: 14px;"><h2>  AMAR FASHION </h2>  </td></tr>
            <tr><td colspan="4" ><p align="justify" style="margin-left: 43px;">Plot no 1,2nd floor, Gajera ind. soc, Nr. Divalibuage ind. soc, A.K. road surat,Gujarat,Phone no:1234567890. </p> </td></tr>
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
              <td><textarea rows="4" cols="65" disabled><?php echo  $_POST['receiptdetail']; ?></textarea></td>
              <td><textarea rows="4" cols="68" disabled><?php echo  $_POST['senderdetail']; ?></textarea></td>
            </tr>
          </table>
          <table border="1" width="90%" style="margin-left: 40px;">
            <form action="" method="post">
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
              <td>
                <input type="text" disabled style="text-align: center;"  value=<?php echo $_POST['discription_'.$x]; ?> >
              </td>
              <td>
                <input type="text" disabled style="text-align: center;" value=<?php echo $_POST['dis_'.$x]; ?>>
              </td>
              <td>
                <input type="text" disabled style="text-align: center;" value=<?php echo $_POST['qty_'.$x]; ?>>
              </td>
              <td>
                <input type="text" disabled style="text-align: center;" value=<?php echo $_POST['rate_'.$x]; ?>>
              </td>
              <td>
                <input type="number" disabled style="text-align: center;" value=<?php echo $_POST['discountrate_'.$x]; ?>>
              </td>
              <td>
                <input type="text" disabled style="text-align: center;" value=<?php echo $_POST['discountamout_'.$x]; ?>>
              </td>
              <td>
                <input type="text" disabled style="background-color:white; text-align: center;"  value=<?php echo $_POST['total_'.$x]; ?>>
              </td>
             </tr>
             <?php } ?>
              <td colspan="4" style="text-align: center;">Total:</td>
              <td colspan="4" style="padding-left: 130px;">INR:  <input disabled type="text" id='grantotal'  style="width: 100px; margin-left: 141px; text-align: center;" value=<?php echo $_POST['grandtotal']; ?>></td>
             </tr>
             <tr>
             <td colspan="4" class="border-lb" style="text-align: center; border-right:none">
              <p style="float: left;" >Amount in words(INR)<p><br>
              <p style="float: left;"><b id='amountinword'> <?php echo $_POST['amountinword']; ?></p>
              </td>
               <td colspan="4" class="border-rb" style="padding-left: 60px;">GrossAmount: <b>  <input disabled type="text" id='grantotal'  style="width: 100px; margin-left: 141px; text-align: center; font: bold;" value=<?php echo $_POST['grandtotal']; ?>></b></td>
             <!-- <td colspan="4" style="padding-left: 130px;">GrossAmount:  <input disabled type="text" id='grantotal'  style="width: 100px; margin-left: 141px; text-align: center;" value=<?php echo $_POST['grandtotal']; ?>></td> -->
            
              
              </tr>
              <tr>
                <td colspan="2" style="text-align: center; border-right:none"><p style="float: left;" class="payment-detail" >Payment Details: </p><br></td>
                <td colspan="6" class="Cash-Cheque">Cash/Cheque</td>
              </tr>
               <tr>
               <td colspan="8" style="padding-left: 16px;">Date &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:  <input disabled type="disable" id='grantotal' style="width: 80%; text-align: center;" value=<?php echo  $_POST['invoivedate']; ?>></td>
              </tr> 
              <tr>
               <td colspan="8" style="padding-left: 16px;">Bank: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:  <input disabled type="text" id='grantotal' style="width: 80%; text-align: center;" value=<?php echo  $_POST['bankname']; ?>></td>
              </tr> 
          
              <tr>
               <td colspan="8" style="padding-left: 16px;">Account &nbsp:  <input type="text" disabled id='grantotal' style="width: 80%; text-align: center;" value=<?php echo  $_POST['bankaccount']; ?>></td>
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
        </table>
        </td> </tr>
        </table>
     </form>
    </page>

    
</body>

</html>
</div>

<div class="row">
     <div class="col-sm-3"> &nbsp; </div>
    <a href="javascript:void(0);" id="print_button1"  class="col-sm-3" style="color:black; background-color:lavender; background-color: green; text-align:center;">
      Print </a>
    <a href="index.php" id="print_button1" class="col-sm-3" style="background-color:lavenderblush; background-color: #02A6D8; text-align:center; color:black;">Back </a>
  </div>
 <script src="pricecalulation.js"></script>

 <script>
    $(document).ready(function(){
        $("#print_button1").click(function(){
            var mode = 'iframe'; // popup
            var close = mode == "popup";
            var options = { mode : mode, popClose : close};
            $(".printinvoice").printArea( options );
        });        
    });

  </script>