<!DOCTYPE html>
<html>
<?php include 'partials/head.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

<style>
  input {
    margin-bottom: 10px;
  }

  button.btn {
    margin-bottom: 20px;
  }

  body {
    background-color: #fdfdfd;
  }

  h1 {
    font-size: 40px;
    margin-bottom: 50px;

  }

  h1, h2 {
    font-family: 'Press Start 2P', serif;
    color: #4d4d4d;
    text-shadow: 2px 2px 1px #a3a4a6;
  }

  button.btn, input.form-control {
    border-radius: 0;
  }

  button.btn {
    margin: 0;
  }

  #result {
    margin: 30px 0;
  }

</style>
<body>
<?php include 'partials/navigation.php' ?>
<div class="container">
  <div class="row">
    <h1 class="text-center">Kalkulacka</h1>
    <div class="col-md-6 col-md-offset-3">
      <div>
        <div>
          <input type="text" class="form-control" id="firstInput" placeholder="prve cislo">
        </div>
        <div>
          <input type="text" class="form-control" id="secondInput" placeholder="druhe cislo">
        </div>
        <button id="count" class="btn btn-success btn-block">Spocitaj</button>
        <button id="deduct" class="btn btn-danger btn-block">Odpocitaj</button>
        <button id="multiply" class="btn btn-primary btn-block">Vynasob</button>
        <button id="divide" class="btn btn-warning btn-block">Vydel</button>
        <button id="reset" class="btn btn-default btn-block">Vynuluj</button>
      </div>
      <div class="text-center">
        <h1>Výsledok</h1>
        <h2 id="result"></h2>
      </div>
    </div>
  </div>
</div>
</body>
<script>
    $(document).ready(function () {

        function validateInput() {
            var firstInput = $("#firstInput");
            if (!$.isNumeric(firstInput.val())) {
                $(firstInput).parent().addClass("has-error");
                return false;
            }
            $(firstInput).parent().removeClass("has-error");
            return true;
        }

        function validateSecondInput() {
            var secondInput = $("#secondInput");
            if (!$.isNumeric(secondInput.val())) {
                return false;
            }
            return true;
        }

        $("#count").click(function () {
            validateInput();
            validateSecondInput();
            if (validateInput() && validateSecondInput()) {
                $("#result").text(parseInt($("#firstInput").val()) + parseInt($("#secondInput").val()));
            }
        });

        $("#deduct").click(function () {
            validateInput();
            validateSecondInput();
            if (validateInput() && validateSecondInput()) {
                $("#result").text(parseInt($("#firstInput").val()) - parseInt($("#secondInput").val()));
            }
        });
        $("#multiply").click(function () {
            multiply();
        });

        $("#divide").click(function () {
            validateInput();
            validateSecondInput();
            if (validateInput() && validateSecondInput()) {
                $("#result").text(parseInt($("#firstInput").val()) / parseInt($("#secondInput").val()));
            }
        });

        $("#reset").click(function () {
            $("#firstInput").val("");
            $("#secondInput").val("vynulovane");
            $("#result").text("");
        });
    });

</script>

</html>