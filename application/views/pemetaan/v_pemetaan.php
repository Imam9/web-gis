<div class="content-wrapper">
    <h2><?= $title?></h2>
    <div class="row">
        <div class="col-md-12">
            <div id="map" style = "width: 100%; height:500px;"></div>
        </div>
    </div>
</div>

<script>

    var map = L.map('map').setView([-6.447686, 111.024596], 13);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
    }).addTo(map);
    

    var greenIcon = L.icon({
        iconUrl: '<?= base_url('./assets/gambar/sekolah.png')?>',
        iconSize:     [38, 45], // size of the icon
    });
    <?php foreach($data_sekolah as $s) { ?>
        L.marker([<?= $s->latitude?>,<?= $s->longitude?>], {icon: greenIcon}).addTo(map).bindPopup("<b><?= $s->nama_sekolah?> (<?= $s->status_sekolah?>)</b><br/><?= $s->alamat?> <br/> "); 
    <?php } ?>
    

</script>