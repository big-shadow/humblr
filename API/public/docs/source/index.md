---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)
<!-- END_INFO -->

#DistributionCenter

Where Products are stored and ProductInventory is tallied.
<!-- START_ca28eeff9881d2f1d00f87e6bc341a59 -->
## GET DistributionCenters

product_id is optional.

> Example request:

```bash
curl -X GET "http://localhost/api/distribution_centers" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/distribution_centers",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Type error: Too few arguments to function App\\Http\\Controllers\\DistributionCenterController::index(), 0 passed and exactly 1 expected",
    "exception": "Symfony\\Component\\Debug\\Exception\\FatalThrowableError",
    "file": "\/home\/rw\/Source\/roomservice\/RoomService\/app\/Http\/Controllers\/DistributionCenterController.php",
    "line": 21,
    "trace": [
        {
            "function": "index",
            "class": "App\\Http\\Controllers\\DistributionCenterController",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
            "line": 54,
            "function": "call_user_func_array"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 212,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 169,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 658,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 660,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 635,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 601,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 590,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/barryvdh\/laravel-cors\/src\/HandleCors.php",
            "line": 36,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 183,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 252,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 170,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/symfony\/console\/Application.php",
            "line": 946,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/symfony\/console\/Application.php",
            "line": 248,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/symfony\/console\/Application.php",
            "line": 148,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/distribution_centers`

`HEAD api/distribution_centers`


<!-- END_ca28eeff9881d2f1d00f87e6bc341a59 -->

<!-- START_289907fac3a88fcd6a916e156b6a985c -->
## GET DistributionCenters (Optional: Where ProductID) By Name

> Example request:

```bash
curl -X GET "http://localhost/api/distribution_centers/{name}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/distribution_centers/{name}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": [
        {
            "id": 1,
            "name": "Asperiores eaque iusto dolorem id nihil veniam.",
            "address": "Sed est possimus et quae sunt modi ullam nulla. Accusamus ut nesciunt atque ad autem sed. Quidem et ex id et quia.",
            "created_at": "2018-03-03 21:00:16",
            "updated_at": "2018-03-03 21:00:16",
            "product_inventories": [
                {
                    "id": 1,
                    "product_id": 1,
                    "distribution_center_id": 1,
                    "quantity": 7,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 2,
                    "product_id": 2,
                    "distribution_center_id": 1,
                    "quantity": 262,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 3,
                    "product_id": 3,
                    "distribution_center_id": 1,
                    "quantity": 4,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 4,
                    "product_id": 4,
                    "distribution_center_id": 1,
                    "quantity": 158,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 5,
                    "product_id": 5,
                    "distribution_center_id": 1,
                    "quantity": 182,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 6,
                    "product_id": 6,
                    "distribution_center_id": 1,
                    "quantity": 802,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 7,
                    "product_id": 7,
                    "distribution_center_id": 1,
                    "quantity": 562,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 8,
                    "product_id": 8,
                    "distribution_center_id": 1,
                    "quantity": 600,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 9,
                    "product_id": 9,
                    "distribution_center_id": 1,
                    "quantity": 638,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 10,
                    "product_id": 10,
                    "distribution_center_id": 1,
                    "quantity": 655,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 11,
                    "product_id": 11,
                    "distribution_center_id": 1,
                    "quantity": 296,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 12,
                    "product_id": 12,
                    "distribution_center_id": 1,
                    "quantity": 71,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 13,
                    "product_id": 13,
                    "distribution_center_id": 1,
                    "quantity": 136,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 14,
                    "product_id": 14,
                    "distribution_center_id": 1,
                    "quantity": 348,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 15,
                    "product_id": 15,
                    "distribution_center_id": 1,
                    "quantity": 181,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 16,
                    "product_id": 16,
                    "distribution_center_id": 1,
                    "quantity": 991,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 17,
                    "product_id": 17,
                    "distribution_center_id": 1,
                    "quantity": 658,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 18,
                    "product_id": 18,
                    "distribution_center_id": 1,
                    "quantity": 568,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 19,
                    "product_id": 19,
                    "distribution_center_id": 1,
                    "quantity": 560,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 20,
                    "product_id": 20,
                    "distribution_center_id": 1,
                    "quantity": 538,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 21,
                    "product_id": 21,
                    "distribution_center_id": 1,
                    "quantity": 652,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 22,
                    "product_id": 22,
                    "distribution_center_id": 1,
                    "quantity": 168,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 23,
                    "product_id": 23,
                    "distribution_center_id": 1,
                    "quantity": 113,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 24,
                    "product_id": 24,
                    "distribution_center_id": 1,
                    "quantity": 347,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 25,
                    "product_id": 25,
                    "distribution_center_id": 1,
                    "quantity": 598,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 26,
                    "product_id": 26,
                    "distribution_center_id": 1,
                    "quantity": 649,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 27,
                    "product_id": 27,
                    "distribution_center_id": 1,
                    "quantity": 812,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 28,
                    "product_id": 28,
                    "distribution_center_id": 1,
                    "quantity": 46,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 29,
                    "product_id": 29,
                    "distribution_center_id": 1,
                    "quantity": 828,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 30,
                    "product_id": 30,
                    "distribution_center_id": 1,
                    "quantity": 698,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 31,
                    "product_id": 31,
                    "distribution_center_id": 1,
                    "quantity": 175,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 32,
                    "product_id": 32,
                    "distribution_center_id": 1,
                    "quantity": 812,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 33,
                    "product_id": 33,
                    "distribution_center_id": 1,
                    "quantity": 903,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 34,
                    "product_id": 34,
                    "distribution_center_id": 1,
                    "quantity": 876,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 35,
                    "product_id": 35,
                    "distribution_center_id": 1,
                    "quantity": 261,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 36,
                    "product_id": 36,
                    "distribution_center_id": 1,
                    "quantity": 898,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 37,
                    "product_id": 37,
                    "distribution_center_id": 1,
                    "quantity": 560,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 38,
                    "product_id": 38,
                    "distribution_center_id": 1,
                    "quantity": 394,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 39,
                    "product_id": 39,
                    "distribution_center_id": 1,
                    "quantity": 47,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 40,
                    "product_id": 40,
                    "distribution_center_id": 1,
                    "quantity": 875,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 41,
                    "product_id": 41,
                    "distribution_center_id": 1,
                    "quantity": 785,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 42,
                    "product_id": 42,
                    "distribution_center_id": 1,
                    "quantity": 211,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 43,
                    "product_id": 43,
                    "distribution_center_id": 1,
                    "quantity": 69,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 44,
                    "product_id": 44,
                    "distribution_center_id": 1,
                    "quantity": 164,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 45,
                    "product_id": 45,
                    "distribution_center_id": 1,
                    "quantity": 438,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 46,
                    "product_id": 46,
                    "distribution_center_id": 1,
                    "quantity": 772,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 47,
                    "product_id": 47,
                    "distribution_center_id": 1,
                    "quantity": 562,
                    "created_at": "2018-03-03 21:00:23",
                    "updated_at": "2018-03-03 21:00:23"
                },
                {
                    "id": 48,
                    "product_id": 48,
                    "distribution_center_id": 1,
                    "quantity": 750,
                    "created_at": "2018-03-03 21:00:23",
                    "updated_at": "2018-03-03 21:00:23"
                },
                {
                    "id": 49,
                    "product_id": 49,
                    "distribution_center_id": 1,
                    "quantity": 828,
                    "created_at": "2018-03-03 21:00:23",
                    "updated_at": "2018-03-03 21:00:23"
                },
                {
                    "id": 50,
                    "product_id": 50,
                    "distribution_center_id": 1,
                    "quantity": 789,
                    "created_at": "2018-03-03 21:00:23",
                    "updated_at": "2018-03-03 21:00:23"
                }
            ]
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/distribution_centers\/1?page=1",
        "last": "http:\/\/localhost\/api\/distribution_centers\/1?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/distribution_centers\/1",
        "per_page": 5,
        "to": 1,
        "total": 1
    }
}
```

