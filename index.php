<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Su cambio</title>
  
</head>

<body>
<h1>Su cambio</h1>

  <form action="su_cambio2.php" method="get">
    <p>Indique la cantidad a pagar y los billetes entregados.</p>

    <table>
        <tr>
          <td><strong>Cantidad a pagar:</strong></td>
          <td><input type="number" name="deuda" min="0" step="10" value="100"></td>
        </tr>
        <tr>
          <td><strong>Billetes de 200:</strong></td>
          <td><input type="number" name="Billete200" min="0" value="0"></td>
        </tr>
          <tr>
          <td><strong>Billetes de 100:</strong></td>
          <td>
            <select name="Billete100">
              <option>0</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </td>
        </tr>
        </table>
        <p>
      <input type="submit" value="Mostrar">
      <input type="reset" value="Borrar">
    </p>
  </form>
</body>
</html>