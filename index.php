<?php require_once 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT College Student Statistics</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>

<style>
        body{
            background-color: white;
            font-family: Arial, sans-serif;
        }
        h1{
            font-family: Arial, sans-serif;
            color: black;
            text-align: center;
            background-color: #f4f4f9;
            border-radius: 10px;
        }
        main{
            background-color: white;
            padding: 1rem;
            margin: 1rem;
        }
    
    </style>

</head>
<body>
  <main>
    <h1>College of IT - Student Enrollment Statistics</h1>
    <div class="overflow-auto">
      <table class="striped">
        <thead>
          <tr>
            <th scope="col">Year</th>
            <th scope="col">Semester</th>
            <th scope="col">The Programs</th>
            <th scope="col">Nationality</th>
            <th scope="col">Colleges</th>
            <th scope="col">Number of Students</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if (isset($data['results']) && is_array($data['results'])) {
              foreach ($data['results'] as $row) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['year']) . "</td>";
                echo "<td>" . htmlspecialchars($row['semester']) . "</td>";
                echo "<td>" . htmlspecialchars($row['the_programs']) . "</td>";
                echo "<td>" . htmlspecialchars($row['nationality']) . "</td>";
                echo "<td>" . htmlspecialchars($row['colleges']) . "</td>";
                echo "<td>" . htmlspecialchars($row['number_of_students']) . "</td>";
                echo "</tr>";
              }
            } else {
                echo "<tr><td colspan='4'>No data available</td></tr>";
                }
          ?>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>