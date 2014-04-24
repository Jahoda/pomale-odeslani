<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pomalé odeslání</title>
	<style>
		.nacitani {background: url(http://jecas.cz/files/ajax/ajax-loading.gif) center center; width: 1em; height: 1em; display: inline-block;}
	</style>
</head>
<body>
	<script>
		var odesilaSe = false,
			nacitani = document.createElement("span");
			odeslat = function(formular) {
				if (!odesilaSe) {
					nacitani.className = "nacitani";
					formular.appendChild(nacitani);
					formular.onsubmit = function() {
						return false;
					}
				}
			}

	</script>
	<form action="vysledek.php" onsubmit="odeslat(this)">
		<input type="text" value="jmeno">
		<button type="submit">Odeslat</button>
	</form>

	<script>
	var odesilaSe = false;
	function odeslatFormular(formular) {
	  if (odesilaSe) return false;
	  odesilaSe = true;
	}
	</script>
	<form action="vysledek.php" onsubmit="return odeslatFormular(this)">
	 <input type="text">
	 <button>Odeslat</button>
	</form>
</body>
</html>