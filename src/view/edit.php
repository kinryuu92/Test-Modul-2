<form method="post">
    <?php foreach ($items as $key => $item) ?>
    <div>
        <div>
            <span></span>
            <input type="hidden"value="<?php echo $item['id'] ?>">
        </div>
        <div>
            <span>Mã mặt hàng </span>
            <input type="number" name="items_id" value="<?php echo $item['items_id'] ?>">
        </div>
        <div>
            <span>Tên mặt hàng </span>
            <input type="text" name="items_name" value="<?php echo $item['items_name'] ?>">
        </div>

        <div>
            <span>Loại mặt hàng </span>
            <input type="text" name="item" value="<?php echo $item['item'] ?>">
        </div>
        <div>
            <span>Giá mặt hàng</span>
            <input type="number" name="price" value="<?php echo $item['price'] ?>">
        </div>
        <div>
            <span>Số lượng mặt hàng</span>
            <input type="number" name="amount" value="<?php echo $item['amount'] ?>">

        </div >
        <div>
            <span>Ngày nhập mặt hàng</span>
            <input type="date" name="date_created" value="<?php echo $item['date_created'] ?>">

        </div >
        <div>
            <span>Mô tả mặt hàng</span>
            <input type="text" name="item_description" value="<?php echo $item['item_description'] ?>">

        </div >
    </div>
    <div style="margin-top: 20px">
        <button class="btn btn-outline-warning" type="submit">Sửa</button>
<!--        <button class="btn btn-outline-secondary" onclick="window.history.go(-1); return false;" type="submit">Huỷ</button>-->
    </div>
</form>
