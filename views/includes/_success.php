<?php

if(isset($_SESSION['success']) && !empty($_SESSION['success'])){
    echo '<div class="container col-md-6 mt-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            '.$_SESSION['success'].'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
         </div>
        </div>';

    $_SESSION['success']  = "";
}
?>