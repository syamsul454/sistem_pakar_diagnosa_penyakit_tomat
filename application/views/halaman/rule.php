<<<<<<< HEAD:application/views/halaman/daun.php
<style type="text/css">
	.jumbotron-fluid {
		margin: auto;
	}
	.display-6 {
		text-align: center;
		font-size: 43px;
	}
</style>
<div class="jumbotron jumbotron-fluid mt-5  col-sm-10 "> 
  <div class="container">
    <H5 class="display-6">KONSULTASI PENYAKIT PADA TANAMAN TOMAT</H5>

<div class="card">
  <div class="card-header">
    Quote
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      
		<form method="post" action="<?= site_url('penyakit_daun/'. $url) ?>">
		<label><?= $daun  ?></label>
		<button name="pertanyaan" value="ya">ya</button>
		<button name="pertanyaan" value="tidak">tidak</button>
		</form>
     
    </blockquote>
  </div>
</div>

   
	
    
  </div>
</div>

=======
<form method="post" action="<?= site_url($url) ?>">
	<label><?= $daun  ?></label>
	<button name="pertanyaan" value="ya">ya</button>
	<button name="pertanyaan" value="tidak">tidak</button>
</form>
	
>>>>>>> 7873f49bff5c3ec3e6ed70bf57d0a12d9ff7f3ff:application/views/halaman/rule.php
