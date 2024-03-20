<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo "Hello, World!"; ?></title>
<style>
  body {
    font-family: Arial, sans-serif;
  }
  table {
    border-collapse: collapse;
    width: 80%;
    margin: 20px auto;
    background-color: blue;
  }
  th, td {
    border: 1px solid white;
    padding: 8px;
    color: white;
  }
  th {
    background-color: red;
    font-size: 20px;
  }
</style>
</head>
<body>

<h1 style="color: red;"><?php echo "Hello, World!"; ?></h1>

<table>
  <tr>
    <th>Column 1</th>
    <th>Column 2</th>
    <th>Column 3</th>
  </tr>
  <tr>
    <td>Data 1</td>
    <td>Data 2</td>
    <td>Data 3</td>
  </tr>
  <tr>
    <td>Data 4</td>
    <td>Data 5</td>
    <td>Data 6</td>
  </tr>
</table>

</body>
</html>