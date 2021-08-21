<table border="1" cellspacing="0" cellpadding="4">
    <caption>Список продуктов</caption>  
    <tr>
        <th>Название</th>
        <th>Цена</th>
        <th>Количество</th>
        <th>Категория</th>
        <th>Ссылка на страницу</th>
    </tr>
    <?php foreach ($products as $product): ?>
    <tr>
        <td><?= $product['name'] ?></td>
        <td><?= $product['price'] ?></td>
        <td><?= $product['quantity'] ?></td>
        <td><?= $product['category'] ?></td>
        <td><a href="/product/<?= $product['id']; ?>/">ссылка на страницу</td>
    </tr>
    <?php endforeach; ?>
</table>