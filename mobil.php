<div class="content">
        <h2>Daftar Mobil untuk Booking</h2>
        <?php if (!empty($no_data_message)) { ?>
            <p class="no-data-message"><?php echo $no_data_message; ?></p>
        <?php } else { ?>
        <div class="kendaraan-list">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="kendaraan-item">
                <h3><?php echo $row['nama_mobil']; ?></h3>
                <p>Jenis: <?php echo $row['jenis_mobil']; ?></p>
                <p>Harga: Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?> per hari</p>
                <p>Stok: <?php echo $row['stok']; ?> unit tersedia</p>
                <form action="booking.php" method="post">
                    <input type="hidden" name="id_kendaraan" value="<?php echo $row['id']; ?>">
                    <button type="submit">Pesan Sekarang</button>
                </form>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>



