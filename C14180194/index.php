<p>Felic Cahyadi</p>
<h2>C14180194</h2>
<h4>Buah</h4>
<h5>Buah2</h5>
<h3>Date </h3>
<input type="date" id="tanggal" name="tanggal">
<button type="button" onclick="Hitung()">Hitung</button>

<input type="date" id="tanggal2" name="tanggal2">
<button type="button" onclick="Hitung()">Hitung</button>

<p id="hasilhitung">Hasil Perhitungan : </p>
<script>
        function Hitung() 
        {
            var tanggal = new Date (document.getElementById("tanggal").value);
            var tanggal2 = new Date (document.getElementById("tanggal2").value);
            var result = Math.floor((tanggal2 - tanggal) / (1000 * 60 * 60 * 24));
            document.getElementById("hasilhitung").innerHTML = " Hasil Perhitungan : " + result;
        }
</script>