### HTTP Request
`GET api/distribution_centers/{name}`

`HEAD api/distribution_centers/{name}`


<!-- END_289907fac3a88fcd6a916e156b6a985c -->

<!-- START_6a4d01f90d06d0d22016501d2efc3c1a -->
## GET DistributionCenters

product_id is optional.

> Example request:

```bash
curl -X GET "http://localhost/api/distribution_centers/{product_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/distribution_centers/{product_id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": [
        {
            "id": 1,
            "name": "Asperiores eaque iusto dolorem id nihil veniam.",
            "address": "Sed est possimus et quae sunt modi ullam nulla. Accusamus ut nesciunt atque ad autem sed. Quidem et ex id et quia.",
            "created_at": "2018-03-03 21:00:16",
            "updated_at": "2018-03-03 21:00:16",
            "product_inventories": [
                {
                    "id": 1,
                    "product_id": 1,
                    "distribution_center_id": 1,
                    "quantity": 7,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 2,
                    "product_id": 2,
                    "distribution_center_id": 1,
                    "quantity": 262,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 3,
                    "product_id": 3,
                    "distribution_center_id": 1,
                    "quantity": 4,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 4,
                    "product_id": 4,
                    "distribution_center_id": 1,
                    "quantity": 158,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 5,
                    "product_id": 5,
                    "distribution_center_id": 1,
                    "quantity": 182,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 6,
                    "product_id": 6,
                    "distribution_center_id": 1,
                    "quantity": 802,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 7,
                    "product_id": 7,
                    "distribution_center_id": 1,
                    "quantity": 562,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 8,
                    "product_id": 8,
                    "distribution_center_id": 1,
                    "quantity": 600,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 9,
                    "product_id": 9,
                    "distribution_center_id": 1,
                    "quantity": 638,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 10,
                    "product_id": 10,
                    "distribution_center_id": 1,
                    "quantity": 655,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 11,
                    "product_id": 11,
                    "distribution_center_id": 1,
                    "quantity": 296,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 12,
                    "product_id": 12,
                    "distribution_center_id": 1,
                    "quantity": 71,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 13,
                    "product_id": 13,
                    "distribution_center_id": 1,
                    "quantity": 136,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 14,
                    "product_id": 14,
                    "distribution_center_id": 1,
                    "quantity": 348,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 15,
                    "product_id": 15,
                    "distribution_center_id": 1,
                    "quantity": 181,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 16,
                    "product_id": 16,
                    "distribution_center_id": 1,
                    "quantity": 991,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 17,
                    "product_id": 17,
                    "distribution_center_id": 1,
                    "quantity": 658,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 18,
                    "product_id": 18,
                    "distribution_center_id": 1,
                    "quantity": 568,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 19,
                    "product_id": 19,
                    "distribution_center_id": 1,
                    "quantity": 560,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 20,
                    "product_id": 20,
                    "distribution_center_id": 1,
                    "quantity": 538,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 21,
                    "product_id": 21,
                    "distribution_center_id": 1,
                    "quantity": 652,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 22,
                    "product_id": 22,
                    "distribution_center_id": 1,
                    "quantity": 168,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 23,
                    "product_id": 23,
                    "distribution_center_id": 1,
                    "quantity": 113,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 24,
                    "product_id": 24,
                    "distribution_center_id": 1,
                    "quantity": 347,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 25,
                    "product_id": 25,
                    "distribution_center_id": 1,
                    "quantity": 598,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 26,
                    "product_id": 26,
                    "distribution_center_id": 1,
                    "quantity": 649,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 27,
                    "product_id": 27,
                    "distribution_center_id": 1,
                    "quantity": 812,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 28,
                    "product_id": 28,
                    "distribution_center_id": 1,
                    "quantity": 46,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 29,
                    "product_id": 29,
                    "distribution_center_id": 1,
                    "quantity": 828,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 30,
                    "product_id": 30,
                    "distribution_center_id": 1,
                    "quantity": 698,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 31,
                    "product_id": 31,
                    "distribution_center_id": 1,
                    "quantity": 175,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 32,
                    "product_id": 32,
                    "distribution_center_id": 1,
                    "quantity": 812,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 33,
                    "product_id": 33,
                    "distribution_center_id": 1,
                    "quantity": 903,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 34,
                    "product_id": 34,
                    "distribution_center_id": 1,
                    "quantity": 876,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 35,
                    "product_id": 35,
                    "distribution_center_id": 1,
                    "quantity": 261,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 36,
                    "product_id": 36,
                    "distribution_center_id": 1,
                    "quantity": 898,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 37,
                    "product_id": 37,
                    "distribution_center_id": 1,
                    "quantity": 560,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 38,
                    "product_id": 38,
                    "distribution_center_id": 1,
                    "quantity": 394,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 39,
                    "product_id": 39,
                    "distribution_center_id": 1,
                    "quantity": 47,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 40,
                    "product_id": 40,
                    "distribution_center_id": 1,
                    "quantity": 875,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 41,
                    "product_id": 41,
                    "distribution_center_id": 1,
                    "quantity": 785,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 42,
                    "product_id": 42,
                    "distribution_center_id": 1,
                    "quantity": 211,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 43,
                    "product_id": 43,
                    "distribution_center_id": 1,
                    "quantity": 69,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 44,
                    "product_id": 44,
                    "distribution_center_id": 1,
                    "quantity": 164,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 45,
                    "product_id": 45,
                    "distribution_center_id": 1,
                    "quantity": 438,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 46,
                    "product_id": 46,
                    "distribution_center_id": 1,
                    "quantity": 772,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 47,
                    "product_id": 47,
                    "distribution_center_id": 1,
                    "quantity": 562,
                    "created_at": "2018-03-03 21:00:23",
                    "updated_at": "2018-03-03 21:00:23"
                },
                {
                    "id": 48,
                    "product_id": 48,
                    "distribution_center_id": 1,
                    "quantity": 750,
                    "created_at": "2018-03-03 21:00:23",
                    "updated_at": "2018-03-03 21:00:23"
                },
                {
                    "id": 49,
                    "product_id": 49,
                    "distribution_center_id": 1,
                    "quantity": 828,
                    "created_at": "2018-03-03 21:00:23",
                    "updated_at": "2018-03-03 21:00:23"
                },
                {
                    "id": 50,
                    "product_id": 50,
                    "distribution_center_id": 1,
                    "quantity": 789,
                    "created_at": "2018-03-03 21:00:23",
                    "updated_at": "2018-03-03 21:00:23"
                }
            ]
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/distribution_centers\/1?page=1",
        "last": "http:\/\/localhost\/api\/distribution_centers\/1?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/distribution_centers\/1",
        "per_page": 5,
        "to": 1,
        "total": 1
    }
}
```

