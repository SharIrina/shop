<?php

include './template/header.php';

$product = $products [$_REQUEST['id'] ?? 0];
$success = false;
$error = false;

if (! empty ($_POST)) {

    if (empty($_POST ['name']) || strlen($_POST)<=0) {
        $error = true;
    } else {
        if (makeORder ( $product, $_POST ['name'])) {
            $success = true;
        } else {
            $error=true;
        }
    }
}

?>
        <h1>Покупка</h1>

        <?php if ($success) {?>
            <p class="success">
            Ваша покупка оформлена
            </p>
        <?php } else {?>
        
        <?php if ($error) {?>
            <p class="error">
            Нужно выбрать товар и заполнить ваше фио
            </p>
        <?php }?>

            <div class="items">
                <figure>
                    <p><img src="<?=$product['img']?>" alt="" /></p>
                    <figcaption><?=$product['name']?></figcaption>
                </figure>    
            </div>

            <form action="/form.php?>" method="post">
            <input type = "hidden" name="id" value="<?=$product['id']?>">
                <label>
                    Ваше ФИО*:
                    <input type = "text" name="name" placeholder="Введите ваше фио" value="<?=htmlspecialchars($_POST['name'] ?? '') ?>">
                </label>
                <input type = "submit" class="btn" value="Купить">
            </form>
        <?php } ?>
        <?php include _DIR_ . '/template/footer.php'; ?>
    