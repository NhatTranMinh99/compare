<!DOCTYPE html>
<html>

<head>
    <title>PTIT CTF 2020</title>
</head>
<body>
    <code>
        <span style="color: #000000">
        <span style="color: #0000BB">&lt;?php
        <br /></span><span style="color: #0000BB">$ptit</span><span style="color: #007700"> = </span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'ptit'</span><span style="color: #007700">];
        <br /></span><span style="color: #0000BB">$ctf</span><span style="color: #007700"> = </span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'ctf'</span><span style="color: #007700">];
        <br />if(</span><span style="color: #0000BB">$ptit</span><span style="color: #007700"> == </span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">and&nbsp;</span><span style="color: #0000BB">$ptit</span><span style="color: #007700">){
        <br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$flag1</span><span style="color: #007700">;
        <br />}
        <br />if(</span><span style="color: #0000BB">is_numeric</span><span style="color: #007700">(</span><span style="color: #0000BB">$ctf</span><span style="color: #007700">)){
        <br />&nbsp;&nbsp;&nbsp;&nbsp;exit();
        <br />}
        <br />if(</span><span style="color: #0000BB">$ctf</span><span style="color: #007700">&gt;</span><span style="color: #0000BB" > 999</span><span style="color: #007700">){
        <br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$flag2</span><span style="color: #007700">;
        <br />}
        <br /></span><span style="color: #0000BB">?&gt;
        <br /></span>
        <br /></span>
    </code>

    <?php
        include("./secret/flag.php");
	$ptit = $_GET['ptit'];
	$ctf = $_GET['ctf'];
	if($ptit == 0 and $ptit) {
	    echo $flag1;
	}
	if(is_numeric($ctf)) {
	    exit();
	}
	if($ctf > 999) {
	    echo $flag2;
	}
    ?>
</body>

</html>
