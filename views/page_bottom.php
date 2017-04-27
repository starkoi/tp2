<?php
require_once ('views/footer.php');
?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="script/main.js"></script>
<?php
if (isset($_GET['msg_confirmation'])){
    echo "<script type='text/javascript'>alert('Votre message a bien été envoyé.');</script>";
}
?>
</body>
</html>