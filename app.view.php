<!--StAuth10065: I Prerak Patel, 000825410 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.-->


<html>
<head>
<style>
  .the-legend {
    border-style: none;
    border-width: 0;
    font-size: 14px;
    line-height: 20px;
    margin-bottom: 0;
    width: auto;
    padding: 0 10px;
}
.the-fieldset {
    padding: 10px;    
}
</style>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">

  <div class="form-group shadow-lg p-3 mb-5 bg-white rounded">
    <fieldset class="the-fieldset">
      <legend class="the-legend" align="center"><h1>Phonebook CRUD Web App</h1></legend>


<form id='phonebook' method="post" action="">
<div class="form-row">
<div class="form-group col-md-6">
  <strong>First Name:</strong>
  <input name="fname" type="text" id="fname" class="form-control" size="40" required value="<?php echo $TPL['updaterow'][0]['fname']; ?>" /> <br>
</div>
<div class="form-group col-md-6">
  <strong>Last Name:</strong>
  <input name="lname" minlength=5 type="text" id="lname" size="40" required class="form-control" value="<?php echo $TPL['updaterow'][0]['lname']; ?>" /> <br>
</div>
 </div>
<div class="form-row">
<div class="form-group col-md-4">
  <strong>Phone:</strong> <br>
  <input name="phone" type="text" id="phone" size="40" required class="form-control" value="<?php echo $TPL['updaterow'][0]['phone']; ?>"  /> <br>
</div>
<div class="form-group col-md-4">
  <strong>Email:</strong> <br>
  <input name="email" type="email" id="owner" size="40" required class="form-control" value="<?php echo $TPL['updaterow'][0]['email']; ?>" /> <br>
</div>
<div class="form-group col-md-4">
  <strong>Location:</strong> <br>
  <input name="location" type="text" id="owner" size="40" required class="form-control" value="<?php echo $TPL['updaterow'][0]['location']; ?>" /> <br>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-4">
  <strong>MC:</strong>
  <input name="mc" type="text" id="owner" size="40" required class="form-control" value="<?php echo $TPL['updaterow'][0]['mc']; ?>"  /> <br>
</div>
<div class="form-group col-md-4">
  <strong>POS:</strong>
  <input name="pos" type="text" id="image" size="120" required class="form-control" value="<?php echo $TPL['updaterow'][0]['pos']; ?>" /> <br>
</div>
<div class="form-group col-md-4">
  <strong>Dept:</strong>
  <input name="dept" type="text" id="image" size="120" required class="form-control" value="<?php echo $TPL['updaterow'][0]['dept']; ?>" /> <br>
</div>
</div>
<?php if ($TPL['updateFlag'] != "true") { ?><button type="submit" class="btn btn-dark" align="center" formaction="<?= $TPL['controller']?>?act=create">Create</button> <?php }?>
<?php if ($TPL['updateFlag'] == "true") { ?> <button type="submit" class="btn btn-dark" align="center" formaction="<?= $TPL['controller']?>?act=update&id=<?=$TPL['updaterow'][0]['id']?>">Update </button> <?php } ?>
</fieldset>
</form>
</fieldset>
</div>


<table class="table table-hover table-responsive shadow p-3 mb-5 bg-white rounded" width="100%">
<thead>
<tr>
  <th colspan="10"><strong align="center"> All Contacts</strong></th>
