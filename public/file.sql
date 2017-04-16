CREATE  TRIGGER kurangi_stok AFTER  INSERT
  ON transaksi_keluar FOR EACH ROW
  BEGIN
    UPDATE barang SET stok=stok-new.jumlah WHERE barang.kode_barang=new.kode_barang;
  END;
