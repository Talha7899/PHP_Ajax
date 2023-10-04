<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Tutorial PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <form id="form" method="post">
    <!-- <div class="mb-3">
        <label for="ID" class="form-label">ID</label>
        <input type="number" class="form-control" id="ID" name="id" autocomplete="off">
      </div> -->
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="nam" autocomplete="off" required>
      </div>
    <div class="mb-3">
        <label for="Email" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" id="ema" autocomplete="off" required>
      </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" name="phone" id="pho" autocomplete="off" required>
      </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-success" id="submit" name="submit">
      </div>
    </form>
    </div>

    <div class="container">
        <table class="table table-bordered">
            <!-- <button class="btn btn-primary" id="btn">Get Data</button> -->
            <thead>
              <tr>
                <!-- <th scope="col">ID</th> -->
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
              </tr>
            </thead>
            <tbody id="tab">
            </tbody>
          </table>
    </div>

    <script>
        $(document).ready(function(){
            let table = $('#tab');
            function loadData(){
                $.ajax({
                    url:'fetch.php',
                    type:'POST',
                    success:function(data){
                        table.html(data)
                    }
                })
                }
                loadData()
                $('#submit').click(function(){
          $.ajax({
            url:'insert.php',
            type:'POST',
            data:$('#form input').serialize(),
            success:function(data){
              loadData()
            }
          })
        })
      })
    </script>
</body>
</html>