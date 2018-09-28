<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CalCrypt</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <link href="css/aos.css" rel="stylesheet">
  </head>
  <body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<label class="badge badge-secondary">Bought Price</label>
				<input onkeyup="calculate();" type="text" value="" name="current" class="form-control" placeholder="Bought Price" /> <br>
				<label class="badge badge-secondary">Current Price</label>
				<input onkeyup="calculate();" type="text" value="" name="new" class="form-control" placeholder="Current Price" /><br>
				<hr>
				<label class="result"></label>% of <input onkeyup="calculate();" placeholder="Purchased" type="text" name="bought" /> = <label class="plusminus"></label><br>
				<hr>				
				<label class="badge badge-secondary">Total</label> <label class="finalResult"></label><br>				
			</div>
		</div>
	</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script>
      AOS.init();
	  $(document).ready(function(){
		calculate();
	  });
	  function calculate(){		
		var inputCurrent = $('input[name="current"]').val(),
		inputNew = $('input[name="new"]').val(),		
		increase = inputNew - inputCurrent,		
		increasePercent = (increase / inputCurrent)*100;
		
		$('.result').html(increasePercent);
		
		var boughtPrice = $('input[name="bought"]').val(),
		result = $('.result').html(),
		plusMinus = (boughtPrice * result) / 100;
		
		console.log(plusMinus);
		
		
		if(plusMinus < 0){
			finalResult = boughtPrice - Math.abs(plusMinus);
		}else{
			finalResult = Math.abs(boughtPrice) + Math.abs(plusMinus);
		}
		
		$('.plusminus').html(plusMinus);
		$('.finalResult').html(finalResult);
	  }
    </script>
  </body>
</html>
