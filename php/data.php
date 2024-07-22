<?php
while ($row = mysqli_fetch_assoc($sql)) {
    $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
            OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoind_id}
            OR outgoing_msg_id = {$outgoind_id}) ORDER BY msg_id DESC LIMIT 1";
    $query = mysqli_query($conn, $sql2);

    $row2 = mysqli_fetch_assoc($query);
    if (mysqli_num_rows($query) > 0) {
        $result = $row2['msg'];
    } else {
        echo 'No message availabel';
    }

    // Trim msg, if word length more than 28 character
    (strlen($result) > 28) ? $msg = substr($result, 0, 28) : $msg = $result;
    $output .= '<a href="chat.php?user_id=' . $row['unique_id'] . '">
                    <div class="content">
                        <img src="php/images/' . $row['img'] . '" alt="Profile">
                        <div class="details">
                            <span>' . $row['fname'] . ' ' . $row['lname'] . '</span>
                            <p>' . $msg . '</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>';
}

?>