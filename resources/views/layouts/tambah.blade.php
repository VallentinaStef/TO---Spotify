<head>
        <title>Perpustakaan</title>

        <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&family=Montserrat+Alternates:ital,wght@0,500;0,800;1,700;1,800;1,900&family=Montserrat:wght@700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">


        <style>
            .button{
                padding: 1.3em 3em;
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 2.5px;
                font-weight: 500;
                color: #000;
                background-color: #fff;
                border: none;
                border-radius: 45px;
                box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease 0s;
                cursor: pointer;
                outline: none;
            }
            .form-tambah{
                border: 1px solid #ddd;
                display: inline-block;
                padding: 2em;
                font-family: Montserrat;
                
            }
            .form-tambah input[type="text"]{
                border: none;
                border-bottom: 1px solid #ddd;
                color: #333;
                font-size: 14px;
                margin-bottom: 15px;
                padding: 0.5em 1em 0.5em 0;
                width: 200px;
            }
            .textarea{
                padding: 10px;
                max-width: 100%;
                line-height: 1.5;
                border-radius: 5px;
                border: 1px solid #ccc;
                box-shadow: 1px 1px 1px #999;
            }

        </style>
  </head>

  <body>
  
    <center> <h1>Tambah Daftar Buku</h1> 

                <form action="/insert" method="POST" enctype="multipart/form-data">
                @csrf
                 <div class="form-tambah">
                <label class="form-label">Judul Lagu</label>
                <input name="JudulLagu" type="text"> <br><br>
                

                <label class="form-label">Penyanyi Lagu</label>
                <input name="PenciptaLagu" type="text"> <br><br>
                
               
                <label class="form-label">Lirik</label>
                <textarea name="Lirik" class="textarea" cols="5"></textarea> <br><br>


                <label class="form-label">Lagu</label>
                <input name="Lagu" type="file"> <br><br><br>
                

                <button type="submit" class="button">Submit</button> 
                <a href="/dashboard" class="button">Back</a> </center>
                </form>
            </div>
  </body>
</html>