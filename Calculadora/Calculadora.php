<DOCTYPE html>

    <head>
        <title>Calculadora</title>
    </head>

    <body>
        <form action="Proceso.php" method="post" name=calc>
        <label>Calculadora</label> <br>
            <input type="text" name="n1" /> <br>
            <input type="text" name="n2" />
            
                <label>
                    <select name="lista">
                        <option value="sumar">+</option>
                        <option value="restar">-</option>
                        <option value="multiplicar">*</option>
                        <option value="dividir">/</option>
                    </select>
                </label> <br>
                <input type="submit" value="Resultado" /> 
        </form>            
    </body>
</html>