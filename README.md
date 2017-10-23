# Simple Dot Env
version: `1.0`

date: `2016/03/02`

Author: `Marcos Menezes <mmqfilho@gmail.com>`

## How to use

include the file and set the namespace
```
include_once 'src/Simpledotenv.php';
or use autoload composer
include_once YOUR_VENDOR_DIR . '/autoload.php' ;

use Mmqfilho\SimpleDotEnv\SimpleDotEnv as Env;
```

Create object 
```
new Env('PATH/TO/.ENV_FILE');   
```
Only path, do not put filename.


Create and/or edit .env file
```
VAR_NAME1=VALUE_1
VAR_NAME2=VALUE_2
VAR_NAME3=VALUE_3
```

Get the env variable
```
$var1 = $_ENV['VAR_NAME1'];
```
