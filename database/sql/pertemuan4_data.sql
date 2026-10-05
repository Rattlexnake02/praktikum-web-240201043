USE praktikum_web_2401020143;

    INSERT INTO program_studi (nama_prodi) VALUES
        ('Arsitektur'),
        ('Teknik Sipil'),
        ('Hukum');

    INSERT INTO mahasiswa
    (nim, nama, email, usia, program_studi_id)
    VALUES
        ('2401020168', 'Teguh Hidayat',
        'guh@example.com', 20, 3),
        ('2401020134', 'Riki Andika Saputra',
        'ki@example.com', 20, 2),
        ('2401020146', 'Sandy Yahya',
        'san@example.com', 20, 1),
        ('2201020099', 'Data Sementara',
        'sementara@example.com', 18, 2);

    UPDATE mahasiswa
    SET email = 'sandy.dy@example.com'
    WHERE nim = '2401020146';

    DELETE FROM mahasiswa
    WHERE nim = '2201020099';

    SELECT m.nim, m.nama, m.email, m.usia,
            p.nama_prodi
    FROM mahasiswa AS m
    JOIN program_studi AS p
            ON p.id = m.program_studi_id
    ORDER BY m.nim;