### HTTP Request
`GET api/distribution_centers/{product_id}`

`HEAD api/distribution_centers/{product_id}`


<!-- END_6a4d01f90d06d0d22016501d2efc3c1a -->

<!-- START_0c3acd3fdb9b7abf5c81c4905dc667b7 -->
## GET DistributionCenters (Optional: Where ProductID) By Name

> Example request:

```bash
curl -X GET "http://localhost/api/distribution_centers/{product_id}/{name}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/distribution_centers/{product_id}/{name}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": [
        {
            "id": 1,
            "name": "Asperiores eaque iusto dolorem id nihil veniam.",
            "address": "Sed est possimus et quae sunt modi ullam nulla. Accusamus ut nesciunt atque ad autem sed. Quidem et ex id et quia.",
            "created_at": "2018-03-03 21:00:16",
            "updated_at": "2018-03-03 21:00:16",
            "product_inventories": [
                {
                    "id": 1,
                    "product_id": 1,
                    "distribution_center_id": 1,
                    "quantity": 7,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 2,
                    "product_id": 2,
                    "distribution_center_id": 1,
                    "quantity": 262,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 3,
                    "product_id": 3,
                    "distribution_center_id": 1,
                    "quantity": 4,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 4,
                    "product_id": 4,
                    "distribution_center_id": 1,
                    "quantity": 158,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 5,
                    "product_id": 5,
                    "distribution_center_id": 1,
                    "quantity": 182,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 6,
                    "product_id": 6,
                    "distribution_center_id": 1,
                    "quantity": 802,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 7,
                    "product_id": 7,
                    "distribution_center_id": 1,
                    "quantity": 562,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 8,
                    "product_id": 8,
                    "distribution_center_id": 1,
                    "quantity": 600,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 9,
                    "product_id": 9,
                    "distribution_center_id": 1,
                    "quantity": 638,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 10,
                    "product_id": 10,
                    "distribution_center_id": 1,
                    "quantity": 655,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 11,
                    "product_id": 11,
                    "distribution_center_id": 1,
                    "quantity": 296,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 12,
                    "product_id": 12,
                    "distribution_center_id": 1,
                    "quantity": 71,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 13,
                    "product_id": 13,
                    "distribution_center_id": 1,
                    "quantity": 136,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 14,
                    "product_id": 14,
                    "distribution_center_id": 1,
                    "quantity": 348,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 15,
                    "product_id": 15,
                    "distribution_center_id": 1,
                    "quantity": 181,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20"
                },
                {
                    "id": 16,
                    "product_id": 16,
                    "distribution_center_id": 1,
                    "quantity": 991,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 17,
                    "product_id": 17,
                    "distribution_center_id": 1,
                    "quantity": 658,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 18,
                    "product_id": 18,
                    "distribution_center_id": 1,
                    "quantity": 568,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 19,
                    "product_id": 19,
                    "distribution_center_id": 1,
                    "quantity": 560,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 20,
                    "product_id": 20,
                    "distribution_center_id": 1,
                    "quantity": 538,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 21,
                    "product_id": 21,
                    "distribution_center_id": 1,
                    "quantity": 652,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 22,
                    "product_id": 22,
                    "distribution_center_id": 1,
                    "quantity": 168,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 23,
                    "product_id": 23,
                    "distribution_center_id": 1,
                    "quantity": 113,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 24,
                    "product_id": 24,
                    "distribution_center_id": 1,
                    "quantity": 347,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 25,
                    "product_id": 25,
                    "distribution_center_id": 1,
                    "quantity": 598,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 26,
                    "product_id": 26,
                    "distribution_center_id": 1,
                    "quantity": 649,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 27,
                    "product_id": 27,
                    "distribution_center_id": 1,
                    "quantity": 812,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 28,
                    "product_id": 28,
                    "distribution_center_id": 1,
                    "quantity": 46,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 29,
                    "product_id": 29,
                    "distribution_center_id": 1,
                    "quantity": 828,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 30,
                    "product_id": 30,
                    "distribution_center_id": 1,
                    "quantity": 698,
                    "created_at": "2018-03-03 21:00:21",
                    "updated_at": "2018-03-03 21:00:21"
                },
                {
                    "id": 31,
                    "product_id": 31,
                    "distribution_center_id": 1,
                    "quantity": 175,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 32,
                    "product_id": 32,
                    "distribution_center_id": 1,
                    "quantity": 812,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 33,
                    "product_id": 33,
                    "distribution_center_id": 1,
                    "quantity": 903,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 34,
                    "product_id": 34,
                    "distribution_center_id": 1,
                    "quantity": 876,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 35,
                    "product_id": 35,
                    "distribution_center_id": 1,
                    "quantity": 261,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 36,
                    "product_id": 36,
                    "distribution_center_id": 1,
                    "quantity": 898,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 37,
                    "product_id": 37,
                    "distribution_center_id": 1,
                    "quantity": 560,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 38,
                    "product_id": 38,
                    "distribution_center_id": 1,
                    "quantity": 394,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 39,
                    "product_id": 39,
                    "distribution_center_id": 1,
                    "quantity": 47,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 40,
                    "product_id": 40,
                    "distribution_center_id": 1,
                    "quantity": 875,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 41,
                    "product_id": 41,
                    "distribution_center_id": 1,
                    "quantity": 785,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 42,
                    "product_id": 42,
                    "distribution_center_id": 1,
                    "quantity": 211,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 43,
                    "product_id": 43,
                    "distribution_center_id": 1,
                    "quantity": 69,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 44,
                    "product_id": 44,
                    "distribution_center_id": 1,
                    "quantity": 164,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 45,
                    "product_id": 45,
                    "distribution_center_id": 1,
                    "quantity": 438,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 46,
                    "product_id": 46,
                    "distribution_center_id": 1,
                    "quantity": 772,
                    "created_at": "2018-03-03 21:00:22",
                    "updated_at": "2018-03-03 21:00:22"
                },
                {
                    "id": 47,
                    "product_id": 47,
                    "distribution_center_id": 1,
                    "quantity": 562,
                    "created_at": "2018-03-03 21:00:23",
                    "updated_at": "2018-03-03 21:00:23"
                },
                {
                    "id": 48,
                    "product_id": 48,
                    "distribution_center_id": 1,
                    "quantity": 750,
                    "created_at": "2018-03-03 21:00:23",
                    "updated_at": "2018-03-03 21:00:23"
                },
                {
                    "id": 49,
                    "product_id": 49,
                    "distribution_center_id": 1,
                    "quantity": 828,
                    "created_at": "2018-03-03 21:00:23",
                    "updated_at": "2018-03-03 21:00:23"
                },
                {
                    "id": 50,
                    "product_id": 50,
                    "distribution_center_id": 1,
                    "quantity": 789,
                    "created_at": "2018-03-03 21:00:23",
                    "updated_at": "2018-03-03 21:00:23"
                }
            ]
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/distribution_centers\/1?page=1",
        "last": "http:\/\/localhost\/api\/distribution_centers\/1?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/distribution_centers\/1",
        "per_page": 5,
        "to": 1,
        "total": 1
    }
}
```

