<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Module;
use App\Models\ModuleAccess;
use DB;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $modules = [
            [
                "identifiers"   => "dashboard",
                "name"          => "Dashboard",
                "access"        => [
                    [
                        "identifiers" => "view",
                        "name"        => "View",
                    ]
                ]
            ],
            [
                "identifiers"   => "banners",
                "name"          => "Banners",
                "access"        => [
                    [
                        "identifiers" => "view",
                        "name"        => "View",
                    ],
                    [
                        "identifiers" => "add",
                        "name"        => "Add",
                    ],
                    [
                        "identifiers" => "edit",
                        "name"        => "Edit",
                    ],
                    [
                        "identifiers" => "delete",
                        "name"        => "Delete",
                    ],
                    [
                        "identifiers" => "detail",
                        "name"        => "Detail",
                    ]
                ]
            ],
            [
                "identifiers"   => "about_us",
                "name"          => "About Us",
                "access"        =>
                [
                    [
                        "identifiers" => "view",
                        "name"        => "View",
                    ],
                    [
                        "identifiers" => "add",
                        "name"        => "Add",
                    ],
                    [
                        "identifiers" => "edit",
                        "name"        => "Edit",
                    ],
                ]
            ],
            [
                "identifiers"   => "short_lists",
                "name"          => "Our Services",
                "access"        =>
                [
                    [
                        "identifiers" => "view",
                        "name"        => "View",
                    ],
                    [
                        "identifiers" => "add",
                        "name"        => "Add",
                    ],
                    [
                        "identifiers" => "edit",
                        "name"        => "Edit",
                    ],
                    [
                        "identifiers" => "detail",
                        "name"        => "Detail",
                    ],
                    [
                        "identifiers" => "delete",
                        "name"        => "Delete",
                    ],
                ]
                    
            ],
            [
                "identifiers"   => "article_categories",
                "name"          => "Article Categories",
                "access"        =>
                [
                    [
                        "identifiers" => "view",
                        "name"        => "View",
                    ],
                    [
                        "identifiers" => "add",
                        "name"        => "Add",
                    ],
                    [
                        "identifiers" => "edit",
                        "name"        => "Edit",
                    ],
                    [
                        "identifiers" => "delete",
                        "name"        => "Delete",
                    ],
                ]
            ],
            [
                "identifiers"   => "article",
                "name"          => "Article",
                "access"        =>
                [
                    [
                        "identifiers" => "view",
                        "name"        => "View",
                    ],
                    [
                        "identifiers" => "add",
                        "name"        => "Add",
                    ],
                    [
                        "identifiers" => "edit",
                        "name"        => "Edit",
                    ],
                    [
                        "identifiers" => "delete",
                        "name"        => "Delete",
                    ]
                ]
            ],
            [
                "identifiers"   => "pages",
                "name"          => "Pages",
                "access"        =>
                [
                    [
                        "identifiers" => "view",
                        "name"        => "View",
                    ],
                    [
                        "identifiers" => "add",
                        "name"        => "Add",
                    ],
                    [
                        "identifiers" => "edit",
                        "name"        => "Edit",
                    ],
                    [
                        "identifiers" => "delete",
                        "name"        => "Delete",
                    ],
                    [
                        "identifiers" => "detail",
                        "name"        => "Detail",
                    ]
                ]
            ],
            [
                "identifiers"   => "job_titles",
                "name"          => "job Titles",
                "access"        =>
                [
                    [
                        "identifiers" => "view",
                        "name"        => "View",
                    ],
                    [
                        "identifiers" => "add",
                        "name"        => "Add",
                    ],
                    [
                        "identifiers" => "edit",
                        "name"        => "Edit",
                    ],
                    [
                        "identifiers" => "delete",
                        "name"        => "Delete",
                    ]
                ]
            ],
            [
                "identifiers"   => "careers_visitors",
                "name"          => "Applicant",
                "access"        =>
                [
                    [
                        "identifiers" => "view",
                        "name"        => "View",
                    ],
                    [
                        "identifiers" => "delete",
                        "name"        => "Delete",
                    ],
                    [
                        "identifiers" => "export",
                        "name"        => "Export",
                    ],[
                        "identifiers" => "download",
                        "name"        => "Download",
                    ]
                ]
            ],
            [
                "identifiers"   => "visitors",
                "name"          => "Contact Form Data",
                "access"        =>
                [
                    [
                        "identifiers" => "view",
                        "name"        => "View",
                    ],
                    [
                        "identifiers" => "delete",
                        "name"        => "Delete",
                    ],
                    [
                        "identifiers" => "export",
                        "name"        => "Export",
                    ]
                ]
            ],
            [
                "identifiers"   => "menu_managements",
                "name"          => "Menu Managements",
                "access"        =>
                [
                    [
                        "identifiers" => "view",
                        "name"        => "View",
                    ],
                    [
                        "identifiers" => "add",
                        "name"        => "Add",
                    ],
                    [
                        "identifiers" => "edit",
                        "name"        => "Edit",
                    ],
                    [
                        "identifiers" => "delete",
                        "name"        => "Delete",
                    ],
                    [
                        "identifiers" => "detail",
                        "name"        => "Detail",
                    ]
                ]
            ],
            [
                "identifiers"   => "user_groups",
                "name"          => "User Groups",
                "access"        =>
                [
                    [
                        "identifiers" => "view",
                        "name"        => "View",
                    ],
                    [
                        "identifiers" => "add",
                        "name"        => "Add",
                    ],
                    [
                        "identifiers" => "edit",
                        "name"        => "Edit",
                    ],
                    [
                        "identifiers" => "delete",
                        "name"        => "Delete",
                    ]
                ]
            ],
            [
                "identifiers"   => "users",
                "name"          => "Users",
                "access"        =>
                [
                    [
                        "identifiers" => "view",
                        "name"        => "View",
                    ],
                    [
                        "identifiers" => "add",
                        "name"        => "Add",
                    ],
                    [
                        "identifiers" => "edit",
                        "name"        => "Edit",
                    ],
                    [
                        "identifiers" => "delete",
                        "name"        => "Delete",
                    ]
                ]
            ],
            [
                "identifiers"   => "settings",
                "name"          => "Settings",
                "access"        =>
                [
                    [
                        "identifiers" => "general",
                        "name"        => "General",
                    ],
                ]
            ],

        ];


        foreach ($modules as $data) {
            $data_access = $data['access'];
            $data_module = [
                "identifiers"   => $data["identifiers"],
                "name"          => $data["name"]
            ];
            $module = Module::create($data_module);
            foreach ($data_access as $row) {
                $module->access()->create([
                    "identifiers" => $row["identifiers"],
                    "name"        => $row["name"]
                ]);
            }
        }
    }
}
