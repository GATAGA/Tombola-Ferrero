<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AYGT MA</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CSS for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
     #brand{
            height:80px;
            width:240px;
            object-fit:contain;
        }

        .navbar{
            background-color: #eb9c2c;
        }

        body{
            background-color: #67492b;
        }

        .offcanvas{
            background-color: #eb9c2c;
        }

        .logout_btn{
            color: #FFFFFF;
            background-color: #67492b;
        }

        .logout_btn:hover{
          border-color: #67492b;
        }

        .entries_url{
          color: #67492b;
          font-weight:600;
          border-style:none;
          margin-right: 30px !important;
          border-bottom: 3px solid white !important;
          border-radius: 0px !important;
          padding-bottom: 0px !important;
          padding-top: 3px !important;
        }

        .entries_url:hover{
          border-style:none;
        }
        

        /*  */

    .container-custom {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }
    .left-panel {
      background-color: #4B2E1E;
      border-radius: 15px;
      color: white;
      padding: 20px;
      width: 500px;
      text-align: center;
      display: flex;
      flex-direction: column;
      height: 530px;
      gap: 0px;
    }
    .image-placeholder {
      width: 100%;
      height: 200px;
      margin-bottom: 20px;
      margin-top:30px;
    }
    .number-winners {
      background-color: #FFA500;
      color: #4B2E1E;
      font-size: 2rem;
      width: 90px;
      height: 60px;
      border-radius: 10px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight:700;
      margin-top: 5px;
    }
    .table-custom {
      background-color: #8B5E34;
      border-collapse: collapse;
      /* width: 60%; */
      margin-left: 20px;
    }
    .table-custom th {
      background-color: #FFA500;
      color: white;
    }
    .table-custom td, .table-custom th {
      border: 3px solid white;
      height: 30px;
      width: 33%;
      color: #ffffff !important;
    }

    .dash_container{
        margin-top:170px !important;
    }

    #cones_img{
      height:400px;
      width: 280px;
    }

    .last_update{
      margin-top:20px;
    }

    .nbr_winners_str{
      margin-top: 60px;
    }

    .cones_nbr{
      margin-top:30px;
    }

    .right_side{
      height:526px;
      width: 60%;
    }

    /* Add responsive styles */
    @media (max-width: 768px) {
      .navbar{
        justify-content:start !important;
      }

      .navbar .container {
        flex-direction: row; 
        align-items: center;

      }
      
      #brand{
        width: 170px;
      }

      .dash_container{
        margin-top:100px;
        display:flex;
        flex-wrap:wrap;
      }
      
      .left-panel,.right_side{
        width: 90%;
      }

      .table.table-custom.text-center{
        margin-left: 0 !important;
        margin-top: 50px;
      }

      .entries_url{
          
          margin-right: 10px !important;
      }
    }
  </style>
</head>
<body>

<nav class="navbar fixed-top">
  <div class="container">
    <a href="/GROWTH`MARKETING`PARTENER/dashboard">
      <img src="{{ asset('assets/images/ferrero_logo.svg.png') }}" alt="Ferrero" id="brand">
    </a>
    <div class="action">
      <a href="/GROWTH`MARKETING`PARTENER/all-entries" class="btn entries_url">All Entries</a>
      <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="btn logout_btn">Log Out</button>
      </form>
    </div>
  </div>
</nav>

<div class="container container-custom dash_container">
  <div class="right_side">
  <table class="table table-custom text-center">
    <thead>
      <tr>
        <th>Name</th>
        <th>Receipt number</th>
        <th>Date of participation</th>
        <th>Result</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($results as $result)
        <tr>
          <td>{{ $result->customer->name }}</td>
          <td>{{ $result->receipt }}</td>
          <td>{{ $result->playing_time }}</td>
          <td>{{ $result->result }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

    <!-- Pagination Links -->
    <div class="d-flex justify-content-center">
      {{ $results->links('pagination::bootstrap-4') }}
    </div>

  </div>
</div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
</body>
</html>