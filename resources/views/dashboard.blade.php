<html>

    <head>
        <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&family=Montserrat+Alternates:ital,wght@0,500;0,800;1,700;1,800;1,900&family=Montserrat:wght@700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <style>
            body{
                font-family: montserrat;
            background-color: rgb(233, 215, 215);
            }
            table{
                border: 3;
                border-collapse: collapse;
                width: 100%;
            }
            .hapus{
                background-color: rgb(196, 14, 14); 
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 10px;
            }
            .edit{
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 10px;
            }
            .tambah{
                background-color: #127191;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 10px;
            }
            .detail{
                background-color: #12914b;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 10px;
            }
            
        </style>
    </head>
    <body>

        <center>  <h1 class="text-center mb-4">WELLCOME!!!</h1></center>
        <center>  <h1 class="text-center mb-4">Daftar Lagu</h1></center>

  <div class="container">
       <a href="/tambah" type="button" class="tambah">Tambah Data + </a>
    <div class="row">

       <table>
        <tr>
            <th>#</th>
            <td>Judul Lagu</td>
            <td>Penyanyi lagu</td>
            <td>Action</td>
          </tr>
          @php
          $no = 1;
          @endphp
           @foreach ($data as $daftar)
           <tbody>
             <tr>
               <th scope="row"> {{$no++}}</th>
               <td> {{$daftar->JudulLagu}}</td>
               <td> {{$daftar->PenciptaLagu}}</td>
               <td> <a href="/detailData/{{$daftar->id}}" class="detail">Detail</a> </button>
                    <a href="/delete/{{$daftar->id}}" class="hapus">Delete</button>
                    <a href="/show/{{$daftar->id}}" class="edit">Edit</a>
            
            </td>
             </tr>
              @endforeach
           </tbody>
        </table>
    </body>
</html>
