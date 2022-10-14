<?php
    use Illuminate\Support\Facades\DB;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    
    <title>Student Terms</title>
</head>
<body>
    <table class="table table-striped">
        <tr>
            <th>
                No.
            </th>
            <th>
                Year Term
            </th>
            <th>
                Semester
            </th>
            <th>

            </th>
        </tr>
        <?php
            $term_data = DB::select('
            SELECT
                term.kode_term AS id,
                term.tahun_ajar AS year_term,
                term.semester AS semester,
                COUNT(mahasiswa.StudentID) as student_count
            FROM term
            LEFT JOIN krs ON term.kode_term = krs.kode_term
            LEFT JOIN mahasiswa ON krs.StudentID = mahasiswa.StudentID
            GROUP BY term.kode_term ,term.tahun_ajar, term.semester
            ');
            $no = 1;
            foreach($term_data as $data){
                $id = $data->id;
                $year = $data->year_term;
                $semester = $data->semester;
                $student_count = $data->student_count;
                echo "
                <tr>
                    <td>
                        $no
                    </td>
                    <td>
                        $year
                    </td>
                    <td>
                        $semester
                    </td>
                    <td>
                        <a href='/term/id=$id'>Detail</a>
                    </td>
                </tr>
                ";
                $no++;
            };
        ?>
    </table>
</body>
</html>