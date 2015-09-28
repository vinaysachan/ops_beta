<!DOCTYPE html>
<html>
    <?php /* => Admin Header Page */ $this->load->view("admin_panel/header"); ?>
    <body>
        <?php
        /* => Admin Header Menu */
        $this->load->view("admin_panel/header_menu");
        /* => Admin Left Side */
        $this->load->view("admin_panel/left_side");
        ?>
        <div class="pageContent extended" style="">
            <div class="container-fluid">
                <div class="row">
                    <h1>Page Header</h1>
                    <div class="content"> 
                        <?php $this->load->view("admin_panel/views/$view"); ?>
                    </div>
                </div> 
            </div> 
        </div>  


        <?php
        /* => Admin Left Side */
        $this->load->view("admin_panel/footer");
        ?>
    </body>
</html>



