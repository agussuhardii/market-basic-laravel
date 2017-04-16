$(document).ready(function () {
    $('#tombolCari').click(function () {

        kode = $('#cariKode').val();

        $.ajax({
            type: 'get',
            url: 'http://localhost:8000/barang/'+kode
        }).done(function (data) {

            hasil = data;

            if(hasil.id === null){
                alert("barang tidak di temukan");
            }
            
            $('.id').text(hasil.id);
            $('.kodeBarang').text(hasil.kode_barang);
            $('.nama').text(hasil.nama);
            $('.harga').text(hasil.harga);
            $('.stok').text(hasil.stok);
            $('.keterangan').text(hasil.keterangan);
            $('.created_at').text(hasil.created_at);
            $('.updated_at').text(hasil.updated_at);

        })
    });
});