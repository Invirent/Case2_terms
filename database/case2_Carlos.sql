SELECT
    term.tahun_ajar AS year_term,
    term.semester AS semester,
    COUNT(mahasiswa.StudentID) as student_count
FROM term
LEFT JOIN krs ON term.kode_term = krs.kode_term
LEFT JOIN mahasiswa ON krs.StudentID = mahasiswa.StudentID
GROUP BY term.tahun_ajar, term.semester

#GITHUB LINK = 
