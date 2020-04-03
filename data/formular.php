<html>
<head>
</head>
<body>
  <h1>Formulare</h1>
  <form action="./index.php?pg=zpracovaniFormulare" method="post">
    <div>
      Jmeno: <input type="text" name="jmeno">      
    </div>
    <div>
    Vzkaz: <textarea name="vzkaz"></textarea>
    </div>
    <div>
    <button type="submit">Odeslat</button>
    </div>
  </form>
</body>
</html>

<!--
#metody formulare:
#get - pise se do url stranky
#post - jenom se posle do php souboru
-->


