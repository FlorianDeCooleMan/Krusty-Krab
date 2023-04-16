<footer>
    <p>FlorianProGamer™&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p>datum:</p>
	<p id="datum"></p>

	<script>
		var datum = new Date();
		var dag = datum.getDate();
		var maand = datum.getMonth() + 1;
		var jaar = datum.getFullYear();

		document.getElementById("datum").innerHTML = dag + "/" + maand + "/" + jaar;
	</script>
</footer>