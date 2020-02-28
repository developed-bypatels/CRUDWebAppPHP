<!--StAuth10065: I Prerak Patel, 000825410 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.-->


<?

function deleteContact($conn, $id)
{
    try {
      $stmt = $conn->prepare("DELETE FROM phonebook WHERE id=?");
      $stmt->execute([$id]);
      $rowsAffected[0] = $stmt->rowCount();
      $rowsAffected[1] = $id;
    } catch (PDOException $e)
    {
      echo "Delete failed: " . $e->getMessage();
      exit();
        include 'app.error.view.php';
    }
    return $rowsAffected;
}

function createContact($conn, $fname, $lname, $phone, $email, $location, $mc, $pos, $dept)
{
    try {
      $stmt = $conn->prepare("INSERT INTO phonebook " ."(id,fname,lname,phone,email,location,mc,pos,dept) VALUES " ."(?, ?, ?, ?, ?, ?, ?, ?, ?)");
      $stmt->execute(["null",$fname, $lname, $phone, $email, $location, $mc, $pos, $dept]);
    } catch (PDOException $e)
    {
      echo "Create failed: " . $e->getMessage();
      include 'app.error.view.php';
      exit();
    }
}

function readAllContacts($conn)
{
    $results = array();
    
    try
    {
        $stmt = $conn->prepare("SELECT * FROM phonebook");
        $stmt->execute();
        while ($nextRow = $stmt->fetch()) $results[] = $nextRow;
        
    }
    catch (PDOException $e)
    {
        echo "Select failed: " . $e->getMessage();
        include 'app.error.view.php';
        exit();
    }
    
    return $results;
}

function getOneContact($conn, $id)
{
    try {
      $stmt1 = $conn->prepare("SELECT * FROM phonebook WHERE id=? ");
      $stmt1->execute([$id]);
      //$stmt = $conn->prepare("UPDATE phonebook SET WHERE id=?");
      //$stmt->execute([$id]);
        while ($nextRow = $stmt1->fetch()) $res[] = $nextRow;
        //print_r($TPL['updaterow']);
    } catch (PDOException $e)
    {
      echo "Update failed: " . $e->getMessage();
      include 'app.error.view.php';
      exit();
    }
    return $res;
}

function updateContacts($conn, $fname, $lname, $phone, $email, $location, $mc, $pos, $dept, $id)
{
    try {
      $stmt = $conn->prepare("UPDATE phonebook SET fname = ?,lname = ?,phone = ?,email = ?, location = ?,mc = ?,pos = ?,dept = ?  WHERE id = ?");
      $stmt->execute([$fname, $lname, $phone, $email, $location, $mc, $pos, $dept, $id]);
        $rowsAffected = $stmt->rowCount();
    } catch (PDOException $e)
    {
      echo "Update failed: " . $e->getMessage();
        include 'app.error.view.php';
      exit();
    }
    return $rowsAffected;
}

function sortContacts($conn, $field, $dir)
{
    try {
      switch($dir)
      {
          case 'up':
              $stmt = $conn->prepare("SELECT * FROM phonebook ORDER BY $field ASC;");
              $stmt->execute([$field]);
              while ($nextRow = $stmt->fetch()) $results[] = $nextRow;
              break;
          case 'down':
              $stmt = $conn->prepare("SELECT * FROM phonebook ORDER BY $field DESC");
              $stmt->execute();
              while ($nextRow = $stmt->fetch()) $results[] = $nextRow;
              break;
      }
    
    } catch (PDOException $e)
    {
      echo "Delete failed: " . $e->getMessage();
        include 'app.error.view.php';
      exit();
    }
    return $results;
}
?>
