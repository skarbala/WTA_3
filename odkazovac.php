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
    <h3>Nový odkaz</h3>
      <?php require_once "partials/odkazovac/add-new.form.php" ?>

    <h3 class="sin-header">Všetky odkazy<span>(<?php echo count($data) ?>)</span></h3>
    <div class="sinsListArea">
        <?php if (!empty($data)) : ?>
          <ul class="list-of-sins">
              <?php foreach ($data as $message): ?>
                <li class="sin">
                    <?php echo $message->title ?>
                  <div class="description">
                    <a data="<?php echo $message->id ?>" href="">detail</a>
                  </div>
                </li>
              <?php endforeach ?>
          </ul>
          <button class="btn btn-block" data-toggle="modal" data-target="#sinCityModal">
            Vymaž všetky
          </button>
        <?php endif ?>
    </div>
  </div>
    <?php include 'partials/odkazovac/detail.php' ?>
    <?php include_once "partials/odkazovac/modal.php" ?>
</div>
<?php include_once "partials/odkazovac/modal_delete_one.php" ?>

</body>

<script src="js/bootstrap.min.js"></script>
<script src="js/odkazovac.js" type="text/javascript"></script>
<script>

</script>
</html>