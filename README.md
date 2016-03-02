# Simple Dot Env
version: `1.0`

date: `2016/03/02`

Author: `Marcos Menezes <mmqfilho@gmail.com>`

## How to use

include the file and set the namespace
```
include_once 'src/environment.php';
use Mmqfilho\SimpleDotEnv\Environment;
```

Create object 
```
new Environment();
```

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
