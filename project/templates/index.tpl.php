<?php
session_start();
if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); }
?>
<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $ablakcim['cim'] ?></title>
	<link rel="stylesheet" href="./styles/stilus.css">
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css"><?php } ?>
</head>
<body>
	<header class="fejlec">
		<img class="logo" src="./media/<?= $fejlec['kepforras'] ?>" alt="<?= $fejlec['kepalt'] ?>">
		<div class="fejlec-szoveg">
			<h1><?= $fejlec['cim'] ?></h1>
			<?php if (!empty($fejlec['motto'])) { ?><p class="motto"><?= $fejlec['motto'] ?></p><?php } ?>
		</div>
		<?php if(isset($_SESSION['login'])) { ?>
			<p class="belepve">Bejelentkezett: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong></p>
		<?php } ?>
	</header>
	<nav class="fomenu">
		<ul>
			<?php foreach ($oldalak as $url => $oldal) { ?>
				<?php if((!isset($_SESSION['login']) && $oldal['menun'][0]) || (isset($_SESSION['login']) && $oldal['menun'][1])) { ?>
					<li<?= ($oldal == $keres) ? ' class="active"' : '' ?>>
						<a href="<?= ($url == '/') ? '.' : $url ?>"><?= $oldal['szoveg'] ?></a>
					</li>
				<?php } ?>
			<?php } ?>
		</ul>
	</nav>
	<main>
		<?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
	</main>
	<footer class="lablec">
		<?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
		<?php if(isset($lablec['ceg'])) { ?><?= $lablec['ceg'] ?><?php } ?>
	</footer>
</body>
</html>
