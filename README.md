# CodeIgniter API Rest

Basic Restful server based in [chriskacerguis CodeIgniter Rest Server](https://github.com/chriskacerguis/codeigniter-restserver/)

## Configuration

1. Clone repository
2. `config/config.php` - Change 'base_url' and other variables
3. `config/database.php` - Connect to database
4. `index.php`- Change 'system_path' and 'application_folder'
5. `models/GetData.php`- Select the table of db with 'public $table' var

## Requests

For all results:
```
/apirest/
```

Results filtered by field. It returns all rows that contain the field-value:
```
/apirest/name_of_field/value
```