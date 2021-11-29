<?php

if(isset($_SESSION['errors']) && count($_SESSION['errors']) > 0){
    echo '<div class="container col-md-6 mt-3">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">';

            foreach ($_SESSION['errors']['msg'] as $msg) {
                echo $msg;
            }

    echo        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
         </div>
        </div>';

    $_SESSION['errors']  = [];
}
?>