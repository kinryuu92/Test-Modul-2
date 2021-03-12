
<a href="index.php?page=items">Danh sách sản phẩm </a>
<a href="index.php?page=add">Thêm sản phẩm </a>
<?php
ob_start();

use App\Controller\itemController;

require __DIR__ . '/vendor/autoload.php';
$page = isset($_GET['page']) ? $_REQUEST['page'] : '';
$itemsController = new itemController();
?>

<?php
switch ($page) {
    case 'items':
        $itemsController->index();
        break;
    case 'add':
        $itemsController->addItems();
        break;
    case 'delete':
        $itemsController->delete();
        break;
    case 'edit':
        $itemsController->edit();
        break;
}
ob_end_flush();
?>
