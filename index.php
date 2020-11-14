<?php

require "./vendor/autoload.php";

// 防止文件deleteBlock 和 cloneBlock 失效
ini_set('pcre.backtrack_limit', 999999999999);

$renderData = [
    [
        "Title" => "测试文档1",
        "UpdateTime" => "2020-11-13 12:00:00",
        "Description" => "测试描述",
        "ApiBaseInfo" => [
            "ApiState" => "开发中",
            "ApiAddress" => "http://www.gaoqiaoxue.com",
            "ApiMethod" => "GET",
            "ApiContentType" => "application/json"
        ],
        "ReqParameters" => [
            "HeaderVars" => [
                [
                    "HParams" => "Accept",
                    "HExample" => "Application/json",
                    "HBool" => "必填",
                    "HDesc" => "描述"
                ],
                [
                    "HParams" => "Accept",
                    "HExample" => "Application/json",
                    "HBool" => "必填",
                    "HDesc" => "描述"
                ]
            ],
            "QueryVars" => [
                [
                    "QParams" => "Accept",
                    "QExample" => "Application/json",
                    "QBool" => "必填",
                    "QDesc" => "描述"
                ],
                [
                    "QParams" => "Accept",
                    "QExample" => "Application/json",
                    "QBool" => "必填",
                    "QDesc" => "描述"
                ],
            ],
            "BodyVars" => [
                [
                    "BParams" => "Accept",
                    "BExample" => "Application/json",
                    "BBool" => "必填",
                    "BDesc" => "描述"
                ],
                [
                    "BParams" => "Accept",
                    "BExample" => "Application/json",
                    "BBool" => "必填",
                    "BDesc" => "描述"
                ],
            ],
            "RawVars" => "{'name':'pis0sion'}",
        ],
        "RespParameters" => [
            "RespBody" => [
                [
                    "RespParams" => "Accept",
                    "RespExample" => "Application/json",
                    "RespType" => "必填",
                    "RespDesc" => "描述"
                ],
                [
                    "RespParams" => "Accept",
                    "RespExample" => "12313",
                    "RespType" => "必填",
                    "RespDesc" => "描述"
                ],
            ],
            "RespRawVars" => "{'name':'pis0sion'}",
        ],
    ],
    [
        "Title" => "测试文档2",
        "UpdateTime" => "2020-11-13 12:00:00",
        "Description" => "测试描述",
        "ApiBaseInfo" => [
            "ApiState" => "开发中",
            "ApiAddress" => "http://www.gaoqiaoxue.com",
            "ApiMethod" => "GET",
            "ApiContentType" => "application/json"
        ],
        "ReqParameters" => [
            "HeaderVars" => [
                [
                    "HParams" => "Accept",
                    "HExample" => "Application/json",
                    "HBool" => "必填",
                    "HDesc" => "描述"
                ],
                [
                    "HParams" => "Accept",
                    "HExample" => "Application/json",
                    "HBool" => "必填",
                    "HDesc" => "描述"
                ]
            ],
            "QueryVars" => [
                [
                    "QParams" => "Accept",
                    "QExample" => "Application/json",
                    "QBool" => "必填",
                    "QDesc" => "描述"
                ],
                [
                    "QParams" => "Accept",
                    "QExample" => "Application/json",
                    "QBool" => "必填",
                    "QDesc" => "描述"
                ],
            ],
            "BodyVars" => [
                [
                    "BParams" => "Accept",
                    "BExample" => "Application/json",
                    "BBool" => "必填",
                    "BDesc" => "描述"
                ],
                [
                    "BParams" => "Accept",
                    "BExample" => "Application/json",
                    "BBool" => "必填",
                    "BDesc" => "描述"
                ],
            ],
            "RawVars" => "{'name':'pis0sion'}",
        ],
        "RespParameters" => [
            "RespBody" => [
                [
                    "RespParams" => "Accept",
                    "RespExample" => "Application/jsonApplication/jsonApplication/jsonApplication/jsonApplication/jsonApplication/json",
                    "RespType" => "必填",
                    "RespDesc" => "描述"
                ],
                [
                    "RespParams" => "Accept",
                    "RespExample" => "12313",
                    "RespType" => "必填",
                    "RespDesc" => "描述"
                ],
            ],
            "RespRawVars" => "{'name':'pis0sion'}",
        ],
    ], [
        "Title" => "测试文档3",
        "UpdateTime" => "2020-11-13 12:00:00",
        "Description" => "测试描述",
        "ApiBaseInfo" => [
            "ApiState" => "开发中",
            "ApiAddress" => "http://www.gaoqiaoxue.com",
            "ApiMethod" => "GET",
            "ApiContentType" => "application/json"
        ],
        "ReqParameters" => [
            "HeaderVars" => [
                [
                    "HParams" => "Accept",
                    "HExample" => "Application/json",
                    "HBool" => "必填",
                    "HDesc" => "描述"
                ],
                [
                    "HParams" => "Accept",
                    "HExample" => "Application/json",
                    "HBool" => "必填",
                    "HDesc" => "描述"
                ]
            ],
            "QueryVars" => [
                [
                    "QParams" => "Accept",
                    "QExample" => "Application/json",
                    "QBool" => "必填",
                    "QDesc" => "描述"
                ],
                [
                    "QParams" => "Accept",
                    "QExample" => "Application/json",
                    "QBool" => "必填",
                    "QDesc" => "描述"
                ],
            ],
            "BodyVars" => [
                [
                    "BParams" => "Accept",
                    "BExample" => "Application/json",
                    "BBool" => "必填",
                    "BDesc" => "描述"
                ],
                [
                    "BParams" => "Accept",
                    "BExample" => "Application/json",
                    "BBool" => "必填",
                    "BDesc" => "描述"
                ],
            ],
            "RawVars" => "{'name':'pis0sion'}",
        ],
        "RespParameters" => [
            "RespBody" => [
                [
                    "RespParams" => "Accept",
                    "RespExample" => "Application/json",
                    "RespType" => "必填",
                    "RespDesc" => "描述"
                ],
                [
                    "RespParams" => "Accept",
                    "RespExample" => "12313",
                    "RespType" => "必填",
                    "RespDesc" => "描述"
                ],
            ],
            "RespRawVars" => "{'name':'pis0sion'}",
        ],
    ], [
        "Title" => "测试文档3",
        "UpdateTime" => "2020-11-13 12:00:00",
        "Description" => "测试描述",
        "ApiBaseInfo" => [
            "ApiState" => "开发中",
            "ApiAddress" => "http://www.gaoqiaoxue.com",
            "ApiMethod" => "GET",
            "ApiContentType" => "application/json"
        ],
        "ReqParameters" => [
            "HeaderVars" => [
                [
                    "HParams" => "Accept",
                    "HExample" => "Application/json",
                    "HBool" => "必填",
                    "HDesc" => "描述"
                ],
                [
                    "HParams" => "Accept",
                    "HExample" => "Application/json",
                    "HBool" => "必填",
                    "HDesc" => "描述"
                ]
            ],
            "QueryVars" => [
                [
                    "QParams" => "Accept",
                    "QExample" => "Application/json",
                    "QBool" => "必填",
                    "QDesc" => "描述"
                ],
                [
                    "QParams" => "Accept",
                    "QExample" => "Application/json",
                    "QBool" => "必填",
                    "QDesc" => "描述"
                ],
            ],
            "BodyVars" => [
                [
                    "BParams" => "Accept",
                    "BExample" => "Application/json",
                    "BBool" => "必填",
                    "BDesc" => "描述"
                ],
                [
                    "BParams" => "Accept",
                    "BExample" => "Application/json",
                    "BBool" => "必填",
                    "BDesc" => "描述"
                ],
            ],
            "RawVars" => "{'name':'pis0sion'}",
        ],
        "RespParameters" => [
            "RespBody" => [
                [
                    "RespParams" => "Accept",
                    "RespExample" => "Application/json",
                    "RespType" => "必填",
                    "RespDesc" => "描述"
                ],
                [
                    "RespParams" => "Accept",
                    "RespExample" => "12313",
                    "RespType" => "必填",
                    "RespDesc" => "描述"
                ],
            ],
            "RespRawVars" => "{'name':'pis0sion'}",
        ],
    ], [
        "Title" => "测试文档3",
        "UpdateTime" => "2020-11-13 12:00:00",
        "Description" => "测试描述",
        "ApiBaseInfo" => [
            "ApiState" => "开发中",
            "ApiAddress" => "http://www.gaoqiaoxue.com",
            "ApiMethod" => "GET",
            "ApiContentType" => "application/json"
        ],
        "ReqParameters" => [
            "HeaderVars" => [
                [
                    "HParams" => "Accept",
                    "HExample" => "Application/json",
                    "HBool" => "必填",
                    "HDesc" => "描述"
                ],
                [
                    "HParams" => "Accept",
                    "HExample" => "Application/jsonApplication/jsonApplication/jsonApplication/jsonApplication/json",
                    "HBool" => "必填",
                    "HDesc" => "描述"
                ]
            ],
            "QueryVars" => [
                [
                    "QParams" => "Accept",
                    "QExample" => "Application/json",
                    "QBool" => "必填",
                    "QDesc" => "描述"
                ],
                [
                    "QParams" => "Accept",
                    "QExample" => "Application/json",
                    "QBool" => "必填",
                    "QDesc" => "描述"
                ],
            ],
            "BodyVars" => [
                [
                    "BParams" => "Accept",
                    "BExample" => "Application/json",
                    "BBool" => "必填",
                    "BDesc" => "描述"
                ],
                [
                    "BParams" => "Accept",
                    "BExample" => "Application/json",
                    "BBool" => "必填",
                    "BDesc" => "描述"
                ],
            ],
            "RawVars" => "{'name':'pis0sion'}",
        ],
        "RespParameters" => [
            "RespBody" => [
                [
                    "RespParams" => "Accept",
                    "RespExample" => "Application/jsonApplication/jsonApplication/jsonApplication/jsonApplication/jsonApplication/json",
                    "RespType" => "必填",
                    "RespDesc" => "描述"
                ],
                [
                    "RespParams" => "Accept",
                    "RespExample" => "12313",
                    "RespType" => "必填",
                    "RespDesc" => "描述"
                ],
            ],
            "RespRawVars" => "{'name':'pis0sion'}",
        ],
    ], [
        "Title" => "测试文档3",
        "UpdateTime" => "2020-11-13 12:00:00",
        "Description" => "测试描述",
        "ApiBaseInfo" => [
            "ApiState" => "开发中",
            "ApiAddress" => "http://www.gaoqiaoxue.com",
            "ApiMethod" => "GET",
            "ApiContentType" => "application/json"
        ],
        "ReqParameters" => [
            "HeaderVars" => [
                [
                    "HParams" => "Accept",
                    "HExample" => "Application/jsonApplication/jsonApplication/jsonApplication/jsonApplication/json",
                    "HBool" => "必填",
                    "HDesc" => "描述"
                ],
                [
                    "HParams" => "Accept",
                    "HExample" => "Application/jsonApplication/jsonApplication/jsonApplication/jsonApplication/json",
                    "HBool" => "必填",
                    "HDesc" => "描述"
                ]
            ],
            "QueryVars" => [
                [
                    "QParams" => "Accept",
                    "QExample" => "Application/json",
                    "QBool" => "必填",
                    "QDesc" => "描述"
                ],
                [
                    "QParams" => "Accept",
                    "QExample" => "Application/json",
                    "QBool" => "必填",
                    "QDesc" => "描述"
                ],
            ],
            "BodyVars" => [
                [
                    "BParams" => "Accept",
                    "BExample" => "Application/json",
                    "BBool" => "必填",
                    "BDesc" => "描述"
                ],
                [
                    "BParams" => "Accept",
                    "BExample" => "Application/json",
                    "BBool" => "必填",
                    "BDesc" => "描述"
                ],
            ],
            "RawVars" => "{'name':'pis0sion'}",
        ],
        "RespParameters" => [
            "RespBody" => [
                [
                    "RespParams" => "Accept",
                    "RespExample" => "Application/jsonApplication/jsonApplication/jsonApplication/jsonApplication/jsonApplication/json",
                    "RespType" => "必填",
                    "RespDesc" => "描述"
                ],
                [
                    "RespParams" => "Accept",
                    "RespExample" => "12313",
                    "RespType" => "必填",
                    "RespDesc" => "描述"
                ],
            ],
            "RespRawVars" => "{'name':'pis0sion'}",
        ],
    ], [
        "Title" => "测试文档3",
        "UpdateTime" => "2020-11-13 12:00:00",
        "Description" => "测试描述",
        "ApiBaseInfo" => [
            "ApiState" => "开发中",
            "ApiAddress" => "http://www.gaoqiaoxue.com",
            "ApiMethod" => "GET",
            "ApiContentType" => "application/json"
        ],
        "ReqParameters" => [
            "HeaderVars" => [
                [
                    "HParams" => "Accept",
                    "HExample" => "Application/jsonApplication/jsonApplication/jsonApplication/jsonApplication/json",
                    "HBool" => "必填",
                    "HDesc" => "描述"
                ],
                [
                    "HParams" => "Accept",
                    "HExample" => "Application/jsonApplication/jsonApplication/jsonApplication/jsonApplication/json",
                    "HBool" => "必填",
                    "HDesc" => "描述"
                ]
            ],
            "QueryVars" => [
                [
                    "QParams" => "Accept",
                    "QExample" => "Application/json",
                    "QBool" => "必填",
                    "QDesc" => "描述"
                ],
                [
                    "QParams" => "Accept",
                    "QExample" => "Application/json",
                    "QBool" => "必填",
                    "QDesc" => "描述"
                ],
            ],
            "BodyVars" => [
                [
                    "BParams" => "Accept",
                    "BExample" => "Application/json",
                    "BBool" => "必填",
                    "BDesc" => "描述"
                ],
                [
                    "BParams" => "Accept",
                    "BExample" => "Application/json",
                    "BBool" => "必填",
                    "BDesc" => "描述"
                ],
            ],
            "RawVars" => "{'name':'pis0sion'}",
        ],
        "RespParameters" => [
            "RespBody" => [
                [
                    "RespParams" => "Accept",
                    "RespExample" => "Application/jsonApplication/jsonApplication/jsonApplication/jsonApplication/jsonApplication/json",
                    "RespType" => "必填",
                    "RespDesc" => "描述"
                ],
                [
                    "RespParams" => "Accept",
                    "RespExample" => "12313",
                    "RespType" => "必填",
                    "RespDesc" => "描述"
                ],
            ],
            "RespRawVars" => "{'name':'pis0sion'}",
        ],
    ], [
        "Title" => "测试文档3",
        "UpdateTime" => "2020-11-13 12:00:00",
        "Description" => "测试描述",
        "ApiBaseInfo" => [
            "ApiState" => "开发中",
            "ApiAddress" => "http://www.gaoqiaoxue.com",
            "ApiMethod" => "GET",
            "ApiContentType" => "application/json"
        ],
        "ReqParameters" => [
            "HeaderVars" => [
                [
                    "HParams" => "Accept",
                    "HExample" => "Application/jsonApplication/jsonApplication/jsonApplication/jsonApplication/json",
                    "HBool" => "必填",
                    "HDesc" => "描述"
                ],
                [
                    "HParams" => "Accept",
                    "HExample" => "Application/jsonApplication/jsonApplication/jsonApplication/jsonApplication/json",
                    "HBool" => "必填",
                    "HDesc" => "描述"
                ]
            ],
            "QueryVars" => [
                [
                    "QParams" => "Accept",
                    "QExample" => "Application/json",
                    "QBool" => "必填",
                    "QDesc" => "描述"
                ],
                [
                    "QParams" => "Accept",
                    "QExample" => "Application/json",
                    "QBool" => "必填",
                    "QDesc" => "描述"
                ],
            ],
            "BodyVars" => [
                [
                    "BParams" => "Accept",
                    "BExample" => "Application/json",
                    "BBool" => "必填",
                    "BDesc" => "描述"
                ],
                [
                    "BParams" => "Accept",
                    "BExample" => "Application/json",
                    "BBool" => "必填",
                    "BDesc" => "描述"
                ],
            ],
            "RawVars" => "{'name':'pis0sion'}",
        ],
        "RespParameters" => [
            "RespBody" => [
                [
                    "RespParams" => "Accept",
                    "RespExample" => "Application/jsonApplication/jsonApplication/jsonApplication/jsonApplication/jsonApplication/json",
                    "RespType" => "必填",
                    "RespDesc" => "描述"
                ],
                [
                    "RespParams" => "Accept",
                    "RespExample" => "12313",
                    "RespType" => "必填",
                    "RespDesc" => "描述"
                ],
            ],
            "RespRawVars" => "{'name':'pis0sion'}",
        ],
    ], [
        "Title" => "测试文档3",
        "UpdateTime" => "2020-11-13 12:00:00",
        "Description" => "测试描述",
        "ApiBaseInfo" => [
            "ApiState" => "开发中",
            "ApiAddress" => "http://www.gaoqiaoxue.com",
            "ApiMethod" => "GET",
            "ApiContentType" => "application/json"
        ],
        "ReqParameters" => [
            "HeaderVars" => [
                [
                    "HParams" => "Accept",
                    "HExample" => "Application/jsonApplication/jsonApplication/jsonApplication/jsonApplication/json",
                    "HBool" => "必填",
                    "HDesc" => "描述"
                ],
                [
                    "HParams" => "Accept",
                    "HExample" => "Application/jsonApplication/jsonApplication/jsonApplication/jsonApplication/json",
                    "HBool" => "必填",
                    "HDesc" => "描述"
                ]
            ],
            "QueryVars" => [
                [
                    "QParams" => "Accept",
                    "QExample" => "Application/json",
                    "QBool" => "必填",
                    "QDesc" => "描述"
                ],
                [
                    "QParams" => "Accept",
                    "QExample" => "Application/json",
                    "QBool" => "必填",
                    "QDesc" => "描述"
                ],
            ],
            "BodyVars" => [
                [
                    "BParams" => "Accept",
                    "BExample" => "Application/json",
                    "BBool" => "必填",
                    "BDesc" => "描述"
                ],
                [
                    "BParams" => "Accept",
                    "BExample" => "Application/json",
                    "BBool" => "必填",
                    "BDesc" => "描述"
                ],
            ],
            "RawVars" => "{'name':'pis0sion'}",
        ],
        "RespParameters" => [
            "RespBody" => [
                [
                    "RespParams" => "Accept",
                    "RespExample" => "Application/jsonApplication/jsonApplication/jsonApplication/jsonApplication/jsonApplication/json",
                    "RespType" => "必填",
                    "RespDesc" => "描述"
                ],
                [
                    "RespParams" => "Accept",
                    "RespExample" => "12313",
                    "RespType" => "必填",
                    "RespDesc" => "描述"
                ],
            ],
            "RespRawVars" => "{'name':'pis0sion'}",
        ],
    ]];

(new \Pis0sion\Docx\entity\DocxFactory())->run($renderData, "./tmpl/tmpl.docx", "merge.docx");