### HTTP Request
`GET api/distribution_centers/{product_id}/{name}`

`HEAD api/distribution_centers/{product_id}/{name}`


<!-- END_0c3acd3fdb9b7abf5c81c4905dc667b7 -->

<!-- START_60769637e03aba01ee02f5108c717bab -->
## GET DistributionCenter

> Example request:

```bash
curl -X GET "http://localhost/api/distribution_center/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/distribution_center/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "name": "Asperiores eaque iusto dolorem id nihil veniam.",
    "address": "Sed est possimus et quae sunt modi ullam nulla. Accusamus ut nesciunt atque ad autem sed. Quidem et ex id et quia.",
    "created_at": "2018-03-03 21:00:16",
    "updated_at": "2018-03-03 21:00:16"
}
```

### HTTP Request
`GET api/distribution_center/{id}`

`HEAD api/distribution_center/{id}`


<!-- END_60769637e03aba01ee02f5108c717bab -->

<!-- START_ee5e6a3d1ec546533015817e0b6a8187 -->
## POST,PUT DistributionCenter

> Example request:

```bash
curl -X POST "http://localhost/api/distribution_center" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/distribution_center",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/distribution_center`


<!-- END_ee5e6a3d1ec546533015817e0b6a8187 -->

<!-- START_e04e5781e06f5410c46328c800d466cf -->
## POST,PUT DistributionCenter

> Example request:

```bash
curl -X PUT "http://localhost/api/distribution_center" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/distribution_center",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/distribution_center`


<!-- END_e04e5781e06f5410c46328c800d466cf -->

<!-- START_6b4b71cfb10baf04cb694598dc045638 -->
## DELETE DistributionCenter

