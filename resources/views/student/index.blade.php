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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Carlos</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">Lihat KRS</a>
              <a class="nav-link" href="#">Profil</a>
              <a class="nav-link" href="#">Log Out</a>
            </div>
          </div>
        </div>
      </nav>
        <?php
            $student_data = DB::select("SELECT * FROM student_data WHERE student_id = '03081200004'");
            foreach($student_data as $data){
                $student_id = $data->student_id;
                $name = $data->nama;
                $term = $data->term;
                $total_sks = $data->total_sks;
                echo "
                    <div class='container'>
                        <div class='row'>
                            <div class='col-2'>
                                Nama: 
                            </div>
                            <div class='col-4'>
                                $name
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-2'>
                                NIM: 
                            </div>
                            <div class='col-4'>
                                $student_id
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-2'>
                                Term: 
                            </div>
                            <div class='col-4'>
                                $term
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-2'>
                                Total SKS: 
                            </div>
                            <div class='col-4'>
                                $total_sks
                            </div>
                        </div>
                    </div>
                ";
            };
        ?>

        <h6>Mata Kuliah yang diambil</h6>
        <table class="table table-striped">
            <tr>
                <th>No. </th>
                <th>Kode Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
            </tr>
            <?php
                $detail_major_data = DB::select("SELECT * FROM student_detail_major WHERE student_id = '03081200004'");
                $no = 1;
                foreach($detail_major_data as $major){
                    $major_code = $major->kode;
                    $major_name = $major->name;
                    $sks = $major->sks;
                    echo "
                        <tr>
                            <td>$no</td>
                            <td>$major_code</td>
                            <td>$major_name</td>
                            <td>$sks</td>
                        </tr>
                    ";
                    $no++;
                }
            ?>
        </table>
</body>
</html>