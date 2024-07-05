<h2>Form Janji Konsultasi</h2>
<form action="process.php" method="post">
    <label for="name">Nama:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="specialist">Dokter Spesialis:</label><br>
    <select id="specialist" name="specialist" required>
        <option value="kardiologi">Kardiologi</option>
        <option value="neurologi">Neurologi</option>
        <option value="ginekologi">Ginekologi</option>
        <option value="pediatri">Pediatri</option>
        <option value="psikiatri">Psikiatri</option>
    </select><br><br>

    <label for="date">Tanggal Konsultasi:</label><br>
    <input type="date" id="date" name="date" required><br><br>

    <label for="time">Waktu Konsultasi:</label><br>
    <input type="time" id="time" name="time" required><br><br>

    <label for="message">Pesan:</label><br>
    <textarea id="message" name="message" required></textarea><br><br>

    <input type="submit" value="Kirim">
</form>