<?php 
include 'nav.php';
$data = include 'example.php';
echo $data;
?>

<?php 
function getPermission(){
    sleep(2);
    return 2;
}
$permission = getPermission();
?>

<?php if ($permission === 1) : ?>
    <h1>Hello admin</h1>

<?php elseif($permission === 2 ) : ?>
    <h1>Hello mod</h1>

<?php else : ?>
    <h1>Hello guest</h1>
<?php endif;?>