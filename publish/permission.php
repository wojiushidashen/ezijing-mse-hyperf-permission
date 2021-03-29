<?php

return [
    //model设置
    'models' => [
        'user' => App\Model\User::class,
        'permission' => Ezijing\Permission\Models\Permission::class,
        'role' => Ezijing\Permission\Models\Role::class,
    ],
    //表名设置
    'table_names' => [
        'roles' => 's_roles',
        'permissions' => 's_permissions',
        'model_has_permissions' => 'r_model_has_permissions',
        'model_has_roles' => 'r_model_has_roles',
        'role_has_permissions' => 'r_role_has_permissions',
    ],
    'column_names' => [
        'model_morph_key' => 'model_id', //关联模板的主键
    ],
    'display_permission_in_exception' => false,
    'cache' => [
        'expiration_time' => 86400,
        'key' => 'ezijing.permission.cache',
        'model_key' => 'name',
        'store' => 'default',
    ],
];
