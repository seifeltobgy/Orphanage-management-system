<?php
    include_once 'EventModel.php';
    include_once 'EVENTATK.php';
   // include_once 'UpdateEnroll.php';
    $vo=new EventView();
    $vo->Show_AllEvents();

    if(isset($_REQUEST['id']))
    {
        //$m=new Events();
        $l=Events::SelectAllEvInDB();
        Events::MinimizeEv($l,$_REQUEST['id']);
        //$vo->Show_AllEvents();
    }

?>