> Example request:

```bash
curl -X DELETE "http://localhost/api/distribution_center/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/distribution_center/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/distribution_center/{id}`


<!-- END_6b4b71cfb10baf04cb694598dc045638 -->

#Product

The basic Product record at the core of this platform.
<!-- START_d6315c0f80fdc5b8b5cafcb7768d054e -->
## GET Products

> Example request:

```bash
curl -X GET "http://localhost/api/products" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/products",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": [
        {
            "id": 1,
            "created_at": "2018-03-03 21:00:16",
            "updated_at": "2018-03-03 21:00:16",
            "title": "Expedita enim assumenda non.",
            "description": "Consectetur et velit enim. Velit recusandae amet dolores omnis consequatur nostrum.",
            "price": 13,
            "image_filename": null,
            "gross_stock": "7",
            "average_cpu": "N\/A",
            "product_inventories": [
                {
                    "id": 1,
                    "product_id": 1,
                    "distribution_center_id": 1,
                    "quantity": 7,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20",
                    "distribution_center": {
                        "id": 1,
                        "name": "Asperiores eaque iusto dolorem id nihil veniam.",
                        "address": "Sed est possimus et quae sunt modi ullam nulla. Accusamus ut nesciunt atque ad autem sed. Quidem et ex id et quia.",
                        "created_at": "2018-03-03 21:00:16",
                        "updated_at": "2018-03-03 21:00:16"
                    }
                }
            ]
        },
        {
            "id": 2,
            "created_at": "2018-03-03 21:00:16",
            "updated_at": "2018-03-03 21:00:16",
            "title": "Voluptas veniam doloremque temporibus quis.",
            "description": "Ut omnis natus illum dolores eos. Iure autem quia enim illum. Dolorem quis sed consectetur eaque.",
            "price": 24,
            "image_filename": null,
            "gross_stock": "262",
            "average_cpu": "N\/A",
            "product_inventories": [
                {
                    "id": 2,
                    "product_id": 2,
                    "distribution_center_id": 1,
                    "quantity": 262,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20",
                    "distribution_center": {
                        "id": 1,
                        "name": "Asperiores eaque iusto dolorem id nihil veniam.",
                        "address": "Sed est possimus et quae sunt modi ullam nulla. Accusamus ut nesciunt atque ad autem sed. Quidem et ex id et quia.",
                        "created_at": "2018-03-03 21:00:16",
                        "updated_at": "2018-03-03 21:00:16"
                    }
                }
            ]
        },
        {
            "id": 3,
            "created_at": "2018-03-03 21:00:16",
            "updated_at": "2018-03-03 21:00:16",
            "title": "Ut ut molestiae eligendi sed ea voluptas.",
            "description": "Voluptatem non iusto iusto repudiandae laboriosam laborum cupiditate. Porro eos provident libero maxime ad.",
            "price": 19,
            "image_filename": null,
            "gross_stock": "4",
            "average_cpu": "N\/A",
            "product_inventories": [
                {
                    "id": 3,
                    "product_id": 3,
                    "distribution_center_id": 1,
                    "quantity": 4,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20",
                    "distribution_center": {
                        "id": 1,
                        "name": "Asperiores eaque iusto dolorem id nihil veniam.",
                        "address": "Sed est possimus et quae sunt modi ullam nulla. Accusamus ut nesciunt atque ad autem sed. Quidem et ex id et quia.",
                        "created_at": "2018-03-03 21:00:16",
                        "updated_at": "2018-03-03 21:00:16"
                    }
                }
            ]
        },
        {
            "id": 4,
            "created_at": "2018-03-03 21:00:16",
            "updated_at": "2018-03-03 21:00:16",
            "title": "Dolorum et ad nostrum repudiandae omnis.",
            "description": "Magnam et maxime sint ut voluptates tempora. Fugiat ut repellendus non et atque cum omnis.",
            "price": 19,
            "image_filename": null,
            "gross_stock": "158",
            "average_cpu": "N\/A",
            "product_inventories": [
                {
                    "id": 4,
                    "product_id": 4,
                    "distribution_center_id": 1,
                    "quantity": 158,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20",
                    "distribution_center": {
                        "id": 1,
                        "name": "Asperiores eaque iusto dolorem id nihil veniam.",
                        "address": "Sed est possimus et quae sunt modi ullam nulla. Accusamus ut nesciunt atque ad autem sed. Quidem et ex id et quia.",
                        "created_at": "2018-03-03 21:00:16",
                        "updated_at": "2018-03-03 21:00:16"
                    }
                }
            ]
        },
        {
            "id": 5,
            "created_at": "2018-03-03 21:00:17",
            "updated_at": "2018-03-03 21:00:17",
            "title": "Magnam reiciendis totam saepe.",
            "description": "Hic dolores vero dignissimos impedit. Sed quia nostrum vitae eveniet. Esse quia ea sed eaque eaque ipsam.",
            "price": 17,
            "image_filename": null,
            "gross_stock": "182",
            "average_cpu": "N\/A",
            "product_inventories": [
                {
                    "id": 5,
                    "product_id": 5,
                    "distribution_center_id": 1,
                    "quantity": 182,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20",
                    "distribution_center": {
                        "id": 1,
                        "name": "Asperiores eaque iusto dolorem id nihil veniam.",
                        "address": "Sed est possimus et quae sunt modi ullam nulla. Accusamus ut nesciunt atque ad autem sed. Quidem et ex id et quia.",
                        "created_at": "2018-03-03 21:00:16",
                        "updated_at": "2018-03-03 21:00:16"
                    }
                }
            ]
        },
        {
            "id": 6,
            "created_at": "2018-03-03 21:00:17",
            "updated_at": "2018-03-03 21:00:17",
            "title": "Est esse et alias facilis.",
            "description": "Magnam reiciendis quaerat repellat. Corrupti impedit molestiae exercitationem dolor repellat qui.",
            "price": 25,
            "image_filename": null,
            "gross_stock": "802",
            "average_cpu": "N\/A",
            "product_inventories": [
                {
                    "id": 6,
                    "product_id": 6,
                    "distribution_center_id": 1,
                    "quantity": 802,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20",
                    "distribution_center": {
                        "id": 1,
                        "name": "Asperiores eaque iusto dolorem id nihil veniam.",
                        "address": "Sed est possimus et quae sunt modi ullam nulla. Accusamus ut nesciunt atque ad autem sed. Quidem et ex id et quia.",
                        "created_at": "2018-03-03 21:00:16",
                        "updated_at": "2018-03-03 21:00:16"
                    }
                }
            ]
        },
        {
            "id": 7,
            "created_at": "2018-03-03 21:00:17",
            "updated_at": "2018-03-03 21:00:17",
            "title": "Eum dolore perspiciatis cumque doloremque.",
            "description": "Ad quia vero ullam non. Illo aliquam nobis voluptas. Consequatur optio tenetur necessitatibus doloribus nobis.",
            "price": 20,
            "image_filename": null,
            "gross_stock": "562",
            "average_cpu": "N\/A",
            "product_inventories": [
                {
                    "id": 7,
                    "product_id": 7,
                    "distribution_center_id": 1,
                    "quantity": 562,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20",
                    "distribution_center": {
                        "id": 1,
                        "name": "Asperiores eaque iusto dolorem id nihil veniam.",
                        "address": "Sed est possimus et quae sunt modi ullam nulla. Accusamus ut nesciunt atque ad autem sed. Quidem et ex id et quia.",
                        "created_at": "2018-03-03 21:00:16",
                        "updated_at": "2018-03-03 21:00:16"
                    }
                }
            ]
        },
        {
            "id": 8,
            "created_at": "2018-03-03 21:00:17",
            "updated_at": "2018-03-03 21:00:17",
            "title": "Deserunt doloremque dolor error.",
            "description": "Repellendus voluptas voluptatem fugit porro. Omnis voluptatem debitis rerum rerum est placeat eveniet.",
            "price": 9,
            "image_filename": null,
            "gross_stock": "600",
            "average_cpu": "N\/A",
            "product_inventories": [
                {
                    "id": 8,
                    "product_id": 8,
                    "distribution_center_id": 1,
                    "quantity": 600,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20",
                    "distribution_center": {
                        "id": 1,
                        "name": "Asperiores eaque iusto dolorem id nihil veniam.",
                        "address": "Sed est possimus et quae sunt modi ullam nulla. Accusamus ut nesciunt atque ad autem sed. Quidem et ex id et quia.",
                        "created_at": "2018-03-03 21:00:16",
                        "updated_at": "2018-03-03 21:00:16"
                    }
                }
            ]
        },
        {
            "id": 9,
            "created_at": "2018-03-03 21:00:17",
            "updated_at": "2018-03-03 21:00:17",
            "title": "Sit ducimus nobis assumenda aliquid deleniti.",
            "description": "Dolorum ut aut voluptatibus fuga reiciendis. Cupiditate ad maiores laudantium quo voluptatibus debitis.",
            "price": 6,
            "image_filename": null,
            "gross_stock": "638",
            "average_cpu": "N\/A",
            "product_inventories": [
                {
                    "id": 9,
                    "product_id": 9,
                    "distribution_center_id": 1,
                    "quantity": 638,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20",
                    "distribution_center": {
                        "id": 1,
                        "name": "Asperiores eaque iusto dolorem id nihil veniam.",
                        "address": "Sed est possimus et quae sunt modi ullam nulla. Accusamus ut nesciunt atque ad autem sed. Quidem et ex id et quia.",
                        "created_at": "2018-03-03 21:00:16",
                        "updated_at": "2018-03-03 21:00:16"
                    }
                }
            ]
        },
        {
            "id": 10,
            "created_at": "2018-03-03 21:00:17",
            "updated_at": "2018-03-03 21:00:17",
            "title": "Facere enim animi voluptatum.",
            "description": "Enim id blanditiis qui. Modi qui consequatur dolorum.",
            "price": 8,
            "image_filename": null,
            "gross_stock": "655",
            "average_cpu": "N\/A",
            "product_inventories": [
                {
                    "id": 10,
                    "product_id": 10,
                    "distribution_center_id": 1,
                    "quantity": 655,
                    "created_at": "2018-03-03 21:00:20",
                    "updated_at": "2018-03-03 21:00:20",
                    "distribution_center": {
                        "id": 1,
                        "name": "Asperiores eaque iusto dolorem id nihil veniam.",
                        "address": "Sed est possimus et quae sunt modi ullam nulla. Accusamus ut nesciunt atque ad autem sed. Quidem et ex id et quia.",
                        "created_at": "2018-03-03 21:00:16",
                        "updated_at": "2018-03-03 21:00:16"
                    }
                }
            ]
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/products?page=1",
        "last": "http:\/\/localhost\/api\/products?page=16",
        "prev": null,
        "next": "http:\/\/localhost\/api\/products?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 16,
        "path": "http:\/\/localhost\/api\/products",
        "per_page": 10,
        "to": 10,
        "total": 160
    }
}
```

