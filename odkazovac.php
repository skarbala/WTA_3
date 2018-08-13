<?php
require_once '_inc/functions.php';
$data = load_data();
?>
<!doctype html>
<html lang="en">
<?php include 'partials/head.php'; ?>
<link rel="stylesheet" href="css/odkazovac.css">
<script>
    var baseURL = '<?php echo "/_inc/odkazovac/" ?>';
</script>
<body>
<?php include 'partials/navigation.php' ?>

<div class="container">
  <h1 class="text-center">Odkazovač</h1>
  <div class="col-md-6">
    <h3>Novy odkaz</h3>
      <?php require_once "partials/odkazovac/add-new.form.php" ?>

    <h3 class="sin-header">Vsetky odkazy<span>(<?php echo count($data) ?>)</span></h3>
    <div class="sinsListArea">
        <?php if (!empty($data)) : ?>
          <ul class="list-of-sins">
              <?php foreach ($data as $message): ?>
                <li class="sin">
                    <?php echo $message->title ?>
                  <div class="description">
                    <p class="<?php echo ($message->forgiven) ? "" : "pending" ?>">
                        <?php echo ($message->forgiven) ? "forgiven" : "pending" ?></p>
                    <a data="<?php echo $message->id ?>" href="">detail</a>
                  </div>
                </li>
              <?php endforeach ?>
          </ul>
          <button class="btn btn-block" data-toggle="modal" data-target="#sinCityModal">
            Vymaz vsetky
          </button>
        <?php endif ?>
    </div>
  </div>
    <?php include 'partials/odkazovac/detail.php' ?>
  <img src="assets/img/sincity.jpg" alt="" class="sinbadge">
    <? include_once "partials/odkazovac/modal.php" ?>
</div>
</body>
<script src="js/bootstrap.min.js"></script>
<script src="js/odkazovac.js" type="text/javascript"></script>
<script>
    $('#confirm').click(function () {
        $.ajax({
            url: baseURL + 'erase-all-sins.php',
            type: 'GET'
        })
            .done(function () {
                $("#sinCityModal").modal('hide');
                $("div.sinsListArea").remove();
                $("h3.sin-header span").text("(0)");
            })
            .fail(function (msg) {
            })
            .always(function () {
            });
    });
</script>
</html>