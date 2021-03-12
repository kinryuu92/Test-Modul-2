<form method="post">
    <div>
        <div>
            <label>Mã mặt hàng </label>
            <input type="text" name="items_id">
        </div>
        <div>
            <label>Tên mặt hàng </label>
            <input type="text" name="items_name">
        </div>
        <div>
            <label>Loại mặt hàng</label>
            <input type="text" name="item">
        </div>
        <div>
            <label>Giá mặt hàng</label>
            <input type="number" name="price">
        </div>
    </div>
    <div>
        <label>Số lượng mặt hàng</label>
        <input type="number" name="amount">
    </div>
    <div>
        <label>Ngày nhập mặt hàng</label>
        <input type="date" name="date_created">
    </div>
    <div>
        <label>Mô tả mặt hàng</label>
        <input type="text" name="item_description">
    </div>

    <div>
        <button type="submit">Thêm</button>
        <button class="btn btn-outline-secondary" onclick="window.history.go(-1); return false;" type="submit">Huỷ
        </button>
    </div>
</form>
