<?php 
session_start();
if(isset($_SESSION['examineeSession']['examineenakalogin']) == true) header("location:home.php");

 ?>

<?php 

include("login-ui/index.php");


 ?>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/sweetalert.js"></script>      <!-- Author Name: Mupo Mubita 

* Not for commercial user. For educational purposes only 

* for any development mubitamupo@gmail.com whatsapp: +260760457622

-->  