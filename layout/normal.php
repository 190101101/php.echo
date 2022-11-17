<?php $admin = new core\controller; ?>
<!doctype html>
<html lang="en">
    <head>
        <?php $admin->view('admin', 'requires', 'admin/css'); ?>
    </head>
    <body>
        <div id="wrapper">
            <?php $admin->view('admin', 'requires', 'panel/history'); ?>
            <?php $admin->view('admin', 'requires', 'panel/navbar'); ?>
            <div class="wrap">
                <div class="main_content">
                    <div class="inner_content">
                        <?php $admin->view('admin', 'requires', 'admin/sidebar'); ?>
                        <div class="page_content">
                            <div class="page_head">
                                <?php echo breadcump(); ?>
                            </div>
                        <?php echo $data['VIEW']; ?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $admin->view('admin', 'requires', 'admin/js'); ?>
    </body>
</html>

