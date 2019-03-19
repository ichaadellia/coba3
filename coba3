<?php
    include 'koneksi.php';
    
    $no = 1;
    $data = mysqli_query($kon,"select * from mahasiswa");
?>

<?php
    include 'koneksi.php';
    
    $no1 = 1;
    $data1 = mysqli_query($kon,"select * from matakuliah");
?>
<?php
    include 'koneksi.php';
    
    $no2 = 1;
    $data2 = mysqli_query($kon,"select * from customer");
?>
<?php
    include 'koneksi.php';
    
    $no3 = 1;
    $data3 = mysqli_query($kon,"select * from nilai");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Akademik</title>
    <style>
        body {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        }
        #customers {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 50%;
          margin-left: 25%;
        }

        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        #customers tr:nth-child(even){background-color: ##F0F8FF;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color:	#00BFFF;
          color: white;
        }
        .tbedit {
            background-color: #F0F8FF; /* Blue */
            border: none;
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            margin: 4px 2px;
            cursor: pointer;
            
        }
        .tbhapus {
            background-color: #F0F8FF; /* Red */
            border: none;
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            margin: 4px 2px;
            cursor: pointer;
            
        }

        .tbadd {
            background-color: #F0F8FF; /* Red */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            margin: 4px 2px;
            cursor: pointer;
            
        }
    </style>
</head>
<body>
 
    <h1>DATA AKADEMIK</h1>
	
    <center><h2>Data Customer</h2></center>
    <table id="customers" border="1">
             <tr>
            <th>No</th>
            <th>ID Customer</th>
            <th>Username</th>
			<th>Password</th>
            <th>Nama</th>
            <th>Umur</th>
			<th>Alamat</th>
            <th>Telp</th>
            <th>Nama</th>
			<th>Email</th>
            <th>Tanggal Lahir</th>
            <th>Kode Pos</th>
			<th>Nama Ibu</th>
            <th>Gender</th>
           
        </tr>
        </tr>
        <?php while($d2 = mysqli_fetch_array($data2)){?>
        <tr>
            <td><?=$no2++?></td>
            <td><?=$d2['id_customer']?></td>
            <td><?=$d2['username']?></td>
			<td><?=$d2['password']?></td>
            <td><?=$d2['nama']?></td>
			<td><?=$d2['umur']?></td>
            <td><?=$d2['alamat']?></td><td>
            <td><?=$d2['telp']?></td>
			<td><?=$d2['email']?></td>
            <td><?=$d2['tgl_lahir']?></td>
			<td><?=$d2['kode_pos']?></td>
            <td><?=$d2['nama_ibu_k']?></td>
			<td><?=$d2['gender']?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Akademik</title>
    <style>
        body {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        }
        #customers {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 50%;
          margin-left: 25%;
        }

        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        #customers tr:nth-child(even){background-color: ##F0F8FF;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color:	#00BFFF;
          color: white;
        }
        .tbedit {
            background-color: #F0F8FF; /* Blue */
            border: none;
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            margin: 4px 2px;
            cursor: pointer;
            
        }
        .tbhapus {
            background-color: #F0F8FF; /* Red */
            border: none;
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            margin: 4px 2px;
            cursor: pointer;
            
        }

        .tbadd {
            background-color: #F0F8FF; /* Red */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            margin: 4px 2px;
            cursor: pointer;
            
        }
    </style>
</head>
<body>


    <center><h2>Data Mahasiswa</h2></center>
    <table id="customers" border="1">
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
        </tr>
        <?php while($d = mysqli_fetch_array($data)){?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$d['nim']?></td>
            <td><?=$d['nama']?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Akademik</title>
    <style>
        body {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        }
        #customers {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 50%;
          margin-left: 25%;
        }

        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        #customers tr:nth-child(even){background-color: ##F0F8FF;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color:	#00BFFF;
          color: white;
        }
        .tbedit {
            background-color: #F0F8FF; /* Blue */
            border: none;
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            margin: 4px 2px;
            cursor: pointer;
            
        }
        .tbhapus {
            background-color: #F0F8FF; /* Red */
            border: none;
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            margin: 4px 2px;
            cursor: pointer;
            
        }

        .tbadd {
            background-color: #F0F8FF; /* Red */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            margin: 4px 2px;
            cursor: pointer;
            
        }
    </style>
</head>
<body>
   
    <center><h2>Data Matakuliah</h2></center>
    <table id="customers" border="1">
        <tr>
            <th>No</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
			<th>SKS</th>
			<th>Program Studi</th>
			
        </tr>
        <?php while($d1 = mysqli_fetch_array($data1)){?>
        <tr>
            <td><?=$no1++?></td>
            <td><?=$d1['kdmk']?></td>
			<td><?=$d1['nmmk']?></td>
			<td><?=$d1['sks']?></td>
			<td><?=$d1['prodi']?></td>
        
			
        </tr>
        <?php } ?>
    </table>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Akademik</title>
    <style>
        body {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        }
        #customers {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 50%;
          margin-left: 25%;
        }

        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        #customers tr:nth-child(even){background-color: ##F0F8FF;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color:	#00BFFF;
          color: white;
        }
        .tbedit {
            background-color: #F0F8FF; /* Blue */
            border: none;
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            margin: 4px 2px;
            cursor: pointer;
            
        }
        .tbhapus {
            background-color: #F0F8FF; /* Red */
            border: none;
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            margin: 4px 2px;
            cursor: pointer;
            
        }

        .tbadd {
            background-color: #F0F8FF; /* Red */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            margin: 4px 2px;
            cursor: pointer;
            
        }
    </style>
</head>
<body>
   
    <center><h2>Data Nilai</h2></center>
    <table id="customers" border="1">
        <tr>
            <th>No</th>
            <th>Tahun Akademik</th>
            <th>NIM</th>
			<th>Kode Matakuliah</th>
			<th>Nilai</th>
			
        </tr>
        <?php while($d3 = mysqli_fetch_array($data3)){?>
        <tr>
            <td><?=$no3++?></td>
            <td><?=$d3['thakd']?></td>
			<td><?=$d3['nim']?></td>
			 <td><?=$d3['kdmk']?></td>
			<td><?=$d3['nilai']?></td>
			
        </tr>
        <?php } ?>
    </table>
</body>
</html>
