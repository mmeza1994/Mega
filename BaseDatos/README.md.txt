## Configurar la Base de Datos

1. **Crear la base de datos y las tablas**:
   - Ejecuta el script `create_database.sql` para crear la base de datos y las tablas necesarias.
   - Puedes hacerlo usando phpMyAdmin o desde la línea de comandos:

     ```sh
     mysql -u tu-usuario -p < sql/create_database.sql
     ```

2. **Llenar la base de datos con datos iniciales**:
   - Ejecuta el script `insert_data_database.sql` para llenar la base de datos con datos iniciales.
   - Puedes hacerlo usando phpMyAdmin o desde la línea de comandos:

     ```sh
     mysql -u tu-usuario -p < sql/insert_data_database.sql
     ```

### Conclusión

Siguiendo estos pasos, habrás creado los scripts SQL necesarios para generar la estructura de la base de datos y llenarla con datos iniciales. Estos scripts deben ser incluidos en tu repositorio y documentados para que otros desarrolladores puedan utilizarlos fácilmente.
