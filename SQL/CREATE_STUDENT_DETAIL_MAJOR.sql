CREATE VIEW student_detail_major as
SELECT
    siswa.StudentID as student_id,
    m.kode_matakuliah as kode,
    m.nama_matakuliah as name,
    m.sks as sks
FROM mahasiswa siswa
LEFT JOIN krs ON siswa.StudentID = krs.StudentID
LEFT JOIN krs_detail kd on krs.kode_krs = kd.kode_krs
LEFT JOIN matakuliah m on kd.kode_matakuliah = m.kode_matakuliah