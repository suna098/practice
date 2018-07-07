<HTML>
<head>
<title>テキスト送信のテスト</title>
<meta httm-equiv="Content-Type" content="text/html" charset="utf-8">

</head>


<body bgcolor="#FFFFFF" text="#000000">
<?php
print "REQUEST";
print "<br><br>";
print $_REQUEST[0];
print $_POST["onamae"]."さんからのメッセージ";
print "<br><br>";
print "本文 : <br>";
print nl2br($_POST["honbun"]);
print $_POST["Host"];

?>


</body>
</HTML>
