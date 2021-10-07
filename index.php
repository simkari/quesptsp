<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Survey Ptsp Kejari Kota Pekalongan</title>

    <style type="text/css">

body {
      background-color: green;
  opacity: 1;
}


/* HIDE RADIO */
[type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
[type=radio] + img {
  cursor: pointer;
}

/* CHECKED STYLES */
[type=radio]:checked + img {
  outline: 2px solid #f00;
}

    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <br><br>
              <a href="./indexgrafik.php"><button type="button">Charts!</button></a>
              <br><br>
                <h2 class="text-center">Apakah Anda Puas dengan Pelayanan Kami ?</h2>
                <!-- div class="input-group mt-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <input type="radio" aria-label="Radio button for following text input" name="jawaban" value="baik">
                    </div>
                  </div>
                  <input type="text" class="form-control" aria-label="Text input with radio button" value="Baik" disabled>
                </div>
                <div class="input-group mt-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <input type="radio" aria-label="Radio button for following text input" name="jawaban" value="biasa">
                    </div>
                  </div>
                  <input type="text" class="form-control" aria-label="Text input with radio button" value="Biasa" disabled>
                </div>
                <div class="input-group mt-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <input type="radio" aria-label="Radio button for following text input" name="jawaban" value="buruk">
                    </div>
                  </div>
                  <input type="text" class="form-control" aria-label="Text input with radio button" value="Buruk" disabled>
                </div>
            </div -->
             <center><p>Silahkan Pilih Salah Satu </p></center>
             <center>
<label>
  <input type="radio" name="jawaban" value="baik">
  <img src="./iconbaik.png" width="200">
</label>

<label>
  <input type="radio" name="jawaban" value="biasa">
  <img src="./iconbiasa.png" width="200">
</label>

<label>
  <input type="radio" name="jawaban" value="buruk">
  <img src="./iconburuk.png" width="200">
</label>
		</center>

    <!--div class="cc-selector">
        <input type="radio" name="jawaban" value="baik" />
        <label class="drinkcard-cc baik" for="baik"></label>
        <input  type="radio" name="jawaban" value="biasa" />
        <label class="drinkcard-cc biasa" for="biasa"></label>
        <input type="radio" name="jawaban" value="buruk" />
        <label class="drinkcard-cc buruk" for="buruk"></label>

        <input type="radio" name="jawaban" value="visa" />
        <label class="drinkcard-cc visa" for="visa"></label>
        </div -->

        <div class="row">
            <div class="col-md-12">
                <div id="result" class="d-none"></div>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    $(document).ready(function(){
        $('input[type="radio"]').click(function(){
            var jk = $(this).val();
            console.log(jk)
            function setHide(){
                setTimeout(function(){
                    $("#result").removeClass("d-block")
                    $("#result").addClass("d-none")
                },2000)
            }
            $.ajax({
                url: "proses.php",
                method: "POST",
                data: {jawaban: jk},
                success: function(data){
                	
                    $("#result").removeClass("d-none")
                    $("#result").addClass("d-block")
                    $("#result").html(data)
                    setHide()
                    setTimeout(function() 
 					 {
    					//location.reload();
   						// window.location('index-sukses.php');
    					location.replace("./index-sukses.php");
  					 }, 2000);
                 //  alert("Terimakasih atas Ulasannya"); 
                }
            })
        })
    })
</script>
<nav class="navbar fixed-bottom navbar-light bg-light">
  <a class="navbar-brand" href="#">Kejaksaan Negeri Kota Pekalongan</a>
</nav>
</body>
</html>