### HTTP Request
`GET api/products`

`HEAD api/products`


<!-- END_d6315c0f80fdc5b8b5cafcb7768d054e -->

<!-- START_6bd66aadb066cb93ce9e417fb62bede2 -->
## GET Products By Name

> Example request:

```bash
curl -X GET "http://localhost/api/products/{name}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/products/{name}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/RouteCollection.php",
    "line": 179,
    "trace": [
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 612,
            "function": "match",
            "class": "Illuminate\\Routing\\RouteCollection",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 601,
            "function": "findRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 590,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/barryvdh\/laravel-cors\/src\/HandleCors.php",
            "line": 36,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 183,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 252,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 170,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/symfony\/console\/Application.php",
            "line": 946,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/symfony\/console\/Application.php",
            "line": 248,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/symfony\/console\/Application.php",
            "line": 148,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/products/{name}`

`HEAD api/products/{name}`


<!-- END_6bd66aadb066cb93ce9e417fb62bede2 -->

<!-- START_9d40d58291bfb7493c4475293af5bbe7 -->
## GET Product

> Example request:

```bash
curl -X GET "http://localhost/api/product/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/product/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "created_at": "2018-03-03 21:00:16",
    "updated_at": "2018-03-03 21:00:16",
    "title": "Expedita enim assumenda non.",
    "description": "Consectetur et velit enim. Velit recusandae amet dolores omnis consequatur nostrum.",
    "price": 13,
    "image_filename": null
}
```

