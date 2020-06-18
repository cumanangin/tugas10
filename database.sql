/* Create Database and Table */
create database arkademy;

use arkademy;

CREATE TABLE `produk` (
  `nama_produk` varchar(20),
  `keterangan` varchar(50),
  `harga` int(15),
  `jumlah` int(15)
);