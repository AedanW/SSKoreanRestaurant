<p> Thank you for your order<p><br>
<p> Sending email confirmation<p>
<?php
    if(filter_input(INPUT_POST, 'SendOrder')){
        $Order = filter_input(INPUT_POST, 'SendOrder');
        ##Send SQL Order
        echo $Order[0];
        echo $Order[1];
        
      
    } else{
        echo'<p>Something went Wrong</p>';
    }