### HTTP Request
`GET api/product/{id}`

`HEAD api/product/{id}`


<!-- END_9d40d58291bfb7493c4475293af5bbe7 -->

<!-- START_2d62ba7cf16a7d6db447375e13e86c34 -->
## POST,PUT Product

> Example request:

```bash
curl -X POST "http://localhost/api/product" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/product",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/product`


<!-- END_2d62ba7cf16a7d6db447375e13e86c34 -->

<!-- START_dab3d52a118089afad1b85c3a5073d29 -->
## POST,PUT Product

> Example request:

```bash
curl -X PUT "http://localhost/api/product" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/product",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/product`


<!-- END_dab3d52a118089afad1b85c3a5073d29 -->

<!-- START_180d60b6481f5b1787ffcdb42da65460 -->
## DELETE Product

> Example request:

```bash
curl -X DELETE "http://localhost/api/product/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/product/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/product/{id}`


<!-- END_180d60b6481f5b1787ffcdb42da65460 -->

<!-- START_e0d93337e811952bca5b04743be2300d -->
## POST Product Image

> Example request:

```bash
curl -X POST "http://localhost/api/product/image" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/product/image",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/product/image`


<!-- END_e0d93337e811952bca5b04743be2300d -->

#ProductCostAudit

Intended to trace a single update to the cost of a single certain Product.
<!-- START_55b77df94cec1a290706db1c6d6088b3 -->
## GET ProductCostAudits Where ProductID

> Example request:

```bash
curl -X GET "http://localhost/api/product_cost_audits/{product_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/product_cost_audits/{product_id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": [],
    "links": {
        "first": "http:\/\/localhost\/api\/product_cost_audits\/1?page=1",
        "last": "http:\/\/localhost\/api\/product_cost_audits\/1?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": null,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/product_cost_audits\/1",
        "per_page": 10,
        "to": null,
        "total": 0
    }
}
```

### HTTP Request
`GET api/product_cost_audits/{product_id}`

`HEAD api/product_cost_audits/{product_id}`


<!-- END_55b77df94cec1a290706db1c6d6088b3 -->

<!-- START_cba3bd624e91b8e341c840d7454099cc -->
## GET ProductCostAudit

> Example request:

```bash
curl -X GET "http://localhost/api/product_cost_audit/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/product_cost_audit/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "units_purchased": 47,
    "total_cost": 50.29,
    "cost_per_unit": 2.4,
    "supplier_note": "Possimus in voluptates rerum sunt. Est autem est et et quae. Nobis molestiae tempora repudiandae praesentium qui.",
    "created_at": "2018-03-03 21:00:30",
    "updated_at": "2018-03-03 21:00:30",
    "product_id": 101
}
```

### HTTP Request
`GET api/product_cost_audit/{id}`

`HEAD api/product_cost_audit/{id}`


<!-- END_cba3bd624e91b8e341c840d7454099cc -->

<!-- START_b8d6da171dfbc47e8fb582d43672190f -->
## POST, PUT ProductCostAudit

> Example request:

```bash
curl -X POST "http://localhost/api/product_cost_audit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/product_cost_audit",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/product_cost_audit`


<!-- END_b8d6da171dfbc47e8fb582d43672190f -->

<!-- START_0574bb1518b6a2eddc7b264c20216343 -->
## POST, PUT ProductCostAudit

> Example request:

```bash
curl -X PUT "http://localhost/api/product_cost_audit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/product_cost_audit",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/product_cost_audit`


<!-- END_0574bb1518b6a2eddc7b264c20216343 -->

<!-- START_dcfbb8d9fe16b848a3c05913714ef6c1 -->
## DELETE ProductCostAudit

> Example request:

```bash
curl -X DELETE "http://localhost/api/product_cost_audit/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/product_cost_audit/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/product_cost_audit/{id}`


<!-- END_dcfbb8d9fe16b848a3c05913714ef6c1 -->

#ProductInventory

A one-to-one relationship with DistributionCenter and Product, representing Product available at the given DistributionCenter.
<!-- START_7e9749d8b3230bf7a875d04449f0c6b7 -->
## GET ProductCostInventories Where DistributionCenterID

> Example request:

