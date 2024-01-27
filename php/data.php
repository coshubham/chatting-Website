<?php
while($row = mysqli_fetch_assoc($sql)){
  $sql2= "SELECT * FROM messages WHERE (incoming_id ={$row['unique_id']}
             OR outgoing_id ={$row['unique_id']}) AND (outgoing_id ={$outgoing_id}
             OR outgoing_id ={$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
    $query2 = mysqli_query($conn, $sql2);
    $row2 =mysqli_fetch_assoc($query2);
    if(mysqli_num_rows($query2) > 0){
      $result  = $row2['message'];
    } else{
      $result ="No message available";
    }    
    // trimming message if word are more than 28
    (strlen($result) > 28) ? $message = substr($result, 0, 28).'...' : $message = $result;

    // user online hai ya offline hai check kar na ka liya
    ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";

    $output .= '<a href="chat.php?user_id='.$row['unique_id'].'">
                        <div class="content">
                        <img src="php/images/'.$row['img'].'" alt="">
                        <div class="details">
                         <span>'. $row['fname'] . " " . $row['lname'] .'</span>
                         <p>'.$message.'</p>
                        </div>
                        </div>
                       <div class="status-dot '.$offline.'"><i class="fas far fa-circle"></i></div>
                       </a>';
  }
?>