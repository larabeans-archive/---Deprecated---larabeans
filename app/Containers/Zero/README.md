### Zero Container

ZERO IS NOTHING, UNLESS IT COMES AFTER NON-ZEROS

This just serve as proxy to other container services, because it is zero, it do nothing and just utilizing others container tasks, and 
try to go with same approach to minimize complexity.

## Migration
Contains new migrations to update core tables primary key type to uuid, which is incremental by default.

## Traits
Adds New Trait for Uuid, to be used in parent models.

- app/Ship/core/Traits/HasUuids.php
- app/Ship/core/Traits/MultiTenantable.php

## Models
Updates below models, to make these compatible with uuid primary key type.

- app/Ship/Parents/Models/Model.php
- app/Containers/Authorization/Models/Permission.php
- app/Containers/Authorization/Models/Role.php
- app/Containers/User/Models/User.php
- app/Ship/Parents/Models/UserModel.php

New models to be use in AuthProvider to make it compatible with uuid primary key type.

- app/Ship/Parents/Models/SingleTenantModel.php
- app/Containers/Authentication/Models/Client.php
- app/Containers/Authentication/Models/PersonalAccessClient.php

## Providers
Updates below provider to make it compatible with uuid primary key type.

- app/Containers/Authentication/Providers/AuthProvider.php

## Generator
Update generator stub to create migration with uuid instead if incremental type.

- app/Ship/core/Generator/Stubs/migration.stub

## TODO

### To add in release 0.3.0

- Site Configurations 
    - Multitenancy: New container to manage multi-tenancy
    - Features: New container to manage site features, features can be enabled/disabled at tenant level.
    - Navigation: New container to manage site navigation
    - Settings: It is already there, try to utilize, don't do changes directly in the module as it is part of core.
    
- User Configurations
    - Permissions: These are already managed, just use tasks from existing modules.
