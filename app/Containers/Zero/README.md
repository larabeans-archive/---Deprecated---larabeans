### Zero Container

## Migration
Contains new migrations to update core tables primary key type to uuid, which is incremental by default.

## Models
Updates below models, to make these compatible with uuid primary key type.

- app/Ship/Parents/Models/Model.php
- app/Containers/Authorization/Models/Permission.php
- app/Containers/Authorization/Models/Role.php
- app/Containers/User/Models/User.php
- app/Ship/Parents/Models/UserModel.php

New models to be use in AuthProvider to make it compatible with uuid primary key type.

- app/Containers/Authentication/Models/Client.php
- app/Containers/Authentication/Models/PersonalAccessClient.php

## Providers
Updates below provider to make it compatible with uuid primary key type.

- app/Containers/Authentication/Providers/AuthProvider.php

## Generator
Update generator stub to create migration with uuid instead if incremental type.

- app/Ship/core/Generator/Stubs/migration.stub
