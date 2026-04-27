<?php
session_start();
session_destroy();

header("Location: /eresa/index.php"); // kembali ke home
exit;