<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => '',
            'name'                      => 'Name',
            'name_helper'               => '',
            'email'                     => 'Email',
            'email_helper'              => '',
            'email_verified_at'         => 'Email verified at',
            'email_verified_at_helper'  => '',
            'password'                  => 'Password',
            'password_helper'           => '',
            'roles'                     => 'Roles',
            'roles_helper'              => '',
            'remember_token'            => 'Remember Token',
            'remember_token_helper'     => '',
            'created_at'                => 'Created at',
            'created_at_helper'         => '',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => '',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => '',
            'approved'                  => 'Approved',
            'approved_helper'           => '',
            'verified'                  => 'Verified',
            'verified_helper'           => '',
            'verified_at'               => 'Verified at',
            'verified_at_helper'        => '',
            'verification_token'        => 'Verification token',
            'verification_token_helper' => '',
        ],
    ],
    'timeManagement' => [
        'title'          => 'Time management',
        'title_singular' => 'Time management',
    ],
    'timeWorkType'   => [
        'title'          => 'Work types',
        'title_singular' => 'Work type',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'timeProject'    => [
        'title'          => 'Projects',
        'title_singular' => 'Project',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'timeEntry'      => [
        'title'          => 'Time entries',
        'title_singular' => 'Time Entry',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'work_type'         => 'Work Type',
            'work_type_helper'  => '',
            'project'           => 'Project',
            'project_helper'    => '',
            'start_time'        => 'Start time',
            'start_time_helper' => '',
            'end_time'          => 'End time',
            'end_time_helper'   => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'timeReport'     => [
        'title'          => 'Monthly report',
        'title_singular' => 'Monthly report',
        'reports'        => [
            'title'             => 'Reports',
            'title_singular'    => 'Report',
            'timeEntriesReport' => 'Time entries report',
            'timeByProjects'    => 'Report by project',
            'timeByWorkType'    => 'Report by work type',
        ],
    ],
    'setting'        => [
        'title'          => 'Setting',
        'title_singular' => 'Setting',
    ],
];
