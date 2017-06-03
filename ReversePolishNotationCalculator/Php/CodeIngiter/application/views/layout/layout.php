<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
    <html lang="en">

    <?php $this->load->view('shared/header.php'); ?>

    <body>

        <?php $this->load->view('shared/navigation.php'); ?>

        <!-- Page Content -->
        <div class="container">

            <?php $this->load->view($mainContent); ?>

            <?php $this->load->view('shared/footer.php'); ?>

        </div>
        <!-- /.container -->

        <?php
            if (isset($viewSpecificJavascript)) {
                $this->load->view($viewSpecificJavascript);
            }
        ?>

        <?php $this->load->view('shared/javascript.php'); ?>

    </body>

</html>