```bash
curl -X GET "http://localhost/api/distribution_center/inventories/{distribution_center_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/distribution_center/inventories/{distribution_center_id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": [
        {
            "id": 1,
            "product_id": 1,
            "distribution_center_id": 1,
            "quantity": 7,
            "created_at": "2018-03-03 21:00:20",
            "updated_at": "2018-03-03 21:00:20"
        },
        {
            "id": 2,
            "product_id": 2,
            "distribution_center_id": 1,
            "quantity": 262,
            "created_at": "2018-03-03 21:00:20",
            "updated_at": "2018-03-03 21:00:20"
        },
        {
            "id": 3,
            "product_id": 3,
            "distribution_center_id": 1,
            "quantity": 4,
            "created_at": "2018-03-03 21:00:20",
            "updated_at": "2018-03-03 21:00:20"
        },
        {
            "id": 4,
            "product_id": 4,
            "distribution_center_id": 1,
            "quantity": 158,
            "created_at": "2018-03-03 21:00:20",
            "updated_at": "2018-03-03 21:00:20"
        },
        {
            "id": 5,
            "product_id": 5,
            "distribution_center_id": 1,
            "quantity": 182,
            "created_at": "2018-03-03 21:00:20",
            "updated_at": "2018-03-03 21:00:20"
        },
        {
            "id": 6,
            "product_id": 6,
            "distribution_center_id": 1,
            "quantity": 802,
            "created_at": "2018-03-03 21:00:20",
            "updated_at": "2018-03-03 21:00:20"
        },
        {
            "id": 7,
            "product_id": 7,
            "distribution_center_id": 1,
            "quantity": 562,
            "created_at": "2018-03-03 21:00:20",
            "updated_at": "2018-03-03 21:00:20"
        },
        {
            "id": 8,
            "product_id": 8,
            "distribution_center_id": 1,
            "quantity": 600,
            "created_at": "2018-03-03 21:00:20",
            "updated_at": "2018-03-03 21:00:20"
        },
        {
            "id": 9,
            "product_id": 9,
            "distribution_center_id": 1,
            "quantity": 638,
            "created_at": "2018-03-03 21:00:20",
            "updated_at": "2018-03-03 21:00:20"
        },
        {
            "id": 10,
            "product_id": 10,
            "distribution_center_id": 1,
            "quantity": 655,
            "created_at": "2018-03-03 21:00:20",
            "updated_at": "2018-03-03 21:00:20"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/distribution_center\/inventories\/1?page=1",
        "last": "http:\/\/localhost\/api\/distribution_center\/inventories\/1?page=5",
        "prev": null,
        "next": "http:\/\/localhost\/api\/distribution_center\/inventories\/1?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 5,
        "path": "http:\/\/localhost\/api\/distribution_center\/inventories\/1",
        "per_page": 10,
        "to": 10,
        "total": 50
    }
}
```

### HTTP Request
`GET api/distribution_center/inventories/{distribution_center_id}`

`HEAD api/distribution_center/inventories/{distribution_center_id}`


<!-- END_7e9749d8b3230bf7a875d04449f0c6b7 -->

<!-- START_a9f772215061b693fbc1239a8507c7ac -->
## GET ProductCostInventories Where ProductID

> Example request:

```bash
curl -X GET "http://localhost/api/product/inventories" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/product/inventories",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Type error: Too few arguments to function App\\Http\\Controllers\\ProductInventoryController::index(), 0 passed and exactly 1 expected",
    "exception": "Symfony\\Component\\Debug\\Exception\\FatalThrowableError",
    "file": "\/home\/rw\/Source\/roomservice\/RoomService\/app\/Http\/Controllers\/ProductInventoryController.php",
    "line": 19,
    "trace": [
        {
            "function": "index",
            "class": "App\\Http\\Controllers\\ProductInventoryController",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
            "line": 54,
            "function": "call_user_func_array"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 212,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 169,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 658,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 660,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 635,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 601,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 590,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/barryvdh\/laravel-cors\/src\/HandleCors.php",
            "line": 36,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 183,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 252,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 170,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/symfony\/console\/Application.php",
            "line": 946,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/symfony\/console\/Application.php",
            "line": 248,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/symfony\/console\/Application.php",
            "line": 148,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/rw\/Source\/roomservice\/RoomService\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/product/inventories`

`HEAD api/product/inventories`


<!-- END_a9f772215061b693fbc1239a8507c7ac -->

<!-- START_e520b4c61f6a6f3ff94ac47af59165a1 -->
## GET ProductCostInventories Where ProductID

> Example request:

```bash
curl -X GET "http://localhost/api/product/inventories/{product_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/product/inventories/{product_id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": [
        {
            "id": 1,
            "product_id": 1,
            "distribution_center_id": 1,
            "quantity": 7,
            "created_at": "2018-03-03 21:00:20",
            "updated_at": "2018-03-03 21:00:20"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/product\/inventories\/1?page=1",
        "last": "http:\/\/localhost\/api\/product\/inventories\/1?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/product\/inventories\/1",
        "per_page": 10,
        "to": 1,
        "total": 1
    }
}
```

### HTTP Request
`GET api/product/inventories/{product_id}`

`HEAD api/product/inventories/{product_id}`


<!-- END_e520b4c61f6a6f3ff94ac47af59165a1 -->

<!-- START_abda0d780ec6c30a7ec3e75a422e61b2 -->
## GET ProductCostInventory

> Example request:

```bash
curl -X GET "http://localhost/api/product_inventory/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/product_inventory/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "product_id": 1,
    "distribution_center_id": 1,
    "quantity": 7,
    "created_at": "2018-03-03 21:00:20",
    "updated_at": "2018-03-03 21:00:20"
}
```

### HTTP Request
`GET api/product_inventory/{id}`

`HEAD api/product_inventory/{id}`


<!-- END_abda0d780ec6c30a7ec3e75a422e61b2 -->

<!-- START_87b962f705bd9cbc6daa73baa0ab3102 -->
## POST,PUT ProductCostInventory

> Example request:

```bash
curl -X POST "http://localhost/api/product_inventory" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/product_inventory",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/product_inventory`


<!-- END_87b962f705bd9cbc6daa73baa0ab3102 -->

<!-- START_85e9cb287fde53beee2deedd51d95fff -->
## POST,PUT ProductCostInventory

> Example request:

```bash
curl -X PUT "http://localhost/api/product_inventory" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/product_inventory",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/product_inventory`


<!-- END_85e9cb287fde53beee2deedd51d95fff -->

<!-- START_51626951d2d66c8614c9bb5b27565e60 -->
## DELETE ProductCostInventory

> Example request:

```bash
curl -X DELETE "http://localhost/api/product_inventory/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/product_inventory/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/product_inventory/{id}`


<!-- END_51626951d2d66c8614c9bb5b27565e60 -->

