<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir PT Bendi Car</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, select, textarea, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Formulir PT Bendi Car</h2>
        <form action="proses-bendi-car.php" method="post">
            <!-- Nama Lengkap -->
            <label for="name">Nama Lengkap:</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
            
            <!-- Email -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
            
            <!-- Nomor Telepon -->
            <label for="phone">Nomor Telepon:</label>
            <input type="tel" id="phone" name="phone" placeholder="Masukkan nomor telepon Anda" required>
            
            <!-- Jenis Kendaraan -->
            <label for="vehicle">Jenis Kendaraan:</label>
            <select id="vehicle" name="vehicle" required>
                <option value="">Pilih kendaraan</option>
                <option value="sedan">Sedan</option>
                <option value="suv">SUV</option>
                <option value="pickup">Pickup</option>
                <option value="bus">Bus</option>
            </select>
            
            <!-- Pesan -->
            <label for="message">Pesan Tambahan:</label>
            <textarea id="message" name="message" placeholder="Tulis pesan Anda..." rows="4"></textarea>
            
            <!-- Tombol Submit -->
            <button type="submit">Kirim Formulir</button>
        </form>
    </div>
</body>
</html>
