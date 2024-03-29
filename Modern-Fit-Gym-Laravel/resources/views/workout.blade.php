<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../Styles/workout.css"> -->
    <link rel="stylesheet" href="{{ asset('../css/workout.css') }}">

    <title>Exercise Plan</title>
</head>
<body>
    @extends('nav')
    @section('content')

    <main>
    <div class="table-container">
        <fieldset>
        <legend>Form</legend>
        <div>
          <label for="name">Name</label>
          <input type="text" name="name" id="name" placeholder="Enter member ID" required/>
        </div>
        <br>
        <div>
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Enter your email" required/>
        </div>
        <br>
        </fieldset>

        <div class="table-with-search">
    <form action="workout_process.php" method="post">
        <table class="table">
            <caption>Workout</caption>
            <tr>
                <th>Member ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Description</th>
                <th>Amount</th>
            </tr>
            <tr>
                <?php
                    if(is_array($data) && count($data) != 0){
                        foreach ($data as $data){
                            echo "<tr>";
                            echo "<td>" . $data->Member_ID . "</td>";
                            echo "<td>" . $data->Exercise_Name . "</td>";
                            echo "<td>" . $data->Excercise_Type . "</td>";
                            echo "<td>" . $data->Description . "</td>";
                            echo "<td>" . $data->Amount . "</td>";
                            echo "</tr>";
                        }
                    }
                    else{
                        echo "<tr>";
                        echo "<td>No data available</td>";
                        echo "<td>No data available</td>";
                        echo "<td>No data available</td>";
                        echo "<td>No data available</td>";
                        echo "<td>No data available</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
</div>

    </div>
    </div>
    </main>

    <footer>


    @endsection
    </footer>
</body>
</html>