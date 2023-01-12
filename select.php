<?php
   
?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="script.js"> </script>
<link rel="stylesheet" href="style.css">

</head>
<form action="" method="POST">
<div class="first">
<label>Service</label>

<select name="acctype"  id="acctype" onChange="getStock()" required>
<option value="instagram">Instagram</option>
<option value="twitter">Bro</option>
<option value="discord">Hello</option>

</select>
</div>
<div class="second">
    <label>Year</label>
<select name="accyear" id="accyear" onChange="getStock()" required>
<option value="2022">2022</option>
<option value="2016">2016</option>
<option value="2016">2016</option>

</select>
</div>
<p>
<div class="third">
<p class="btn btn-secondary total_charge" name="stockBtn" id="stockBtn">Stock: <span name="stockBtn" class="charge_number">0</span></p>
</div>

<buttontype="submit" class="btn round btn-primary btn-min-width mr-1 mb-1">Submit</button>
</form>
<script>
        function getStock() {
            let type_id = $('#acctype').val();
            let year_id = $('#accyear').val();
            let btn = $('#stockBtn');
            
            if (type_id !== '' && year_id !== '') {
                $.ajax({
                    url: 'getstock.php',
                    method: 'GET',
                    beforeSend() {
                        btn.html('<i class="fa fa-spin fa-spinner"></i>');
                    },
                    data: {
                        type_id: type_id,
                        year_id: year_id,
                    },
                }).done((res) => {
                    btn.html(`Stock: <span class="charge_number">${res}</span>`);
                }).fail(() => {
                    console.log('something went wrong');
                })
            }
        }
      </script>

