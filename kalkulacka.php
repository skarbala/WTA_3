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

  h1, h2, h3 {
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

  ul.latest-results {
    list-style: none;
  }

  ul.latest-results li {
    float: none;
    font-family: 'Press Start 2P', serif;
    color: #686868;
    font-size: 1.0em;
  }
  div.result-wrapper h3{
    margin-top: 0;
  }

</style>
<body>
<?php include 'partials/navigation.php' ?>
<div class="container">
  <div class="row">
    <h1 class="text-center">Kalkulacka</h1>
    <div class="col-md-4 col-md-offset-1">
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
    <div class="col-md-6 result-wrapper">
      <h3>Posledne vypocty</h3>
      <ul class="latest-results">
      </ul>
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
                var firstNumber = $("#firstInput").val();
                var secondNumber = $("#secondInput").val();
                var result = parseInt(firstNumber) + parseInt(secondNumber);
                $("#result").text(result);
                appendResult(firstNumber, secondNumber, result, "-");
                appendResult(firstNumber, secondNumber, result, "-");
            }
        });

        $("#deduct").click(function () {
            validateInput();
            validateSecondInput();
            if (validateInput() && validateSecondInput()) {
                var firstNumber = $("#firstInput").val();
                var secondNumber = $("#secondInput").val();
                var result = parseInt(firstNumber) - parseInt(secondNumber);
                $("#result").text(result);
                appendResult(firstNumber, secondNumber, result, "-");
            }
        });
        $("#multiply").click(function () {
            multiply();
        });

        $("#divide").click(function () {
            validateInput();
            validateSecondInput();
            if (validateInput() && validateSecondInput()) {
                var firstNumber = $("#firstInput").val();
                var secondNumber = $("#secondInput").val();
                var result = parseInt(firstNumber) / parseInt(secondNumber);
                $("#result").text(result);
                appendResult(firstNumber, secondNumber, result, "/");
            }
        });

        $("#reset").click(function () {
            $("#firstInput").val("");
            $("#secondInput").val("vynulovane");
            $("#result").text("");
        });

        function appendResult(firstNumber, secondNumber, result, method) {
            var resultList = $("ul.latest-results");
            resultList.append("<li>" + firstNumber + "" + method + "" + secondNumber + " = " + result + "</li>");
        }
    });

</script>

</html>