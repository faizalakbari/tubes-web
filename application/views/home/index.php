<style>
    .card{
        border: none;
    }
    a.card, a.card:hover {
        color: #212529;
        text-decoration: none;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="text-center" style="margin: 100px;">Feature</h3>
        </div>
    </div>
    <div class="row">
        <?php foreach ($produk as $pr): ?>
            <div class="col-4 h-100 mb-3">
                <div class="card">
                    <a href="#">
                        <!-- <img src="images/Afghani_Deep_Indigo_Selvage_1.PNG" onmouseover="this.src='images/Afghani_Deep_Indigo_Selvage_2.PNG';" onmouseout="this.src='images/Afghani_Deep_Indigo_Selvage_1.PNG';" class="card-img-top" alt="..." height="400" width="150"> -->
                        <img src="<?php echo base_url('images/'.$pr->img)?>" onmouseover="this.src='<?php echo base_url('images/'.$pr->img2)?>';" onmouseout="this.src='<?php echo base_url('images/'.$pr->img)?>';" class="card-img-top" alt="..." height="450">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-center"><a href="#"><?php echo $pr->nama ?></a></h5>
                        <p class="card-text text-center"><a href="#">Rp <?php echo $pr->harga ?></a></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div> 