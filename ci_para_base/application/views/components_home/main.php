<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('components_home/head', $css) ?>

<body class="landing-page bg-secondary">

<?php $this->load->view('components_home/header') ?>

<?php $this->load->view($subview) ?>


<?php $this->load->view('components_home/footer') ?>


<?php $this->load->view('components_home/script_js', $js) ?>



</body>
</html>
