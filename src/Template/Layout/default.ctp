<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>



    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    

    <link href="/css/font-face.css" rel="stylesheet" media="all">
    <link href="/webroot/vendor3/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/webroot/vendor3/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/webroot/vendor3/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo $this->request->webroot; ?>vendor3/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="/vendor3/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/vendor3/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/vendor3/wow/animate.css" rel="stylesheet" media="all">
    <link href="/vendor3/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/vendor3/slick/slick.css" rel="stylesheet" media="all">
    <link href="/vendor3/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/vendor3/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/css/theme.css" rel="stylesheet" media="all">
</head>

<body class="animsition">
    <div class="page-wrapper">
        <?php echo $this->element('header_mobile'); ?>
        <?php echo $this->element('menu_sidebar'); ?>

        <div class="page-container">

            <?php echo $this->element('header_desktop'); ?>

            

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <?= $this->fetch('content'); ?>
                        </div>
                    </div>
                </div>
            </div>  

        </div>
        
    </div>

    <script src="/vendor3/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="/vendor3/bootstrap-4.1/popper.min.js"></script>
    <script src="/vendor3/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="/vendor3/slick/slick.min.js">
    </script>
    <script src="/vendor3/wow/wow.min.js"></script>
    <script src="/vendor3/animsition/animsition.min.js"></script>
    <script src="/vendor3/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="/vendor3/counter-up/jquery.waypoints.min.js"></script>
    <script src="/vendor3/counter-up/jquery.counterup.min.js">
    </script>
    <script src="/vendor3/circle-progress/circle-progress.min.js"></script>
    <script src="/vendor3/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/vendor3/chartjs/Chart.bundle.min.js"></script>
    <script src="/vendor3/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="/js/main.js"></script>
</body>

</html>
