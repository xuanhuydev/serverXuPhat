<?php
$mysqli = mysqli_connect("localhost","root","","xuphat");
$mysqli -> set_charset('utf8');
if( mysqli_connect_errno() ){
  echo 'fail';
}
$query = "SELECT * FROM xuphat WHERE 1 LIMIT 0,25";
$data = $mysqli->query($query);
while ($item = $data->fetch_array()) {

   $tenLoi =  $item['ten_loi'];
   $mucPhat = $item['muc_phat'];
   $loi = new LoiViPham();
   print_r($loi->render(1,2));
   die;
}



class LoiViPham {
  private $tenLoi;
  private $mucPhat;
  public function render($tenLoi,$mucPhat){
    $this->tenLoi = $tenLoi;
    $this->mucPhat = $mucPhat;
    echo  $tenLoi.' | '.$mucPhat;
  }
}