</tr>
<tr>
<th><strong>ID&nbsp;&nbsp;<br><p><a href="<?= $TPL['controller']?>?act=sort&field=id&dir=up"><i class="fa fa-chevron-up"></i></a><a href="<?= $TPL['controller']?>?act=sort&field=id&dir=down"><i class="fa fa-chevron-down"></i></a></p></strong></td>
  <th><strong>First Name&nbsp;&nbsp;<br><p><a href="<?= $TPL['controller']?>?act=sort&field=fname&dir=up"><i class="fa fa-chevron-up"></i></a><a href="<?= $TPL['controller']?>?act=sort&field=fname&dir=down"><i class="fas fa-chevron-down"></i></a></p></strong></td>
  <th><strong>Last Name&nbsp;&nbsp;<br><p><a href="<?= $TPL['controller']?>?act=sort&field=lname&dir=up"><i class="fa fa-chevron-up"></i></a><a href="<?= $TPL['controller']?>?act=sort&field=lname&dir=down"><i class="fas fa-chevron-down"></i></a></p></strong></td>
  <th><strong>Phone&nbsp;&nbsp;<br><p><a href="<?= $TPL['controller']?>?act=sort&field=phone&dir=up"><i class="fas fa-chevron-up"></i></a><a href="<?= $TPL['controller']?>?act=sort&field=phone&dir=down"><i class="fas fa-chevron-down"></i></a></strong></p></td>
  <th><strong>Email&nbsp;&nbsp;<br><p><a href="<?= $TPL['controller']?>?act=sort&field=email&dir=up"><i class="fas fa-chevron-up"></i></a><a href="<?= $TPL['controller']?>?act=sort&field=email&dir=down"><i class="fas fa-chevron-down"></i></a></strong></p></td>
  <th><strong>Location&nbsp;&nbsp;<br><p><a href="<?= $TPL['controller']?>?act=sort&field=location&dir=up"><i class="fas fa-chevron-up"></i></a><a href="<?= $TPL['controller']?>?act=sort&field=location&dir=down"><i class="fas fa-chevron-down"></i></a></strong></p></td>
  <th><strong>MC&nbsp;&nbsp;<br><p><a href="<?= $TPL['controller']?>?act=sort&field=mc&dir=up"><i class="fas fa-chevron-up"></i></a><a href="<?= $TPL['controller']?>?act=sort&field=mc&dir=down"><i class="fas fa-chevron-down"></i></a></strong></p></td>
  <th scope="col"><strong>POS&nbsp;&nbsp;<br><p><a href="<?= $TPL['controller']?>?act=sort&field=pos&dir=up"><i class="fas fa-chevron-up"></i></a><a href="<?= $TPL['controller']?>?act=sort&field=pos&dir=down"><i class="fas fa-chevron-down"></i></a></strong></p></td>
  <th><strong>Dept&nbsp;&nbsp;<br><p><a href="<?= $TPL['controller']?>?act=sort&field=dept&dir=up"><i class="fas fa-chevron-up"></i></a><a href="<?= $TPL['controller']?>?act=sort&field=dept&dir=down"><i class="fas fa-chevron-down"></i></a></strong></p></td>
  <th scope="col"><strong>Actions</strong><br><p> <i class="fas fa-trash-alt fa-lg" style="color:#ff6161;"></i>  <i class="far fa-edit fa-lg"></i> </p></td>
</tr>
</thead>
<tbody>

<?php if($TPL['formErrorFlag'] == 1){ ?> <div class="alert alert-danger" role="alert"> <?= $TPL['formError'][0] . " " . $TPL['formError'][1] ?> </div> <?php } ?>
    
<?php if($TPL['rowUpdated']== 0 || $TPL['rowUpdated']== 1  ){  ?><div class="alert alert-success" role="alert"> <?php echo $TPL['rowUpdated'] ." record(s) were successfully updated."; ?> </div><?php }?>


<?php if($TPL['createRow']== 1){  ?><div class="alert alert-success" role="alert"> <?php echo "Record Successfully inserted."; ?> </div><?php }?>

<?php if($TPL['rowDeleted']!= 0){  ?><div class="alert alert-success" role="alert"> <?php echo $TPL['rowDeleted'][0] . " record(s) with ID = " .  $TPL['rowDeleted'][1] . " was deleted."; ?> </div><?php }?>


<?php if ($TPL['deleteFlag'] == "true") { ?>   <div class="alert alert-danger" role="alert"><span> Click <a href= "<?=$TPL['controller']?>?act=deleteconfirmed&id=<?=$TPL['deleterow'][0]['id']?>">here</a> if you really want to delete user: <?php echo $TPL['deleterow'][0]['fname'] . " " . $TPL['deleterow'][0]['lname'] . " (" . $TPL['deleterow'][0]['id'] . ")" ?></span> </div><?php }?>

<? foreach ($TPL['results'] as $row) { ?>
<tr>
    <th scope="row"><?=$row['id']?></td>
    <td><?=$row['fname']?></td>
    <td><?=$row['lname']?></td>
    <td><?=$row['phone']?></td>
    <td><?=$row['email']?></td>
    <td><?=$row['location']?></td>
    <td><?=$row['mc']?></td>
    <td><?=$row['pos']?></td>
    <td><?=$row['dept']?></td>
    <td><a href="<?=$TPL['controller']?>?act=delete&id=<?=$row['id']?>" ><i class="fas fa-trash-alt fa-lg" style="color:#ff6161;"></i></a>&nbsp;&nbsp;<a href="<?=$TPL['controller']?>?act=sendupdate&id=<?=$row['id']?>"><i class="far fa-edit fa-lg"></i></i></a>
</tr>
    </tbody>
<? } ?>
</table>
</div>
</body>
</html>
