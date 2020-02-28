<!--StAuth10065: I Prerak Patel, 000825410 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.-->


<?

include 'app.config.php';
include 'app.model.php';

$TPL['controller'] = $_SERVER['PHP_SELF'];
$TPL['results'] = readAllContacts($conn);
$TPL['rowUpdated'] = 2;
$TPL['formErrorFlag'] = 0;
// Switch controller
//
switch ($_REQUEST['act'])
{
    case 'delete':
        $TPL['deleterow'] = getOneContact($conn, $_REQUEST['id']);
        $TPL['deleteFlag'] = "true";
        $TPL['results'] = readAllContacts($conn);
    break;
        
    case 'deleteconfirmed':
        $TPL['rowDeleted'] = deleteContact($conn, $_REQUEST['id']);
        $TPL['results'] = readAllContacts($conn);
        break;
    case 'create':
      createContact($conn, $_REQUEST['fname'],
                       $_REQUEST['lname'],
                       $_REQUEST['phone'],
                       $_REQUEST['email'],
                       $_REQUEST['location'],
                       $_REQUEST['mc'],
                       $_REQUEST['pos'],
                       $_REQUEST['dept']);
        $TPL['createRow'] = 1;
      $TPL['results'] = readAllContacts($conn);
    break;
    case 'update':
       
        if (($_REQUEST['fname'] == trim($_REQUEST['fname']) && strpos($_REQUEST['fname'], ' ') !== false) || strlen($_REQUEST['lname']) <5 || preg_match("/[0-9][0-9]0-9(?:\-)[0-9][0-9][0-9][0-9]/", $_REQUEST['phone']) ){
            $TPL['formErrorFlag'] = 1;
        if($_REQUEST['fname'] == trim($_REQUEST['fname']) && strpos($_REQUEST['fname'], ' ') !== false)
        {
            $TPL['formError'][0] = "First Name must only contain letters numbers only.";
        }
       
        if(strlen($_REQUEST['lname']) <5)
        {
            $TPL['formError'][1] = "Last name not in right format. 5-15 chars. Letters,Numbers only.";
        }
        
        if(preg_match("\d\d\d\-\d\d\d\d", $_REQUEST['phone']))
        {
            $TPL['formError'][2] = "Not a valid phone number (Ex: 123-4567 ).";
        }
        }
        else{
            $TPL['rowUpdated'] = updateContacts($conn, $_REQUEST['fname'],
            $_REQUEST['lname'],
            $_REQUEST['phone'],
            $_REQUEST['email'],
            $_REQUEST['location'],
            $_REQUEST['mc'],
            $_REQUEST['pos'],
            $_REQUEST['dept'],
            $_REQUEST['id']);
            $TPL['results'] = readAllContacts($conn);
        }
        break;
    case 'sendupdate':
      $TPL['updaterow'] = getOneContact($conn, $_REQUEST['id']);
        $TPL['updateFlag'] = "true";
        $TPL['results'] = readAllContacts($conn);
        break;
    case 'sort':
       $TPL['results'] = sortContacts($conn,$_REQUEST['field'],$_REQUEST['dir']);
    break;
    
}

include 'app.view.php';

?>
