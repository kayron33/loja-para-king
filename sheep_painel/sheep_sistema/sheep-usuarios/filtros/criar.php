<!-- Main Content -->
<div class="main-content">

<?php 

$criar = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
if(isset($criar['sendSheep'])){

        unset($criar['sendSheep']);

        $criar['foto'] = ($_FILES['foto']['tmp_name'] ? $_FILES['foto'] : null);

        var_dump($criar);
}
?>
</div>