
    <?php

        header('Content-Type: application/json');
        error_reporting(E_ALL);
        ini_set('display_errors', '1');
        require('../DB.php');
        $n = new ConnectionDB;
        $n->Connection();
        $sql = 'select * from user inner join userOrder on user.id = userOrder.idUser inner join orders on orders.idOrder = userOrder.idOrder;';
        $stataus = $n->db->prepare($sql);
        $stataus->execute();
        $result = $stataus->fetchAll(PDO::FETCH_ASSOC);

        // $arr = array();
        // foreach($result as $x){
        //     array_push($arr,$x);
        // }
        print_r(json_encode($result));
    ?>
