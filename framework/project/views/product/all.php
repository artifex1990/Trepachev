<table border="1" cellspacing="0" cellpadding="4">
    <caption>Список продуктов</caption>  
    <tr>
        <th>Название</th>
        <th>Цена</th>
        <th>Количество</th>
        <th>Категория</th>
    </tr>
    <?php foreach ($products as $product): ?>
    <tr>
        <td><?= $product['name'] ?></td>
        <td><?= $product['price'] ?></td>
        <td><?= $product['quantity'] ?></td>
        <td><?= $product['category'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>