### Tenant Container

 - Add tenant container
 - Create tenant migration
 - Create migration to add tenant_id in all existing database tables.
 - Create seeders for, tenant roles - tenant permissions - root admin - tenant admin - default root admin - default tenant admin - default tenant
 - Create multi-tenancy trait, to used in models. It will automatically add tenant id while creating record, and will automatically filter based in tenant id. It would be used in existing parent models.
 - Add a parent model with SingleTenancyModel, purpose is to skip some models which don'r require multi-tenant behavior e.g Country table etc.
 - Add functionality to manage manage multi-tenancy, create/add/edit
 - Add functionality to activate/de-activate tenant account.
 - For seeder use post from _1  to _10
