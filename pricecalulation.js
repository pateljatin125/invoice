
$(document).ready(function(){

  
    let DiscountArray = {};
    i = 0;
        function someFunction() {
              var finaltotal = 0;
              var discount = 0;
              
              var arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
              $.each(arr, function (index, value) {
                   var grandtotal =  $('#total_'+value).val();
                   finaltotal = Number(finaltotal) + Number(grandtotal);

                  var DiscountAmount = $("#discountamout_"+value).val();
                   discount = Number(discount) + Number(DiscountAmount);
                   
              });

        var finalresult = (Number(finaltotal) - Number(discount));
        $("#grantotal").val(finaltotal.toFixed(2));
            var len = finaltotal.toFixed(2).toString(); 
  console.log(len.length);
         if(len.length == 1){
           var sty = ' GrossAmount: <b id="final" style="margin-left: 116px;"></b>';
            $('#gross').empty().append(sty); 
        }else if(len.length == 2){
           var sty = ' GrossAmount: <b id="final" style="margin-left: 112px;"></b>';
            $('#gross').empty().append(sty); 
        }else if(len.length == 3){
           var sty = ' GrossAmount: <b id="final" style="margin-left: 108px;"></b>';
            $('#gross').empty().append(sty); 
        }else if(len.length == 4){
           var sty = ' GrossAmount: <b id="final" style="margin-left: 103px;"></b>';
            $('#gross').empty().append(sty); 
        }else if(len.length == 5){
           var sty = ' GrossAmount: <b id="final" style="margin-left: 99px;"></b>';
            $('#gross').empty().append(sty); 
        }else if(len.length == 6){
           var sty = ' GrossAmount: <b id="final" style="margin-left: 95px;"></b>';
            $('#gross').empty().append(sty); 
        }else if(len.length == 7){
           var sty = ' GrossAmount: <b id="final" style="margin-left: 90px;"></b>';
            $('#gross').empty().append(sty); 
        }else if(len.length == 8){
           var sty = ' GrossAmount: <b id="final" style="margin-left: 85px;"></b>';
            $('#gross').empty().append(sty); 
        }else if(len.length == 9){
           var sty = ' GrossAmount: <b id="final" style="margin-left: 82px;"></b>';
            $('#gross').empty().append(sty); 
        } 

          $('#final').empty().append(finaltotal.toFixed(2));
          convertNumberToWords(finaltotal);
         }


         function discountfun() {
              var finaltotal = 0;
              
              var arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
              $.each(arr, function (index, value) {

                  var discountrate = $("#discountrate_"+value).val();
                  var discountamount = $("#discountamout_"+value).val();
                  var discription = $("#discription_"+value).val();
                        if(discountamount != ''){
                             DiscountArray[value+'_discription'] = discription+'('+discountrate+'%)';
                             DiscountArray[value+'_amount'] = discountamount;
                        }
            });
            DiscountFunction(DiscountArray);
        }
            function DiscountFunction(DiscountArray) {
               $("#discountdis").append('');
                  finaldis = [];
                  counter = 0;
               $.each(DiscountArray, function (index, value) {
                    var dataspite = index.split('_');
                    if(dataspite[1] == 'discription'){
                        console.log('counter',counter);
                          finaldis.push(value);
                          $("#descriptionname").val(finaldis); 
                    } 
              });
               $("#descriptionname").val(finaldis); 
                }

        var arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
             $.each(arr, function (index, value) {
                   
                  $("#qty_"+value).keyup(function(event ){
                    
                         var bla = $("#qty_"+value).val();
                         var blarate = $("#rate_"+value).val();
                         var total = bla * blarate;

                         var discountamount = $("#discountamout_"+value).val();
                         if(discountamount != ''){
                               $('#total_'+value).val((Number(total) - Number(discountamount))).val();
                         }else{
                             $('#total_'+value).val((Number(total) - Number(discountamount))).val();
                         }
                         someFunction();
                 });

                  $("#rate_"+value).keyup(function(event ){
                         var bla = $("#qty_"+value).val();
                         var blarate = $("#rate_"+value).val();
                         var total = bla * blarate;
                         var discountamount = $("#discountamout_"+value).val();

                         if(discountamount != ''){
                               $('#total_'+value).val((Number(total) - Number(discountamount))).val();
                         }else{
                             $('#total_'+value).val((Number(total) - Number(discountamount))).val();
                         }
                         someFunction();
                }); 


                  $(document).on("change keyup blur", "#discountrate_"+value, function() {
                      
                          var totalamt =  (Number($("#qty_"+value).val()) * Number($("#rate_"+value).val()));
                          var disc = $("#discountrate_"+value).val();

                           if (disc != '' && totalamt != '') {
                            var discountAmt = ((Number(totalamt) * Number(disc)) / 100);
                            var finalvalue =   (Number(totalamt) - Number(discountAmt)); 
                            $('#total_'+value).val(totalamt - discountAmt);
                             $('#discountamout_'+value).val(discountAmt);
                             someFunction();
                          }else{
                             $('#total_'+value).val(totalamt);
                             $('#discountamout_'+value).val('');
                           }
                           someFunction();
                         
                        });

                  $("#discountamout_"+value).keyup(function(event ){
                         var DiscountAmount = $("#discountamout_"+value).val();
                         var totalamt =  (Number($("#qty_"+value).val()) * Number($("#rate_"+value).val()));
                         if (DiscountAmount != '' && totalamt != '') {
                         var finalvalue =   (Number(totalamt) - Number(DiscountAmount)); 
                            $('#total_'+value).val(finalvalue);
                         }else{
                             $('#total_'+value).val(totalamt);
                             $('#discountamout_'+value).val('');
                         }
                         someFunction();
                }); 
       });


      function convertNumberToWords(amount) {
              var words = new Array();
              words[0] = '';
              words[1] = 'One';
              words[2] = 'Two';
              words[3] = 'Three';
              words[4] = 'Four';
              words[5] = 'Five';
              words[6] = 'Six';
              words[7] = 'Seven';
              words[8] = 'Eight';
              words[9] = 'Nine';
              words[10] = 'Ten';
              words[11] = 'Eleven';
              words[12] = 'Twelve';
              words[13] = 'Thirteen';
              words[14] = 'Fourteen';
              words[15] = 'Fifteen';
              words[16] = 'Sixteen';
              words[17] = 'Seventeen';
              words[18] = 'Eighteen';
              words[19] = 'Nineteen';
              words[20] = 'Twenty';
              words[30] = 'Thirty';
              words[40] = 'Forty';
              words[50] = 'Fifty';
              words[60] = 'Sixty';
              words[70] = 'Seventy';
              words[80] = 'Eighty';
              words[90] = 'Ninety';
              amount = amount.toString();
              var atemp = amount.split(".");
              var number = atemp[0].split(",").join("");
              var n_length = number.length;
              var words_string = "";
              if (n_length <= 9) {
                  var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
                  var received_n_array = new Array();
                  for (var i = 0; i < n_length; i++) {
                      received_n_array[i] = number.substr(i, 1);
                  }
                  for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
                      n_array[i] = received_n_array[j];
                  }
                  for (var i = 0, j = 1; i < 9; i++, j++) {
                      if (i == 0 || i == 2 || i == 4 || i == 7) {
                          if (n_array[i] == 1) {
                              n_array[j] = 10 + parseInt(n_array[j]);
                              n_array[i] = 0;
                          }
                      }
                  }
                  value = "";
                  for (var i = 0; i < 9; i++) {
                      if (i == 0 || i == 2 || i == 4 || i == 7) {
                          value = n_array[i] * 10;
                      } else {
                          value = n_array[i];
                      }
                      if (value != 0) {
                          words_string += words[value] + " ";
                      }
                      if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                          words_string += "Crores ";
                      }
                      if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                          words_string += "Lakhs ";
                      }
                      if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                          words_string += "Thousand ";
                      }
                      if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                          words_string += "Hundred and ";
                      } else if (i == 6 && value != 0) {
                          words_string += "Hundred ";
                      }
                  }
                  words_string = words_string.split("  ").join(" ");
              }

              if(words_string != ''){
                    $('#amountinword').empty().append(words_string+' only.'); 
                    $('#amounttext').val(words_string+' only.').val();
              }else{
               $('#amountinword').empty().append(''); 
               $('#amounttext').val('').val();
              }
      }
  
});