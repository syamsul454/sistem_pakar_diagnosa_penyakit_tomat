<<<<<<< HEAD

<form method="post" action="<?= site_url('halaman/'. $url) ?>">
	<label> <h2> <?= $daun  ?> </h2></label>
	<button name="pertanyaan" value="daun">ya</button>
	<button name="pertanyaan" value="buah">tidak</button>
	lgjhg
</form>
=======
<form method="post" action="<?= site_url($url) ?>">
	<label><?= $daun  ?></label>
	<button name="pertanyaan" value="ya">ya</button>
	<button name="pertanyaan" value="tidak">tidak</button>
</form>
	
>>>>>>> 7873f49bff5c3ec3e6ed70bf57d0a12d9ff7f3ff
